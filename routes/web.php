<?php

use Illuminate\Support\Facades\Route;

// Views
Route::view('/', 'frontend.index')->name('home');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/faq', 'frontend.faq')->name('faq');
Route::view('/cart', 'frontend.cart')->name('cart');
Route::view('/checkout', 'frontend.checkout')->name('checkout');
Route::view('/wishlist', 'frontend.wishlist')->name('wishlist');
Route::view('/allproducts', 'frontend.allproducts')->name('allproducts');
Route::view('/category', 'frontend.category')->name('category');