<?php
/**
 * author : abel.tang
 * Date: 2019-09-03  10:05
 */

namespace wxwork\api\src\menu;


use wxwork\utils\Utils;

class ClickMenu {
    public $type = "click";
    public $name = null; // string
    public $key = null; // string

    public function __construct($name=null, $key=null, $xxmenuArray=null)
    {
        $this->name = $name;
        $this->key = $key;
    }

    public static function Array2Menu($arr)
    {
        $menu = new ClickMenu();

        $menu->type = Utils::arrayGet($arr, "type");
        $menu->name = Utils::arrayGet($arr, "name");
        $menu->key = Utils::arrayGet($arr, "key");

        return $menu;
    }
}