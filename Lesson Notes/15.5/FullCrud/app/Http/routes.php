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

Route::get('/', function () {
    return view('welcome');
});

// Race Routes
Route::get('/races',        "RaceController@getRaces");
Route::get('/races/{id}',   "RaceController@getRaceDetails" );
Route::get('/editor',       "RaceController@editRaceView");
Route::post('/editor',      "RaceController@createNewRace");

Route::post('/api/removeRace',      "RaceController@removeRace");