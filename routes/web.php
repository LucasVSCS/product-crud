<?php

Route::get('/index', function () {
    return view('index');
});

Route::resource('product', 'Product\ProductController');

