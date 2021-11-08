<?php

use Amaur\App\manager\PersonalDataManager;

require_once "../../../vendor/autoload.php";

session_start();

header('Content-Type: application/json');
$request = $_SERVER["REQUEST_METHOD"];

switch ($request) {
    case "UPDATE":
        echo json_encode(updatePersonalData(json_decode("php://input")));
        break;
}

/**
 * Update a personalData of user
 * @param $data
 * @return bool
 */
function updatePersonalData($data): bool {
    if($_SESSION['id'] === $data->idUser) {
        $personalData = PersonalDataManager::searchUserFk($_SESSION['id']);
        $personalData->setFirstname($data->firstname)
            ->setLastname($data->lastname)
            ->setBirthday($data->birthday)
            ->setSex($data->sex)
            ->setWeight($data->weight)
            ->setSize($data->size)
            ->setSizeNeck($data->sizeNeck)
            ->setSizeStomach($data->sizeStomach);
        return PersonalDataManager::update($personalData);
    }
    return false;
}