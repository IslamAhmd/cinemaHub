<?php

namespace App\Providers;

use App\Menu;
use Illuminate\Support\ServiceProvider;
use Validator;
use App\Services\CustomValidator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::resolver(function($translator, $data, $rules, $messages)
        {
            return new CustomValidator($translator, $data, $rules, $messages);
        });
        $global_menus = Menu::with('children')->where(['parent_id'=>0])->orderBy('order')->get();
        view()->share('global_menus', $global_menus);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
