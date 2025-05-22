<?php

namespace App\Filament\Pages;

use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Illuminate\Contracts\Support\Htmlable;
use ShuvroRoy\FilamentSpatieLaravelBackup\Pages\Backups as BaseBackups;

class Backups extends BaseBackups
{
    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    public function getHeading(): string | Htmlable
    {
        return 'Application Backups';
    }
 
    public static function getNavigationGroup(): ?string
    {
        return 'Core';
    }

    public static function canAccess(): bool
    {
        return auth()->user()->hasRole('admin');
    }
}