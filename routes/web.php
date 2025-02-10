<?php

use App\Http\Middleware\LanguageCheck;
use App\Http\Middleware\ProductPriceRequestLimit;
use App\Http\Middleware\SpamProtection;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    $product = Product::find(2);
    return redirect()->to(url('product/' . $product->slug));
});

Route::get('/product/{slug}', [MainController::class, 'product'])->name('product.detail');

Route::post('/product/send-request', [MainController::class, 'handleProductForm'])->middleware([SpamProtection::class,ProductPriceRequestLimit::class])->name('product.send.request');


Route::post('/form/mail-marketing/send', [MainController::class, 'handleMailMarketingForm'])->middleware([SpamProtection::class])->name('form.send.mail_marketing');

Route::get('/language/{locale}',[MainController::class,'language'])->middleware([LanguageCheck::class])->name('language');
