<?php

namespace App\Apis;


class Country
{

    public function get()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://api.countrylayer.com/v2/all?access_key=0985d4d199e57722f6cc39e2bafe6892',
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
        return $response;



    }
}
