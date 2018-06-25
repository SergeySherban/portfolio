<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DefaultController@index')->name('default');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/portfolio', 'Dashboard\PortfolioController@index')->name('portfolio');

Route::get('/dashboard/services', 'Dashboard\ServiceController@index')->name('services');

Route::get('/dashboard/about', 'Dashboard\AboutController@index')->name('about');

Route::get('/dashboard/reports', 'Dashboard\ReportController@index')->name('reports');

Route::get('/dashboard/settings', 'Dashboard\SettingController@index')->name('settings');