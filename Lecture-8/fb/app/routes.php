<?php
//Authentication Controller
Route::get('/login', 'AuthenticationController@showLoginView');
Route::post('/login', 'AuthenticationController@loginUser');

Route::get('/logout', 'AuthenticationController@logout');

Route::get('/users', 'AuthenticationController@showUsers');


//Registration Controller
Route::get('/signup', 'RegistrationController@showSignUpView');
Route::post('/signup', 'RegistrationController@signUp');

//Profile 
Route::get('/profile/{uid}', 'HomeController@showUserProfile');






