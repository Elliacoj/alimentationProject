<?php

namespace Amaur\App\manager;

use Amaur\App\entity\DataSave;

class DataSaveManager extends Manager {

    /**
     * Create a DataSave of user
     * @param DataSave $dataSave
     * @return bool
     */
    public static function create(DataSave  $dataSave):bool {
        $weight = $dataSave->getWeight();
        $size = $dataSave->getSize();
        $sizeNeck = $dataSave->getSizeNeck();
        $sizeStomach = $dataSave->getSizeStomach();
        $sizeHaunch = $dataSave->getSizeHaunch();

        return self::createUpdate(
            "INSERT INTO ellia_data_save (weight, size, size_neck, size_stomach, size_haunch)
                    VALUES(:weight, :size, :sizeNeck, :sizeStomach, :sizeHaunch)  
                    ",
            ["size" => $size, "weight" => $weight, "sizeNeck" => $sizeNeck, "sizeStomach" => $sizeStomach, "sizeHaunch" => $sizeHaunch]
        );
    }

    /**
     * Return a DataSave or null
     * @param $id
     * @return Object|null
     */
    public static function search($id):?Object {
        return self::searchObject("SELECT * FROM ellia_data_save WHERE id = :id", "DataSave", ["id" => $id]);
    }
}