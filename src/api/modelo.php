<?php
use GuzzleHttp\Client;

include $PATH_ROOT.'/src/functions/getIpUser.php';


function ApiModeloObterDetalhes($id) {
    if ($id) {
        $client = new Client(['verify' => false]);
        $apiReqUrl = $_ENV["BASE_URL_API_N8N"] . "/modelo/obter/detalhes";
        $body = array(
            'id' => $id,
            'ip' => getIpUser()
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