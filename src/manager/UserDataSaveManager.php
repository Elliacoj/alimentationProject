<?php

namespace Amaur\App\manager;

use Amaur\App\entity\UserDataSave;

class UserDataSaveManager extends Manager {

    /**
     * Create a personalData into User table
     * @param UserDataSave $userDataSave
     * @return bool
     */
    public static function create(UserDataSave $userDataSave):bool {
        return self::createUpdate(
            "INSERT INTO ellia_user_data_save(user_fk, data_save_fk) VALUES(:userFk, :dataSaveFk)",
            ["userFk" => $userDataSave->getUserFk()->getId(), "dataSaveFk" => $userDataSave->getDataSave()->getId()]
        );
    }
}