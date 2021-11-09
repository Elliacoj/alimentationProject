<?php

namespace Amaur\App\controller;

use Amaur\App\manager\PersonalDataManager;

class HomePageController extends Controller {

    /**
     * Redirects into home page
     */
    function home() {
        self::renders("home", "Page d'accueil");
    }

    /**
     * Redirects into food page
     */
    function foodPage() {
        $personalData = PersonalDataManager::searchUserFk($_SESSION['id']);
        self::renders("food", "Page d'alimentation", ["personalData" => $personalData]);
    }
}