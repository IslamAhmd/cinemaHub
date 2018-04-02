<?php
Route::group(['prefix' => LaravelLocalization::setLocale() , 'middleware' => ['localeSessionRedirect', 'localizationRedirect']] , function() {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');
        Route::group(['middleware' => 'admin'], function () {
            Route::get('/', 'Admin\DashboardController@index')->name('admin');
            Route::post('logout', 'Auth\LoginController@logout')->name('logout');

            Route::Resource('data_types', 'Admin\DataTypesController');
            Route::Resource('menus', 'Admin\MenusController');
            Route::Resource('users', 'Admin\UsersController');
            Route::Resource('slider_images', 'Admin\SliderImageController');
            Route::Resource('networks', 'Admin\NetworksController');
            Route::Resource('genres', 'Admin\GenresController');
            Route::Resource('movies', 'Admin\MoviesController');
            Route::Resource('shows', 'Admin\ShowsController');
            Route::Resource('seasons', 'Admin\SeasonsController');
            Route::Resource('episodes', 'Admin\EpisodesController');

        });
        Route::group(['middleware' => 'adminApi'], function () {
            Route::Resource('menus_api', 'Api\MenusApiController');
        });
    });
});