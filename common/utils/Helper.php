<?php

namespace Common\Utils;

use Emsifa\Block;

class Helper {
    private static $block = null;

    public static function block(): Block {
        if (self::$block === null) {
            self::$block = new Block(dirname(dirname(__DIR__)) . '/views', 'view.php');
            self::$block->share('app_name', 'J&T Express');
            self::$block->share('app_url', 'https://jtexpress.vn');
        }
        return self::$block;
    }

    public static function view(string $view, array $data = []) {
        return self::block()->render($view, $data);
    }
}

