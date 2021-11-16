<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/globalStyle.css">
    <link rel="stylesheet" href="/assets/css/menuFooter.css">
    <link rel="stylesheet" href="/assets/css/mediaQuery.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="./build/js/front.js" defer></script>
    <title><?= $title ?></title>
</head>
<body>
<?php include "menu.view.php" ?>
<?php include "error.view.php" ?>
<?= $html ?>

</body>
</html>
