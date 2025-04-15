<?php

require_once __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

date_default_timezone_set('Asia/Ho_Chi_Minh');

use Emsifa\Block;

function block(): Block {
    static $instance = null;
    if ($instance === null) {
        $instance = new Block(__DIR__ . '/views', 'view.php');
        $instance->share('app_name', 'J&T Express');
        $instance->share('app_url', 'https://jtexpress.vn');
    }
    return $instance;
}

function view(string $view, array $data = []) {
    return block()->render($view, $data);
} 