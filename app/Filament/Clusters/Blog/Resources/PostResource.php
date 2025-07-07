<?php

namespace App\Filament\Clusters\Blog\Resources;

use App\Enums\PostStatus;
use App\Filament\Clusters\Blog;
use App\Filament\Clusters\Blog\Resources\PostResource\Pages;
use App\Filament\Clusters\Blog\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationLabel = 'Posts';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?int $navigationSort = 1;

    protected static ?string $cluster = Blog::class;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Blog Details')
                    ->schema([
                        Forms\Components\Fieldset::make('Titles')
                            ->schema([
                                Forms\Components\Select::make('category_id')
                                    ->multiple()
                                    ->preload()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->live(true)
                                            ->afterStateUpdated(function (Get $get, Set $set, ?string $operation, ?string $old, ?string $state) {
                                                $set('slug', Str::slug($state));
                                            })
                                            ->unique('categories', 'name', null, 'id')
                                            ->required()
                                            ->maxLength(155),
                                        Forms\Components\TextInput::make('slug')
                                            ->unique('categories', 'slug', null, 'id')
                                            ->readOnly()
                                            ->maxLength(255),
                                    ])
                                    ->searchable()
                                    ->relationship('categories', 'name')
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('title')
                                    ->live(true)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set(
                                        'slug',
                                        Str::slug($state)
                                    ))
                                    ->required()
                                    ->unique('posts', 'title', null, 'id')
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('slug')
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('sub_title')
                                    ->maxLength(255)
                                    ->columnSpanFull(),

                                Forms\Components\Select::make('tag_id')
                                    ->multiple()
                                    ->preload()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->live(true)->afterStateUpdated(fn(Set $set, ?string $state) => $set(
                                                'slug',
                                                Str::slug($state)
                                            ))
                                            ->unique('tags', 'name', null, 'id')
                                            ->required()
                                            ->maxLength(50),
                                        Forms\Components\TextInput::make('slug')
                                            ->unique('tags', 'slug', null, 'id')
                                            ->readOnly()
                                            ->maxLength(155),
                                    ])
                                    ->searchable()
                                    ->relationship('tags', 'name')
                                    ->columnSpanFull(),
                            ]),
                        \FilamentTiptapEditor\TiptapEditor::make('body')
                            ->profile('default')
                            ->disableFloatingMenus()
                            ->extraInputAttributes(['style' => 'max-height: 30rem; min-height: 24rem'])
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Fieldset::make('Feature Image')
                            ->schema([
                                Forms\Components\FileUpload::make('cover_photo_path')
                                    ->label('Cover Photo')
                                    ->directory('/blog-feature-images')
                                    ->hint('This cover image is used in your blog post as a feature image. Recommended image size 1200 X 628')
                                    ->image()
                                    ->preserveFilenames()
                                    ->imageEditor()
                                    ->maxSize(1024 * 5)
                                    ->rules('dimensions:max_width=1920,max_height=1004')
                                    ->required(),
                                Forms\Components\TextInput::make('photo_alt_text')->required(),
                            ])->columns(1),

                        Forms\Components\Fieldset::make('Status')
                            ->schema([
                                Forms\Components\ToggleButtons::make('status')
                                    ->live()
                                    ->inline()
                                    ->options(PostStatus::class)
                                    ->required(),

                                Forms\Components\DateTimePicker::make('scheduled_for')
                                    ->visible(function ($get) {
                                        return $get('status') === PostStatus::SCHEDULED->value;
                                    })
                                    ->required(function ($get) {
                                        return $get('status') === PostStatus::SCHEDULED->value;
                                    })
                                    ->minDate(now()->addMinutes(5))
                                    ->native(false),
                            ]),
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->nullable(false)
                            ->default(auth()->id()),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sub_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('scheduled_for')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cover_photo_path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('photo_alt_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
