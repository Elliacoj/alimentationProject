<?php

namespace Amaur\App\config;

class Config {
    const HOST = "localhost";
    const DBNAME = "self_eat";
    const USERNAME = "root";
    const PASSWORD = "";

    /**
     * Return a table of data config
     * @return string[]
     */
    public function getConfig(): array {
        return [self::HOST, self::DBNAME, self::USERNAME, self::PASSWORD];
    }
}