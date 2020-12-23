<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
        Route::get('/', 'DashboardController@index')->name('admin.dashboard');
        Route::get('logout', 'LoginController@logout') ->name('admin.logout') ;

        Route::group(['prefix' => 'settings'], function () {
            Route::get('shipping-methods/{type}', 'SettingController@editShipping')->name('edit.shipping');
            Route::put('shipping-methods/{id}', 'SettingController@updateShipping')->name('update.shipping');
        });
        Route::group(['prefix' => 'profile'], function () {
            Route::get('edit', 'ProfileController@editProfile')->name('edit.profile');
            Route::put('update', 'ProfileController@updateProfile')->name('update.profile');
        });
        Route::group(['prefix' => 'main_categories'], function (){
            Route::get('/', 'MainCategoriesController@index')->name('admin.mainCategories');
            Route::get('create', 'MainCategoriesController@create')->name('admin.mainCategories.create');
            Route::post('store', 'MainCategoriesController@store')->name('admin.mainCategories.store');
            Route::get('edit/{id}', 'MainCategoriesController@edit')->name('admin.mainCategories.edit');
            Route::post('update/{id}', 'MainCategoriesController@update')->name('admin.mainCategories.update');
            Route::get('delete/{id}', 'MainCategoriesController@destroy')->name('admin.mainCategories.delete');
        });
        Route::group(['prefix' => 'sub_categories'], function (){
            Route::get('/', 'SubCategoriesController@index')->name('admin.subCategories');
            Route::get('create', 'SubCategoriesController@create')->name('admin.subCategories.create');
            Route::post('store', 'SubCategoriesController@store')->name('admin.subCategories.store');
            Route::get('edit/{id}', 'SubCategoriesController@edit')->name('admin.subCategories.edit');
            Route::post('update/{id}', 'SubCategoriesController@update')->name('admin.subCategories.update');
            Route::get('delete/{id}', 'SubCategoriesController@destroy')->name('admin.subCategories.delete');
        });
        Route::group(['prefix' => 'brand'], function (){
            Route::get('/', 'BrandController@index')->name('admin.brand');
            Route::get('create', 'BrandController@create')->name('admin.brand.create');
            Route::post('store', 'BrandController@store')->name('admin.brand.store');
            Route::get('edit/{id}', 'BrandController@edit')->name('admin.brand.edit');
            Route::post('update/{id}', 'BrandController@update')->name('admin.brand.update');
            Route::get('delete/{id}', 'BrandController@destroy')->name('admin.brand.delete');
        });
    });

    Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function () {
        Route::get('login', 'LoginController@login')->name('admin.login');
        Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
    });
});
