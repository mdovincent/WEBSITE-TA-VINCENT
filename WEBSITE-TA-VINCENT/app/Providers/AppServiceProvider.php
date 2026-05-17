<?php

namespace App\Providers;

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer([
            'layouts.dashboard',
            'dashboard',
            'orders.*',
            'cart.*',
            'components.dashboard.*',
        ], function ($view): void {
            $view->with('dashboardUrl', fn (?string $fragment = null): string => route('dashboard').($fragment ? '#'.$fragment : ''));
        });

        View::composer(['components.dashboard.topbar', 'components.dashboard.sidebar'], function ($view): void {
            $view->with('cartItemCount', CartController::countItems(CartController::shopsData()));
        });
    }
}
