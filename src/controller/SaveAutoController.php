<?php

namespace Amaur\App\controller;

use Amaur\App\entity\DataSave;
use Amaur\App\entity\UserDataSave;
use Amaur\App\manager\DataSaveManager;
use Amaur\App\manager\DB;
use Amaur\App\manager\PersonalDataManager;
use Amaur\App\manager\UserDataSaveManager;
use Amaur\App\manager\UserManager;

class SaveAutoController
{
    public function save() {
        if(isset($_GET['id']) && $_GET['id'] === "ok") {
            $allPersonalData = PersonalDataManager::get();
            foreach ($allPersonalData as $personalData) {
                $user = UserManager::search($personalData->getUserFk()->getId());
                $dataSave = new DataSave(
                    null, $personalData->getWeight(), $personalData->getSize(), $personalData->getSizeNeck(),
                    $personalData->getSizeStomach(), $personalData->getSizeHaunch()
                );

                DataSaveManager::create($dataSave);

                $userDataSave = new UserDataSave(null, $user, DataSaveManager::search(DB::getInstance()->lastInsertId()));
                UserDataSaveManager::create($userDataSave);
            }
        }
    }
}