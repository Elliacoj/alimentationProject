<?php

namespace Amaur\App\manager;

class PersonalDataManager extends Manager {
    /**
     * Return a user or null
     * @param $userFk
     * @return Object|null
     */
    public static function searchUserFk($userFk):?Object {
        return self::searchObject("SELECT * FROM ellia_personal_data WHERE user_fk = :userFk", "PersonalData", ["userFk" => $userFk]);
    }
}