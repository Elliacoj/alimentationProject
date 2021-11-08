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
     * Update a personal data of user
     * @param PersonalData $personalData
     * @return bool
     */
    public static function update(PersonalData  $personalData):bool {
        $id = $personalData->getId();
        $firstname = $personalData->getFirstname();
        $lastname = $personalData->getLastname();
        $birthday = $personalData->getBirthday();
        $sex = $personalData->getSex();
        $weight = $personalData->getWeight();
        $size = $personalData->getSize();
        $sizeNeck = $personalData->getSizeNeck();
        $sizeStomach = $personalData->getSizeStomach();

        return self::createUpdate(
            "UPDATE ellia_personal_data 
                    SET firstname = :firstname, lastname = :lastname, birthday = :birthday, sex = :sex, weight = :weight, size = :size,
                    size_neck =:sizeNeck, size_stomach =:sizeStomach 
                    WHERE id =:id",
            [
                "id" => $id, "firstname" => $firstname, "lastname" => $lastname, "birthday" => $birthday, "sex" =>$sex, "size" => $size,
                "weight" => $weight, "sizeNeck" => $sizeNeck, "sizeStomach" => $sizeStomach
            ]
        );
    }
}