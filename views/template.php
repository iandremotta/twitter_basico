<html>
    <head>
        <title>Meu site</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/template.css">
    <script type="text/javascript" type="text/javascript" src="assets/js/jquery-3.4.1.min"></script>
    <script type="text/javascript" type="text/javascript" src="assets/js/script.js"></script>
    </head>
    <body>
        <div class="topo">
            <div class="topoint">
                <div class="topoleft">Twitter</div>
                <div class="toporight"><?php echo $viewData['nome'];?> <a style="padding-left: 30px" href="/login/sair" id="sair">Sair</a></div>
                <div style="clear:both"></div>
            </div>
        </div>
        <div class="container">
            <?php $this->loadViewIntemplate($viewName, $viewData);?>
        </div>
    </body>
</html>