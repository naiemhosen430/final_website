<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/aboutus', function () {
    return view('frontend.about');
});

Route::get('/product', function () {
    return view('frontend.products');
});

Route::get('/product/{id}', function () {
    return view('frontend.products-details');
});

Route::get('/compliance', function () {
    return view('frontend.compliance');
});

Route::get('/eews&vents', function () {
    return view('frontend.eews&vents');
});

Route::get('/contractuse', function () {
    return view('frontend.contractuse');
});

Route::get('/management/{id}', function () {
    return view('frontend.management-detail');
});
