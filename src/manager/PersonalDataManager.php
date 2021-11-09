<?php

namespace Amaur\App\manager;

use Amaur\App\entity\PersonalData;

class PersonalDataManager extends Manager {
    /**
     * Return a personal data of user or null
     * @param $userFk
     * @return Object|null
     */
    public static function searchUserFk($userFk):?Object {
        return self::searchObject("SELECT * FROM ellia_personal_data WHERE user_fk = :userFk", "PersonalData", ["userFk" => $userFk]);
    }

    /**
     * Create a personalData into User table
     * @param PersonalData $personalData
     * @return bool
     */
    public static function create(PersonalData $personalData):bool {
        return self::createUpdate(
            "INSERT INTO ellia_personal_data(user_fk) VALUES(:userFk)",
            ["userFk" => $personalData->getUserFk()->getId()]
        );
    }

    /**
     * Return all personal data or null
     * @return array
     */
    public static function get():array {
        return self::getObject("SELECT * FROM ellia_personal_data", "PersonalData");
    }

    /**
     * Update a personal data of user
     * @param PersonalData $personalData
     * @return bool
     */
    public static function update(PersonalData  $personalData):bool {
        $id = $personalData->getId();
        $firstname = $personalData->getFirstname();
        $lastname = $personalData->getLastname();
        if($personalData->getBirthday() === "") {
            $birthday = null;
        }
        else {
            $birthday = $personalData->getBirthday();
        }

        $sex = $personalData->getSex();
        $weight = $personalData->getWeight();
        $size = $personalData->getSize();
        $sizeNeck = $personalData->getSizeNeck();
        $sizeStomach = $personalData->getSizeStomach();
        $sizeHaunch = $personalData->getSizeHaunch();

        return self::createUpdate(
            "UPDATE ellia_personal_data 
                    SET firstname = :firstname, lastname = :lastname, birthday = :birthday, sex = :sex, weight = :weight, size = :size,
                    size_neck =:sizeNeck, size_stomach =:sizeStomach, size_haunch =:sizeHaunch 
                    WHERE id =:id",
            [
                "id" => $id, "firstname" => $firstname, "lastname" => $lastname, "birthday" => $birthday, "sex" =>$sex, "size" => $size,
                "weight" => $weight, "sizeNeck" => $sizeNeck, "sizeStomach" => $sizeStomach, "sizeHaunch" => $sizeHaunch
            ]
        );
    }
}