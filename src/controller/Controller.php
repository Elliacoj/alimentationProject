<?php

namespace Amaur\App\controller;

class Controller {

    /**
     * Change content of base view
     * @param string $view
     * @param string $title
     * @param array $data
     */
    public static function renders(string $view, string $title, array $data = []) {
        ob_start();
        require_once dirname(__FILE__) . "/../../view/$view.view.php";
        $html = ob_get_clean();
        require_once dirname(__FILE__) . "/../../view/__partials/base.view.php";
    }
}