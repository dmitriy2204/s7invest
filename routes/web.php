<?php

Route::get('/', 'MainController@mainPage');

Route::get('/search', 'MainController@search')
    ->name('public.user.search');