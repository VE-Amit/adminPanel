<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/clear', function(){
    // dd('hi');
    $exitCode = Artisan::call('migrate:seed');
    // $ex = Artisan::call('storage:link');
    echo 'done';
});

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard', 'App\Http\Controllers\Admin\AdminController@dashboard')->name('dashboard');
    /* Users */
    Route::get('users', 'App\Http\Controllers\Admin\UserController@index')->name('user.index');
    Route::get('user/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit')->name('user.edit');
    Route::POST('user/update/{id}', 'App\Http\Controllers\Admin\UserController@update')->name('user.update');
    Route::POST('user/pass_update/{id}', 'App\Http\Controllers\Admin\UserController@pass_update')->name('user.pass_update');
    Route::delete('user/delete/{id}', 'App\Http\Controllers\Admin\UserController@delete')->name('user.delete');
    /* Category */
    Route::get('categories', 'App\Http\Controllers\Admin\CategoryController@index')->name('category.index');
    Route::get('category/create', 'App\Http\Controllers\Admin\CategoryController@create')->name('category.create');
    Route::POST('category/store', 'App\Http\Controllers\Admin\CategoryController@store')->name('category.store');
    Route::get('category/edit/{id}', 'App\Http\Controllers\Admin\CategoryController@edit')->name('category.edit');
    Route::POST('category/update/{id}', 'App\Http\Controllers\Admin\CategoryController@update')->name('category.update');
    Route::delete('category/delete/{id}', 'App\Http\Controllers\Admin\CategoryController@delete')->name('category.delete');
    /* Subs */
    Route::get('subscriptions', 'App\Http\Controllers\Admin\SubscriptionController@index')->name('subs.index');
    Route::get('subscription/create', 'App\Http\Controllers\Admin\SubscriptionController@create')->name('subs.create');
    Route::POST('subscription/store', 'App\Http\Controllers\Admin\SubscriptionController@store')->name('subs.store');
    Route::get('subscription/edit/{id}', 'App\Http\Controllers\Admin\SubscriptionController@edit')->name('subs.edit');
    Route::POST('subscription/update/{id}', 'App\Http\Controllers\Admin\SubscriptionController@update')->name('subs.update');
    Route::delete('subscription/delete/{id}', 'App\Http\Controllers\Admin\SubscriptionController@delete')->name('subs.delete');
    /* Company */
    Route::get('companies', 'App\Http\Controllers\Admin\CompanyController@index')->name('company.index');
    Route::get('company/edit/{id}', 'App\Http\Controllers\Admin\CompanyController@edit')->name('company.edit');
    Route::POST('company/update/{id}', 'App\Http\Controllers\Admin\CompanyController@update')->name('company.update');
    Route::delete('company/delete/{id}', 'App\Http\Controllers\Admin\CompanyController@delete')->name('company.delete');
});