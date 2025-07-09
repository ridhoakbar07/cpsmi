<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalPosts = Post::count();

        return [
            Stat::make('Total Users', User::count())
                ->description('Registered'),
            Stat::make('Total Post', Post::published()->count())
                ->description('Published')
                ->color('success')
                ->descriptionIcon('heroicon-o-check-badge'),
        ];
    }
}
