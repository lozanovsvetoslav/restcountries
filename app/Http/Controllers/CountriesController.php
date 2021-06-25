<?php

namespace App\Http\Controllers;

use App\Services\CountriesService;
use Illuminate\Http\Request;

class CountriesController extends Controller
{

    public function getCountriesByRegion()
    {

        $data = CountriesService::groupCountriesByRegions();

        return view('countries.countries_region')->with('data', $data);
    }

    public function getCountriesByRegionCount ()
    {
        $data = CountriesService::groupCountriesByRegionsCount();

        return view('countries.countries_count')->with('data', $data);
    }

    public function getPopulationByRegion ()
    {
        $data = CountriesService::populationByRegion();

        return view('countries.population_by_region')->with('data', $data);
    }

    public function getCountriesByLanguages ()
    {
        $data = CountriesService::groupCountriesByLanguages();

        return view('countries.countries_by_languages')->with('data', $data);
    }

    public function getPeopleBySpokenLanguage ()
    {
        $data = CountriesService::groupBySpokenLanguage();

        return view('countries.population_by_spoken_language')->with('data', $data);
    }
}