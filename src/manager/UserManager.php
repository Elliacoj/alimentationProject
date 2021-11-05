<?php

namespace Amaur\App\manager;

use Amaur\App\entity\User;

class UserManager extends Manager {

    /**
     * Create a user into User table
     * @param User $user
     * @return bool
     */
    public static function create(User $user):bool {
        return self::createObject(
            "INSERT INTO ellia_user(mail, password) VALUES(:mail, :password)",
            ["mail" => $user->getMail(), "password" => $user->getPassword()]
        );
    }

    /**
     * Return a user or null
     * @param $mail
     * @return Object|null
     */
    public static function searchMail($mail):?Object {
        return self::searchObject("SELECT * FROM ellia_user WHERE mail = :mail", "User", ["mail" => $mail]);
    }

    /**
     * Return a user or null
     * @param $mail
     * @return Object|null
     */
    public static function search($id):?Object {
        return self::searchObject("SELECT * FROM ellia_user WHERE id = :id", "User", ["id" => $id]);
    }
}