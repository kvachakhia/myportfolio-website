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

    public static function contacts($key)
    {
        return Cache::get('contacts')->where('key_name', $key)->first()->value;
    }
  
    public static function resume($key)
    {
        return Cache::get('resumes')->where('key_name', $key)->first()->value;
    }

}