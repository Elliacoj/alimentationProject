<?php

namespace Amaur\App\controller;

class UserController extends Controller {

    /**
     * Redirects into login page or profile page
     */
    public function home() {
        if(!isset($_SESSION['id'])) {
            self::renders("login", "Connection");
        }
        else {
            $user = UserManager::instance()->search(filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT));
            self::renders("profile", "Profil", [$user]);
        }
    }

    /**
     * Redirects into create page or profile page
     */
    public function createPage() {
        if(!isset($_SESSION['id'])) {
            self::renders("create", "Création de compte");
        }
        else {
            $user = UserManager::instance()->search(filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT));
            self::renders("profile", "Profil", [$user]);
        }
    }
}