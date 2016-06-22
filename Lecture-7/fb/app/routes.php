<?php

Route::get('/login', 'AuthenticationController@showLoginView');


Route::post('/login', 'AuthenticationController@loginUser');

Route::get('/users', 'AuthenticationController@showUsers');