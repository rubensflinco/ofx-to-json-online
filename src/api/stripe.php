<?php
use GuzzleHttp\Client;

function ApiStripeObterSessao($id) {
    if ($id) {
        $apiReqUrl = $_ENV["BASE_URL_API_N8N"] . "/stripe/obter/sessao?id=$id";

        $client = new Client(['verify' => false]);
        $response = $client->get($apiReqUrl);

        $respostaApi = $response->getBody()->getContents();
        $respostaApiJson = json_decode($respostaApi);
        return $respostaApiJson;
    } else {
        return null;
    }
}