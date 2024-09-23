<head>
<title><?php echo $titleStart; ?> <?php echo $textoTraduzido['index']['metatag_titulo']; ?> <?php echo $titleEnd; ?></title>
</head>

<body>
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-5">
            <form action="<?php echo $pathUrl;?>/src/paginas/upload.php" class="dropzone" id="ofxtojson">
                <div class="dz-message">
                    <i class="fas fa-file-upload fa-5x"></i>
                    <br>
                    <?php echo $textoTraduzido['index']['ajuda_dropzone']; ?>
                </div>
            </form>
        </div>
    </div>

    <!-- Espaço para anúncios -->
    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <div style="background-color: #eee;">

            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7169391558658534"
                crossorigin="anonymous"></script>
            <!-- OFX-to-JSON - Horizontal -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-7169391558658534"
                data-ad-slot="3237426131"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

            </div>
        </div>
    </div>

    
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel"><?php echo $textoTraduzido['index']['modal']['sucesso']['titulo']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <i class="fas fa-check-circle fa-5x text-success"></i>
                <p class="mt-3"><?php echo $textoTraduzido['index']['modal']['sucesso']['descricao']; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close"><?php echo $textoTraduzido['index']['modal']['sucesso']['btn']; ?></button>
            </div>
            </div>
        </div>
    </div>



    <script>
        Dropzone.options.ofxtojson = {
            // Outras opções do Dropzone aqui...
            acceptedFiles: ".ofx",

            // Functions
            init: function() {
                this.on("success", function(file, response) {
                    // Converte a resposta JSON em um objeto JavaScript
                    var jsonResponse = response;

                    // Cria um link temporário para download
                    var fileNameSplit = String(file.name).split('.');
                    var downloadLink = document.createElement('a');
                    downloadLink.href = 'data:application/json;charset=utf-8,' + encodeURIComponent(JSON.stringify(jsonResponse, null, 2));
                    downloadLink.download = `ofx-to-json-${fileNameSplit?.[0]}.json`;

                    // Simula um clique no link para iniciar o download
                    document.body.appendChild(downloadLink);
                    downloadLink.click();
                    document.body.removeChild(downloadLink);
                    $('#successModal').modal('show'); 
                });
            }
        };
    </script>

</body>

</html>
