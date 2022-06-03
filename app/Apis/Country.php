<?php

namespace App\Apis;

use Illuminate\Support\Facades\Http;

class Country
{

    public function get()
    {
        $response = Http::get('http://api.countrylayer.com/v2/all', [
            'access_key' => '02f23441a58e91e4cd70aa27b3b0d49c',
            'limit' => 10,
        ]);
        return json_decode($response->body());
        /* curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://api.countrylayer.com/v2/all?access_key=02f23441a58e91e4cd70aa27b3b0d49c',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return ($response); */



    }
}
