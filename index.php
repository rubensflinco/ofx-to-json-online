<?php
    $PATH_ROOT = __DIR__;
    require_once $PATH_ROOT."/vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable($PATH_ROOT);
    $dotenv->load();

    if($_ENV['IDIOMA']){
        require $PATH_ROOT."/src/traducoes/".$_ENV['IDIOMA'].".php";
    }else{
        require $PATH_ROOT."/src/traducoes/en-us.php";
    }

    // Obtenha a URL da solicitação atual
    $pathUrl = str_replace($_SERVER['DOCUMENT_ROOT'], "", $PATH_ROOT);
    $urlEx = explode("/", $_SERVER['REQUEST_URI']);
    if(!$urlEx[1]){
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }else{
        if(str_contains($pathUrl, $urlEx[1])){
            unset($urlEx[1]);
        }
        $url = parse_url(implode("/", $urlEx), PHP_URL_PATH);
    }
    if (substr($url, -1) === '/') {
        // Remova o '/' do final da URL
        $url = rtrim($url, '/');
    }
    // Verifique se há redirecionamento para a URL atual
    $redirects = json_decode(file_get_contents($PATH_ROOT . "/redirectsUrls.json"), true);
    $redirectTo = null;
    if(http_build_query($_GET)){
        $strParamsUrl = "?" . http_build_query($_GET);
    }
    if (isset($redirects[$url])) {
        $redirectTo = $redirects[$url];
    }
    if(http_build_query($_GET)){
        if (isset($redirects[$url.$strParamsUrl])) {
            $redirectTo = $redirects[$url.$strParamsUrl];
        }
    }
    if($redirectTo){
        $redirectParams = parse_url($redirectTo, PHP_URL_QUERY);
        if($redirectParams){
            $strParamsUrl .=  "&" . $redirectParams;
        }
        if (strpos($redirectTo, "://") !== false) {
            header("Location: " . $redirectTo);
        } else {
            $redirectTo = parse_url($redirectTo, PHP_URL_PATH);
            header("Location: " . $pathUrl . $redirectTo . $strParamsUrl ?? "");
        }
        exit();
    } 



    $titleStart = $textoTraduzido['config']['metatag_inicio_titulo'];
    $titleEnd = $textoTraduzido['config']['metatag_fim_titulo'];
    


    include $PATH_ROOT."/src/componentes/layout/htmlStart.php";

    
    
    // Carregar a página
    if(($url === "/") || ($url === "/index.php") || ($url === "/index.html")){
        include $PATH_ROOT."/src/paginas/index.php";
    }else{
        $arquivoPagina = $PATH_ROOT."/src/paginas/".$url.".php";
        if (file_exists($arquivoPagina)) {
            // Redirecione para o arquivo correspondente à pagina
            include $arquivoPagina;
        } else {
            $arquivoPagina = $PATH_ROOT."/src/paginas/".$url."/index.php";
            if (file_exists($arquivoPagina)) {
                // Redirecione para o arquivo correspondente à pagina
                include $arquivoPagina;
            } else{
                // Rota não encontrada
                include $PATH_ROOT."/src/paginas/404.php";
            }
        }
    }

    include $PATH_ROOT."/src/componentes/layout/htmlEnd.php";

 ?>