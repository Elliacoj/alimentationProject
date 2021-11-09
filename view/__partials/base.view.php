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
    <title><?= $title ?></title>
</head>
<body>
<?php include "menu.view.php" ?>
<?php include "error.view.php" ?>
<?= $html ?>
    <script src="/assets/js/create-login.js"></script>
    <script src="/assets/js/globalScript.js"></script>
    <script src="/assets/js/ModalWindows.js" type="module"></script>
    <script src="/assets/js/ajax.js" type="module"></script>
    <script src="/node_modules/chart.js/dist/chart.js"></script>
    <script src="/assets/js/stat.js" type="module"></script>
</body>
</html>
