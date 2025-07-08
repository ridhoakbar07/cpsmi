<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserOverview extends BaseWidget
{
    protected ?string $heading = 'User';

    protected ?string $description = 'An overview of User analytic';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::all()->count())
                ->description('Registered'),
            Stat::make('', User::whereNotNull('email_verified_at')->count())
            ->description('Verified'),
            Stat::make('', User::whereNull('email_verified_at')->count())
            ->description('Not Verified'),
        ];
    }
}
