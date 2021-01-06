<?php

Route::get('/', 'HomeController@index');

Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/brand', 'BrandController@index')->name('brand');
Route::get('/product-detail', 'ProductController@show')->name('product-detail');


Route::get('/faq', 'FaqController@index');
Route::get('/saves', 'SavesController@index');


Route::get('/about-us', 'AboutUsController@index');

Route::get('/contact-us', 'ContactUsControler@index');
