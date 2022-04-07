<?php
//Resource Route For SClassController
Route::resource('/class' , 'Api\SclassController');

//Resource Route For SubjectController
Route::resource('/subject' , 'Api\SubjectController');

// jwt 
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});