<?php

Route::get('/', 'MainController@mainPage')->name('public.main');

Route::get('/search', 'MainController@search')
    ->name('public.user.search');

Route::group(['prefix' => '/detail'], function (){
    Route::get('/{id}', 'MainController@one')
        ->where('id', '[0-9]+')
        ->name('public.detail.one');

    Route::get('/create', 'MainController@create')
        ->name('public.detail.create');

    Route::post('/create', 'MainController@createDetail')
        ->name('public.detail.createDetail');

    Route::get('/edit/{id}', 'MainController@edit')
        ->where('id', '[0-9]+')
        ->name('public.detail.edit');

    Route::post('/edit/{id}', 'MainController@editDetail')
        ->where('id', '[0-9]+')
        ->name('public.detail.editDetail');

    Route::get('/delete/{id}', 'MainController@delete')
        ->where('id', '[0-9]+')
        ->name('public.detail.delete');

    Route::get('/take/{id}', 'MainController@take')
        ->where('id', '[0-9]+')
        ->name('public.detail.take');

    Route::post('/take/{id}', 'MainController@takeDetail')
        ->where('id', '[0-9]+')
        ->name('public.detail.takeDetail');

    Route::get('/put/{id}', 'MainController@put')
        ->where('id', '[0-9]+')
        ->name('public.detail.put');

    Route::post('/put/{id}', 'MainController@putDetail')
        ->where('id', '[0-9]+')
        ->name('public.detail.putDetail');

    Route::get('/order/{id}', 'MainController@order')
        ->where('id', '[0-9]+')
        ->name('public.detail.order');

    Route::post('/order/{id}', 'MainController@orderDetail')
        ->where('id', '[0-9]+')
        ->name('public.detail.orderDetail');

});