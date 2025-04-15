<?php

use Emsifa\Block;

function block(): Block {
    static $instance = null;
    if ($instance === null) {
        $instance = new Block(dirname(__DIR__) . '/views', 'view.php');
        $instance->share('app_name', 'J&T Express');
        $instance->share('app_url', 'https://jtexpress.vn');
    }
    return $instance;
}

function view(string $view, array $data = []) {
    return block()->render($view, $data);
} 