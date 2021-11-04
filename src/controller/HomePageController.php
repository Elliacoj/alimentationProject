<?php

namespace Amaur\App\controller;

class HomePageController extends Controller {

    /**
     * Redirects into home page
     */
    function home() {
        self::renders("home", "Page d'accueil");
    }
}