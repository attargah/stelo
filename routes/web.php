<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    $product = Product::find(2);
    return redirect()->to(url('product/' . $product->slug));
});

Route::get('/product/{slug}', [MainController::class, 'product'])->name('product.detail');

Route::post('/product/send-request', [MainController::class, 'handleProductForm'])->name('product.send.request');
