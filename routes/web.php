<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('countries.index');
});

Route::get('/countries-region', 'CountriesController@getCountriesByRegion')->name('countries_region');
Route::get('/countries-count', 'CountriesController@getCountriesByRegionCount')->name('countries_count');
Route::get('/population', 'CountriesController@getPopulationByRegion')->name('region_population');
Route::get('/countries-languages', 'CountriesController@getCountriesByLanguages')->name('countries_languages');
Route::get('/spoken-languages', 'CountriesController@getPeopleBySpokenLanguage')->name('spoken_language');