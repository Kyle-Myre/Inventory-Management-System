<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Transaction;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class A_StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Customers', Customer::count())
                ->description("Current Customers")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Customer::min('id'), Customer::max('id')])
                ->color('primary'),

            Stat::make('Products', Product::count())
                ->description("Current Products")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Product::min('id'), Product::max('id')])
                ->color('primary'),

            Stat::make('Order', Order::count())
                ->description("Current Order")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Order::min('id'), Order::max('id')])
                ->color('primary'),

            Stat::make('Categories', Category::count())
                ->description("Current Categories")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Category::min('id'), Category::max('id')])
                ->color('primary'),

            Stat::make('Providers', Provider::count())
                ->description("Current Providers")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([Provider::min('id'), Provider::max('id')])
                ->color('primary'),


            Stat::make('Users', User::count())
                ->description("Current Users")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([User::min('id'), User::max('id')])
                ->color('primary'),
        ];
    }
}
