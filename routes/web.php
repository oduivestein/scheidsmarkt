<?php

// Controller for form to club new matches
Route::get('/club/matches/create', 'MatchController@create');
// Controller to put new match into database
Route::post('club/matches', 'MatchController@store');
// View all posted matches
Route::get('club/matches', 'MatchController@index');
// View a specific match
Route::get('/club/matches/{match}', 'MatchController@show');