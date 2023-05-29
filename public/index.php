<?php
include '../app/configuracao.php';
include '../app/Libraries/Rota.php';
include '../app/Libraries/Controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=URL?>/public/css/estilos.css">
    <title><?= APP_NOME ?></title>
    <link rel="stylesheet" href="<?=URL?/public/css/estilos.css">
</head>
<body>
    <?php
        include '../app/views/header.php';
        $rotas = new Rota();
        include '../app/views/footer.php';
    ?>
       
    <script src="<?=URL?>/public/js/jquery.funcoes.js"></script>
</body>
</html>