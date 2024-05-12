<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class UserslView extends ChartWidget
{
    protected static ?string $heading = 'Users View';

    protected function getData(): array
    {
        $customers = Trend::model(User::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();
            return [
                'datasets' => [
                    [
                        'label' => 'Users',
                        'data' => $customers->map(fn(TrendValue $value) => $value->aggregate),
                    ],
                ],
                'labels' => $customers->map(fn(TrendValue $value) => $value->date),
            ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
