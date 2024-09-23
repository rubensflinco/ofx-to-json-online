<?php
use GuzzleHttp\Client;

function ApiObterPorEmail($email){
    if($email){

        $client = new Client(['verify' => false]);
        $apiReqUrl = $_ENV["BASE_URL_API_N8N"] . "/obter/email";
        $body = array(
            'emailAluno' => $email
        );
        $response = $client->post($apiReqUrl, [
            'json' => $body,
        ]);

        $respostaApi = $response->getBody()->getContents();
        $respostaApiJson = json_decode($respostaApi);
        return $respostaApiJson;
    } else {
        return null;
    }
}