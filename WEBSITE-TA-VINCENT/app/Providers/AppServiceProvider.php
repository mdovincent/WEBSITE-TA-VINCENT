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
            $view->with('favoriteShops', [
                ['name' => 'Kopi Gayo ID', 'img' => 'https://images.unsplash.com/photo-1497935586351-b67a49e012bf?auto=format&fit=crop&w=120&q=80'],
                ['name' => 'Tenun Nusantara', 'img' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=120&q=80'],
                ['name' => 'Madu Hutan', 'img' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=120&q=80'],
                ['name' => 'Keripik Jogja', 'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=120&q=80'],
            ]);
        });

        View::composer(['components.dashboard.topbar', 'components.dashboard.sidebar'], function ($view): void {
            $view->with('cartItemCount', CartController::countItems(CartController::shopsData()));
        });
    }
}
