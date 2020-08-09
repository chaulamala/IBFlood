<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('report/create','Api\ReportController@store');
Route::get('report/monthnow','Api\ReportController@monthnow');
Route::get('report/daynow','Api\ReportController@daynow');
Route::get('report/cobanow','Api\ReportController@cobanow');
Route::get('report/apa','Api\ReportController@apa');

Route::post('notif/create','Api\NotifController@store');
Route::get('notif','Api\NotifController@index');
Route::get('nohp','Api\NomerhpController@all');




