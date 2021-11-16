<?php
if(isset($_GET['error'])) {
    switch (filter_var($_GET['error'], FILTER_SANITIZE_NUMBER_INT)) {
        case 0: ?>
            <div class="errorGreen errorDiv">Votre compte a été créé!</div> <?php
            break;
        case 1: ?>
            <div class="errorRed errorDiv">Cette adresse mail est déjà utilisé!</div> <?php
            break;
        case 2: ?>
            <div class="errorGreen errorDiv">Bienvenue sur Self-eat!</div> <?php
            break;
        case 3: ?>
            <div class="errorRed errorDiv">L'adresse ou le mot de passe n'est pas correct!</div> <?php
            break;
        case 4: ?>
            <div class="errorGreen errorDiv">Vous avez été déconnecté!</div> <?php
            break;
        case 5: ?>
            <div class="errorRed errorDiv">Vous devez être connecté!</div> <?php
            break;
    }
}