<?php
$rota = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$url_final = substr($rota["path"], 1);

if($url_final =='') # Traz a página Home ao acessar pela primeira vez.
    $url_final = 'home';

include('../autoload.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Design Patterns Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="icon"  type="image/png" href="images/favicon.ico">
</head>
<body>
<div class="container">
    <?php require_once('incs/main_menu.php'); ?>
    <?php require_once('incs/'. $url_final. '.php'); ?>
</div>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
