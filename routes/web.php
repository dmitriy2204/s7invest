<?php

Route::get('/', 'MainController@mainPage')->name('public.main');

Route::get('/search', 'MainController@search')
    ->name('public.user.search');

Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);

Route::post('/login', 'AuthController@loginPost')
    ->name('public.user.loginPost');

Route::get('/register', 'AuthController@register')
    ->name('public.user.register');

Route::post('/register', 'AuthController@registerPost')
    ->name('public.user.registerPost');

Route::get('/logout', 'AuthController@logout')
    ->name('public.user.logout');

Route::group(['prefix' => '/lk'], function (){
    Route::get('/{id}', 'UserController@lk')
        ->name('public.user.lk');
    Route::get('/{id}/taken_details', 'UserController@takenDetails')
        ->name('public.user.takenDetails');
});

Route::group(['prefix' => '/admin'], function (){
    Route::get('/{id}', 'UserController@admin')
        ->name('public.admin.lk');
});

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

    Route::get('/put_new', 'MainController@putNew')
        ->name('public.detail.putNew');

    Route::post('/put_new', 'MainController@putNewDetail')
        ->name('public.detail.putNewDetail');

    Route::get('/order/{id}', 'MainController@order')
        ->where('id', '[0-9]+')
        ->name('public.detail.order');

    Route::post('/order/{id}', 'MainController@orderDetail')
        ->where('id', '[0-9]+')
        ->name('public.detail.orderDetail');

    Route::get('/order_new', 'MainController@orderNew')
        ->name('public.detail.orderNew');

    Route::post('/order_new', 'MainController@orderNewDetail')
        ->name('public.detail.orderNewDetail');


});

