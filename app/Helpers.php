<?php
namespace App;

use Cache;

class Helpers
{
    /**
     * Fetch Cached settings from database
     *
     * @return string
     */
    public static function about($key)
    {
        return Cache::get('abouts')->where('key_name', $key)->first()->value;
    }
}