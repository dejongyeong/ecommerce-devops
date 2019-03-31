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

if (\App::environment('development') || \App::environment('production')) {
        \URL::forceScheme('https');
        \URL::forceRootUrl('https://ecommerce-devops.herokuapp.com/');
}

Route::get('/{any}', function(){
        return view('landing');
})->where('any', '.*');
