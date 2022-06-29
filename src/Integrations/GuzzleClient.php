<?php


namespace Samhk222\ActiveHousingReqres\Integrations;

use GuzzleHttp\Client;


class GuzzleClient
{
    public function __invoke()
    {
        return new Client([
            'base_uri' => 'https://reqres.in/api/',
            'timeout' => 2.0,
        ]);
    }
}
