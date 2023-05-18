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

    $icons = [
        [
            "src" => "buy-comics-digital-comics.png",
            "title" => "Digital Comics"
        ],
        [
            "src" => "buy-comics-merchandise.png",
            "title" => "Merchandise"
        ],
        [
            "src" => "buy-comics-shop-locator.png",
            "title" => "Shop Locator"
        ],
        [
            "src" => "buy-comics-subscriptions.png",
            "title" => "Subscription"
        ],
        [
            "src" => "buy-dc-power-visa.svg",
            "title" => "Power Visa"
        ],
    ];
    return view('home', compact('icons'));
})->name('home');
