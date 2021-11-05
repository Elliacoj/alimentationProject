<?php

namespace Amaur\App\manager;

use Amaur\App\config\config;
use Amaur\App\config\ConfigDev;
use Amaur\App\config\ConfigProd;
use PDO;
use PDOException;

class DB {
    private static ?PDO $dbInstance = null;

    /**
     * Construct DB
     */
    public function __construct() {
        if(class_exists("Amaur\\App\\config\\ConfigDev") && $_SERVER['SERVER_NAME'] == "self.eat.dev.elliacoj.be") {
            [$host, $dbName, $userName, $password] = (new ConfigDev())->getConfig();
        }
        elseif($_SERVER['SERVER_NAME'] == "localhost") {
            [$host, $dbName, $userName, $password] = (new Config())->getConfig();
        }
        else {
            [$host, $dbName, $userName, $password] = (new ConfigProd())->getConfig();
        }

        try {
            self::$dbInstance = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $userName, $password);
            self::$dbInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$dbInstance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * Return instance PDO
     * @return PDO
     */
    public static function getInstance():?PDO {
        if(is_null(self::$dbInstance)) {
            new self();
        }
        return self::$dbInstance;
    }

    /**
     * No clone for another dev
     */
    public function __clone() {}
}