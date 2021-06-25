<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Contracts\CountriesInterface;

class CountriesService implements CountriesInterface
{
    
    public static function getData(): array
    {
        $response = Http::get('https://restcountries.eu/rest/v2/all');

        if ($response->failed()) {
            abort(404, 'Not Found');
        }

        return $response->json();
    }

    public static function groupCountriesByRegions(): array
    {
        $dataArr = self::getData();

        $r_arr = [];

        foreach ($dataArr as $country) {
            // Get only countries with regions
            if (!empty($country['region'])) {
                $r_arr[$country['region']][] = $country['name'];
            }
        }

        return $r_arr;
    }

    public static function groupCountriesByRegionsCount(): array
    {
        $dataArr = self::groupCountriesByRegions();

        $cntArr = [];

        foreach ($dataArr as $key => $countries) {
            $cntArr[$key] = count($countries);
        }

        // Already sorted.
        return $cntArr;
    }

    public static function populationByRegion(): array
    {
        $dataArr       = self::getData();
        $r_arr         = [];
        $populationArr = [];

        foreach ($dataArr as $country) {
            if (!empty($country['region'])) {

                $r_arr[$country['region']][] = $country['population'];

                foreach ($r_arr as $key => $population) {
                    $populationArr[$key] = array_sum($population); // Calculate population by Region
                }
            }
        }
        // Sort Result by Population
        asort($populationArr);

        return $populationArr;
    }

    public static function groupCountriesByLanguages(): array
    {
        $dataArr      = self::getData();
        $resultArr    = [];
        $languagesArr = [];

        foreach ($dataArr as $key => $countries) {
            foreach ($countries['languages'] as $lang) {
                $languagesArr[] = $lang['name'];
                if (in_array($lang['name'], $languagesArr)) {
                    $resultArr[$lang['name']][] = $countries['name'];
                }
            }
        }
        // Sort Results descending
        krsort($resultArr);

        return $resultArr;
    }

    public static function groupBySpokenLanguage(): array
    {
        $dataArr            = self::getData();
        $resultArr          = [];
        $languagesArr       = [];
        $totalPopulationArr = [];

        foreach ($dataArr as $countries) {
            foreach ($countries['languages'] as $lang) {
                $languagesArr[] = $lang['name'];

                //get group countries by language and display population of each country
                if (in_array($lang['name'], $languagesArr)) {
                    $resultArr[$lang['name']][] = $countries['name'];
                    $resultArr[$lang['name']][] = $countries['population'];
                }
                //get total population speaks given language
                foreach ($resultArr as $key => $population) {
                    $totalPopulationArr[$key] = array_sum($population);
                }
            }
        }

        // Sort Results descending
        krsort($totalPopulationArr);

        return $totalPopulationArr;
    }
}
