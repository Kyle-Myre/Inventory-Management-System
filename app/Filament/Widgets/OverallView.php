<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Transaction;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;


class OverallView extends ChartWidget
{
    protected static ?string $heading = 'Data Overview';

    protected function getData(): array
    {
        $customers = Trend::model(Customer::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        $order = Trend::model(Order::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        $category = Trend::model(Category::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        $transaction = Trend::model(Transaction::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        $provider = Trend::model(Provider::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        $product = Trend::model(Product::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Customers',
                    'data' => $customers->map(fn(TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Providers',
                    'data' => $provider->map(fn(TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Products',
                    'data' => $product->map(fn(TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Transactions',
                    'data' => $transaction->map(fn(TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Categories',
                    'data' => $category->map(fn(TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Orders',
                    'data' => $order->map(fn(TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $customers->map(fn(TrendValue $value) => $value->date),
        ];
    }
    protected function getType(): string
    {
        return 'bar';
    }
}
