<?php
namespace App;

use Cache;
use Illuminate\Support\Facades\DB;
use App\Contact;
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

 
    public static function contacts( $key ) {
        return Contact::get()->where('key_name', $key)->first()->value;
    }

   
  
    public static function resume($key)
    {
        return Resume::get()->where('key_name', $key)->first()->value;
    }

}
