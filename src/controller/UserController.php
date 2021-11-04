<?php

namespace Amaur\App\controller;

class UserController extends Controller {

    public function home() {
        if(!isset($_SESSION['id'])) {
            self::renders("login", "Connection");
        }
        else {
            $user = UserManager::instance()->search(filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT));
            self::renders("profile", "Profil", [$user]);
        }
    }
}