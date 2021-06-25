<?php
namespace App\Contracts;

interface CountriesInterface
{
    public static function getData();

    public static function groupCountriesByRegions();

    public static function groupCountriesByRegionsCount();

    public static function populationByRegion();

    public static function groupCountriesByLanguages();

    public static function groupBySpokenLanguage();
}