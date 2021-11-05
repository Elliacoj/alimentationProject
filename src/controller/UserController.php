<?php

namespace Amaur\App\controller;

use Amaur\App\entity\User;
use Amaur\App\manager\DB;
use Amaur\App\manager\UserManager;

class UserController extends Controller {

    /**
     * Redirects into login page or profile page
     */
    public function home() {
        if(!isset($_SESSION['id'])) {
            self::renders("login", "Connection");
        }
        else {
            $user = UserManager::search(filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT));
            $personalData = PersonalData::search(filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT));
            self::renders("profile", "Profil", ["user" => $user, "personalData" => $personalData]);
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
            $user = UserManager::getManager()->search(filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT));
            $personalData = PersonalData::search(filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT));
            self::renders("profile", "Profil", ["user" => $user, "personalData" => $personalData]);
        }
    }

    /**
     * Create a new user
     */
    public function create() {
        if(!isset($_SESSION['id'])) {
            $mail = filter_var($_POST['createMail'], FILTER_SANITIZE_EMAIL);
            $password = password_hash(filter_var($_POST['createPassword'], FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);

            if(UserManager::searchMail($mail) === null) {
                $user = new User(null, $mail, $password);
                UserManager::create($user);
                $_SESSION['id'] = DB::getInstance()->lastInsertId();
                header("Location: index.php?error=0");
            }
            else {
                header("Location: index.php?error=1");
            }
        }
        else {
            header("Location: index.php");
        }
    }
}