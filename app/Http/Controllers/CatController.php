<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function getcats()
    {
        $client = new Client();
        $apiRequest = $client->request("GET", "https://api.thecatapi.com/v1/images/search?limit=24&size=full", [
            'headers' => [
                "x-api-key" => "b3bf6cc6-1fb8-40c9-825d-ac3df1bebe94"
            ]
        ]);
        $data = $apiRequest->getBody()->getContents();
        return $data;
    }
}
