<?php

use Agenciasys\OfxParser;

// Inclua o autoload do Composer
require_once __DIR__ . '/../../vendor/autoload.php';

// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Verifique se o arquivo foi enviado corretamente
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {

        // Obtenha o caminho temporário do arquivo
        $filePath = $_FILES['file']['tmp_name'];

        // Parseie o arquivo OFX
        $ofxParser = new \OfxParser\Parser();
        try {
            $ofx = $ofxParser->loadFromFile($filePath);
        } catch (Exception $e) {
            // Trate erros de parseamento aqui
            echo json_encode(['error' => 'Erro ao parsear o arquivo OFX: ' . $e->getMessage()]);
            exit;
        }

        // Converta o objeto OFX para JSON
        $jsonData = json_encode($ofx, JSON_PRETTY_PRINT);

        // Defina os cabeçalhos da resposta
        header('Content-Type: application/json');
        header('Content-Disposition: attachment; filename="converted.json"');

        // Envie o JSON para o navegador
        echo $jsonData;
        exit;

    } else {
        // Trate erros de upload aqui
        echo json_encode(['error' => 'Erro ao enviar o arquivo.']);
        exit;
    }
}

// Se o formulário não foi enviado, exiba uma mensagem de erro
echo json_encode(['error' => 'Acesso inválido.']);
exit;

?>
