<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebSettingResource\Pages;
use App\Filament\Resources\WebSettingResource\RelationManagers;
use App\Models\WebSetting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebSettingResource extends Resource
{
    protected static ?string $model = WebSetting::class;

    protected static ?string $navigationLabel = 'Settings';

    protected static ?string $navigationGroup = 'Web';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General Information')
                    ->schema([
                        TextInput::make('title')
                            ->maxLength(155)
                            ->required(),
                        TextInput::make('organization_name')
                            ->required()
                            ->maxLength(155)
                            ->minLength(3),
                        Textarea::make('description')
                            ->required()
                            ->minLength(10)
                            ->maxLength(1000)
                            ->columnSpanFull(),
                        FileUpload::make('logo')
                            ->hint('Max height 400')
                            ->directory('setting/logo')
                            ->maxSize(1024 * 1024 * 2)
                            ->rules('dimensions:max_height=400')
                            ->nullable()->columnSpanFull(),
                        FileUpload::make('favicon')
                            ->directory('setting/favicon')
                            ->maxSize(50)
                            ->nullable()->columnSpanFull()
                    ])->columns(2),
                Section::make('SEO')
                    ->description('Place your google analytic and adsense code here. This will be added to the head tag of your blog post only.')
                    ->schema([
                        Textarea::make('google_console_code')
                            ->startsWith('<meta')
                            ->nullable()
                            ->columnSpanFull(),
                        Textarea::make('google_analytic_code')
                            ->startsWith('<script')
                            ->endsWith('</script>')
                            ->nullable()
                            ->columnSpanFull(),
                        Textarea::make('google_adsense_code')
                            ->startsWith('<script')
                            ->endsWith('</script>')
                            ->nullable()
                            ->columnSpanFull(),
                    ])->columns(2),
                Section::make('Quick Links')
                    ->description('Add your quick links here. This will be displayed in the footer of your blog.')
                    ->schema([
                        Repeater::make('quick_links')
                            ->label('Links')
                            ->schema([
                                TextInput::make('label')
                                    ->required()
                                    ->maxLength(155),
                                TextInput::make('url')
                                    ->label('URL')
                                    ->helperText('URL should start with http:// or https://')
                                    ->required()
                                    ->url()
                                    ->maxLength(255),
                            ])->columns(2),
                    ])->columnSpanFull(),
            ]);
    }

    public static function canCreate(): bool
    {
        return WebSetting::count() === 0;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->limit(25)
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->limit(30)
                    ->searchable(),

                Tables\Columns\ImageColumn::make('logo'),

                Tables\Columns\TextColumn::make('organization_name'),

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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListWebSettings::route('/'),
            'create' => Pages\CreateWebSetting::route('/create'),
            'edit' => Pages\EditWebSetting::route('/{record}/edit'),
        ];
    }
}
