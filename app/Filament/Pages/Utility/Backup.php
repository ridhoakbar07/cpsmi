<?php
namespace App\Filament\Pages\Utility;

use Illuminate\Contracts\Support\Htmlable;
use ShuvroRoy\FilamentSpatieLaravelBackup\Pages\Backups as Backups;

class Backup extends Backups
{
    protected static ?int $navigationSort = 5;

    protected static ?string $navigationIcon = 'heroicon-o-server-stack';

    public function getHeading(): string | Htmlable
    {
        return 'Backup';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Manage';
    }

    public static function getNavigationLabel(): string
    {
        return 'Backup';
    }
}