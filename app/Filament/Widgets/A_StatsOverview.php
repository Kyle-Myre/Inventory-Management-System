<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class A_StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Customers', Customer::count())

                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Customer::min('id'), Customer::max('id')])
                ->color('primary'),

            Stat::make('Products', Product::count())

                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Product::min('id'), Product::max('id')])
                ->color('primary'),

            Stat::make('Transactions', Transaction::count())

                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Transaction::min('id'), Transaction::max('id')])
                ->color('primary'),

            Stat::make('Order', Order::count())

                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Order::min('id'), Order::max('id')])
                ->color('primary'),

            Stat::make('Categories', Category::count())

                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Category::min('id'), Category::max('id')])
                ->color('primary'),

            Stat::make('Providers', Provider::count())

                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Provider::min('id'), Provider::max('id')])
                ->color('primary'),
        ];
    }
}
