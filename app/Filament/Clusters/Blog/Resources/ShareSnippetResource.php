<?php

namespace App\Filament\Clusters\Blog\Resources;

use App\Filament\Clusters\Blog;
use App\Filament\Clusters\Blog\Resources\ShareSnippetResource\Pages;
use App\Filament\Clusters\Blog\Resources\ShareSnippetResource\RelationManagers;
use App\Models\ShareSnippet;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShareSnippetResource extends Resource
{
    protected static ?string $model = ShareSnippet::class;

    protected static ?string $navigationLabel = 'Share Snippets';
    protected static ?string $navigationIcon = 'heroicon-o-share';
    protected static ?int $navigationSort = 4;

    protected static ?string $cluster = Blog::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('script_code')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('html_code')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('active')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageShareSnippets::route('/'),
        ];
    }
}
