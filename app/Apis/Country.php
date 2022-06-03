<?php

namespace App\Apis;

use Illuminate\Support\Facades\Http;

class Country
{

    public function get()
    {
        $response = Http::get('http://api.countrylayer.com/v2/all', [
            'access_key' => '7be72e69e3e716fe7ad8c6f98d97e0e5',
            'limit' => 10,
        ]);
        return json_decode($response->body());




    }
}
