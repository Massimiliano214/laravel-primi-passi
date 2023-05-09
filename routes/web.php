<?php

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

Route::get('/', function () {

    $dinamicText = 'hello Laravel World';
    $name = 'Samuel';

    $data = [
        'dinamicText' => $dinamicText,
        'nawOptions' => [
            'home',
            'review'
        ],
        'name' => $name,
    ];

    return view('home', $data);
})->name('home');


Route::get('recensioni', function() {

    $name = 'Samuel';

    $data = [
        'name' => $name,
    ];

    return view('review', $data);
})->name('review');
