<?php

use App\Http\Controllers\masters\GoodsController;
use App\Http\Controllers\masters\GoodsCategoriesController;
use Illuminate\Support\Facades\Route;



Route::prefix('/')->group(function () {
    Route::get("/", function () {
        return view("auth.login");
    });
    Route::get("dashboard", function () {
        return view("templates.index");
    })->name('dashboard');
});


Route::prefix('masters')->group(function () {
    Route::controller(GoodsController::class)->prefix('goods')->group(function () {
        Route::get('/', 'indexView')->name('masters.goods.index');
        Route::get('add', 'addView')->name('masters.goods.add');
        Route::get('edit', 'editView')->name('masters.goods.edit');
    });
    Route::controller(GoodsCategoriesController::class)->prefix('goods-categories')->group(function () {
        Route::get('/', 'indexView')->name('masters.goodsCategories.index');
        Route::get('add', 'addView')->name('masters.goodsCategories.add');
        Route::get('edit', 'editView')->name('masters.goodsCategories.edit');
    });
});
