<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return view("Layouts.Index");
});

Route::get("assets", function () {
    return view("Assets.Index");
});

Route::get("assets/add", function () {
    return view("Assets.Add");
});