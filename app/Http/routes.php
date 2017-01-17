<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DashboardController@index');

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'App\Http\Middleware\AdminCheck'], function() {
    Route::get('admin/gunpla/scrape', 'GunplaScraperController@scrape');
    Route::get('admin/gunpla/parse', 'GunplaScraperController@parse');

    Route::get('admin',                             'AdminController@index');

    Route::get('admin/mobilesuitvariations',             'MobileSuitVariationController@index');
    Route::get('admin/mobilesuitvariations/add',         'MobileSuitVariationController@add');
    Route::post('admin/mobilesuitvariations/add',        'MobileSuitVariationController@post');
    Route::get('admin/mobilesuitvariations/{id}/edit',   'MobileSuitVariationController@edit');
    Route::get('admin/mobilesuitvariations/{id}/delete', 'MobileSuitVariationController@delete');
    Route::post('admin/mobilesuitvariations/{id}/edit',  'MobileSuitVariationController@put');

    Route::get('admin/mobilesuits',                 'MobileSuitController@index');
    Route::get('admin/mobilesuits/{id}/edit',       'MobileSuitController@edit');
    Route::get('admin/mobilesuits/add',             'MobileSuitController@add');
    Route::post('admin/mobilesuits/{id}/edit',      'MobileSuitController@put');
    Route::post('admin/mobilesuits',                'MobileSuitController@post');
    Route::get('admin/mobilesuits/{id}/delete',     'MobileSuitController@delete');

    Route::get('admin/pilots',                      'PilotController@index');
    Route::get('admin/pilots/{id}/edit',            'PilotController@edit');
    Route::post('admin/pilots/{id}/edit',           'PilotController@put');
    Route::post('admin/pilots',                     'PilotController@post');
    Route::get('admin/pilots/{id}/delete',          'PilotController@delete');
    Route::get('admin/pilots/add',                  'PilotController@add');

    route::get('admin/media',                      'MediaController@index');
    route::get('admin/media/{id}/edit',            'MediaController@edit');
    route::get('admin/media/{id}/delete',          'MediaController@delete');
    route::get('admin/media/add',                  'MediaController@add');
    route::post('admin/media',                     'MediaController@post');
    route::post('admin/media/{id}/edit',           'MediaController@put');

    Route::get('admin/factions',                    'FactionController@index');
    Route::get('admin/factions/{id}/edit',          'FactionController@edit');
    Route::get('admin/factions/{id}/delete',        'FactionController@delete');
    Route::get('admin/factions/add',                'FactionController@add');
    Route::post('admin/factions',                   'FactionController@post');
    Route::post('admin/factions/{id}/edit',         'FactionController@put');

    Route::get('admin/timelines',                   'TimelineController@index');
    Route::get('admin/timelines/{id}/edit',         'TimelineController@edit');
    Route::get('admin/timelines/{id}/delete',       'TimelineController@delete');
    Route::get('admin/timelines/add',               'TimelineController@add');
    Route::post('admin/timelines',                  'TimelineController@post');
    Route::post('admin/timelines/{id}/edit',        'TimelineController@put');

    Route::get('admin/scales',                      'AdminController@scales');
    Route::get('admin/scales/{id}/edit',            'AdminController@editscale');
    Route::get('admin/scales/{id}/delete',          'AdminController@deletescale');
    Route::get('admin/scales/add',                  'AdminController@addscale');
    Route::post('admin/scales',                     'AdminController@postscale');

    Route::get('admin/currency/get',           'CurrencyController@getRates');
});
