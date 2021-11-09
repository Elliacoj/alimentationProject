<?php

namespace Amaur\App\controller;

use Amaur\App\entity\PersonalData;
use Amaur\App\entity\User;
use Amaur\App\manager\DB;
use Amaur\App\manager\PersonalDataManager;
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
            $personalData = PersonalDataManager::searchUserFk(filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT));
            self::renders("profile", "Profil", ["personalData" => $personalData]);
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
            $personalData = PersonalDataManager::searchUserFk(filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT));
            self::renders("profile", "Profil", ["personalData" => $personalData]);
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
                $personalData = new PersonalData();
                UserManager::create($user);

                $_SESSION['id'] = DB::getInstance()->lastInsertId();
                $personalData->setUserFk(UserManager::search($_SESSION['id']));
                PersonalDataManager::create($personalData);
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

    /**
     * Check and connect a user
     */
    public function login() {
        $mail = filter_var($_POST['loginMail'], FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['loginPassword'], FILTER_SANITIZE_STRING);
        $user = UserManager::searchMail($mail);
        if($user !== null && password_verify($password, $user->getPassword())) {
            $_SESSION['id'] = $user->getId();
            header("Location: index.php?error=2");
        }
        else {
            header("Location: index.php?error=3");
        }
    }

    /**
     * Disconnect a user
     */
    public function logout() {
        if(isset($_SESSION['id'])) {
            $_SESSION = array();
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
            session_destroy();

            header("location: index.php?error=4");
        }
    }
}