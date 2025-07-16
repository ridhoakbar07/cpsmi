<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebProfileResource\Pages;
use App\Filament\Resources\WebProfileResource\RelationManagers;
use App\Models\WebProfile;
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

class WebProfileResource extends Resource
{
    protected static ?string $model = WebProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationGroup = 'Web';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Perusahaan')
                    ->schema([
                        TextInput::make('nama_perusahaan')
                            ->maxLength(155),
                        TextInput::make('telp')
                            ->helperText('+62 812-3456-7890')
                            ->tel()
                            ->maxLength(155),
                        Textarea::make('alamat')
                            ->maxLength(155)
                            ->columnSpanFull(),
                        Section::make('Kontak Email')
                            ->description('Tambahkan email kontak anda disini, bisa lebih dari satu.')
                            ->schema([
                                Repeater::make('kontak_mail')
                                    ->label('Emails')
                                    ->schema([
                                        TextInput::make('posisi')
                                            ->helperText('admin')
                                            ->required()
                                            ->maxLength(155),
                                        TextInput::make('alamat_email')
                                            ->label('Email')
                                            ->helperText('info@inayahbintangborneo.web.id')
                                            ->required()
                                            ->email()
                                            ->maxLength(255),
                                    ])->columns(2),
                            ])->columnSpanFull(),
                        FileUpload::make('logo')
                            ->label('Background')
                            ->hint('Max height 400')
                            ->directory('assets/background')
                            ->maxSize(1024 * 1024 * 2)
                            ->rules('dimensions:max_height=400')
                            ->nullable()->columnSpanFull(),
                        FileUpload::make('favicon')
                            ->directory('assets/favicon')
                            ->maxSize(50)
                            ->nullable()->columnSpanFull(),
                        \FilamentTiptapEditor\TiptapEditor::make('sejarah')
                            ->profile('default')
                            ->disableFloatingMenus()
                            ->extraInputAttributes(['style' => 'max-height: 30rem; min-height: 24rem'])
                            ->required()
                            ->columnSpanFull(),
                        TextArea::make('visi')
                            ->maxLength(255),
                        \FilamentTiptapEditor\TiptapEditor::make('misi')
                            ->profile('default')
                            ->disableFloatingMenus()
                            ->extraInputAttributes(['style' => 'max-height: 30rem; min-height: 24rem'])
                            ->required()
                            ->columnSpanFull(),
                        Section::make('Quick Links')
                            ->description('Tambahkan tautan sosial media Anda di sini. Ini akan ditampilkan di footer blog Anda.')
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
                    ])->columns(2),
                Section::make('Informasi Lainnya')
                    ->schema([
                        FileUpload::make('struktur_organisasi')
                            ->hint('Max height 400')
                            ->directory('assets/struktur_organisasi')
                            ->maxSize(1024 * 1024 * 2)
                            ->nullable()->columnSpanFull(),
                        Section::make('Personalia')
                            ->description('Tambahkan susunan personalia anda disini.')
                            ->schema([
                                Repeater::make('personil')
                                    ->label('Karyawan')
                                    ->schema([
                                        TextInput::make('jabatan')
                                            ->helperText('manajer, admin, atau armada')
                                            ->required()
                                            ->maxLength(155),
                                        TextInput::make('jumlah')
                                            ->label('Jumlah Orang')
                                            ->helperText('Jumlah karyawan di posisi ini, misal 10 orang')
                                            ->required()
                                            ->maxLength(255),
                                    ])->columns(2),
                            ])->columnSpanFull(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_perusahaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kontak_mail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('favicon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('visi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('struktur_organisasi')
                    ->searchable(),
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
            'index' => Pages\ListWebProfiles::route('/'),
            'create' => Pages\CreateWebProfile::route('/create'),
            'edit' => Pages\EditWebProfile::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return WebProfile::count() === 0;
    }
}
