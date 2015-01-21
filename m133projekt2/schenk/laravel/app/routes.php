<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*   Hier werden das Routing Konfiguriert.
*   Damit werden die URL Abfrage umgeleitet.
*/


Route::group(['prefix' => 'benutzer'], function()
{
        Route::get('createstore', 'BenutzerController@createstore');
        Route::post('store', 'BenutzerController@store');
        Route::get('createcheck', 'BenutzerController@createcheck');
        Route::post('check', 'BenutzerController@check');
});

Route::group(['prefix' => 'umfrage'], function(){
   
        
    Route::get('createumfrag', 'UmfragController@createumfrag');
    Route::post('umfrage', 'UmfragController@umfrag');
    Route::get('auswertung', 'UmfragController@auswertung');
    Route::post('abmelden' , 'UmfragController@abmelden');
    
});

Route::get('/je', function()
{
    return View::make('umfrage.auswertung');
});



Route::get('/', function()
{
	 return View::make('index');
});

