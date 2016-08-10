<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Headers que necesito usar para los request a la API
//X-Requested-With  XMLHttpRequest
//Content-Type  application/json


Route::group(['prefix' => 'api/v1'], function () {
  Route::resource('meeting', 'MeetingController', [
    'except' => ['edit', 'create']
  ]);

  Route::resource('meeting/registration', 'RegistrationController', [
    'only' => ['store', 'destroy']
  ]);

  Route::post('user',[
    'uses' => 'AuthController@store'
  ]);

  Route::post('user/signin',[
    'uses' => 'AuthController@signin'
  ]);
});
