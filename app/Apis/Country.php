<?php

namespace App\Apis;

use Illuminate\Support\Facades\Http;

class Country
{

    public function get()
    {
        $response = Http::get('http://api.countrylayer.com/v2/all', [
            'access_key' => 'f62336e866dca3cb2e4bf9604454ad0e',
            'limit' => 10,
        ]);
        return json_decode($response->body());




    }
}
