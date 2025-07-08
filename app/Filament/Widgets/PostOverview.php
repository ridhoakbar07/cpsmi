<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostOverview extends BaseWidget
{
    protected ?string $heading = 'Blog Post';

    protected ?string $description = 'An overview of Blog Post analytic';

    protected function getStats(): array
    {
        return [
            Stat::make('Published', Post::published()->count())
                ->description('of '. Post::all()->count() .' total posts')
                ->color('success')
                ->descriptionIcon('heroicon-o-check-badge'),
            Stat::make('Sheduled ', Post::scheduled()->count())
                ->description('of '. Post::all()->count() .' total posts')
                ->color('warning')
                ->descriptionIcon('heroicon-o-calendar-days'),
            Stat::make('Pending ', Post::pending()->count())
                ->description('of '. Post::all()->count() .' total posts')
                ->color('info')
                ->descriptionIcon('heroicon-o-clock'),
        ];
    }
}
