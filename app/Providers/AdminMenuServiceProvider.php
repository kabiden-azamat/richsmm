<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Spatie\Menu\Laravel\Menu;

class AdminMenuServiceProvider extends ServiceProvider
{
    public static $menu = [];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        self::top_menu();
    }

    /**
     * @param array $menuItem
     * @return void
     */
    public static function addMenuItem($menuItem = []):void
    {
        self::$menu[] = $menuItem;
    }

    public static function top_menu()
    {
        View::composer('admin.layout.sidebar', function ($view) {
            $menu = '';
            if(Auth::guard()->user()->hasPermissionTo('user.permission_admin_panel')) {
                $menu = Menu::new();
                $menu->add();
            }
            $view->with('_menu', 'test');
        });
    }
}
