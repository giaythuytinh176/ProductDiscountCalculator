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
    return view('index');
});

Route::post("/results", function (\Illuminate\Http\Request $request) {


    if ($request->input("price") && $request->input("discount")) {
        $discount_amount = $request->input("price") * $request->input("discount") * 0.01;
        $discount_price = $request->input("price") * (100 - $request->input("discount")) * 0.01;

        return view("result", ["discount_amount" => $discount_amount, "discount_price" => $discount_price]);
    }
});


