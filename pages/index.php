<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Emsifa\Block;

$block = new Block(__DIR__ . '/../views', 'view.php');

$block->share('app_name', 'J&T Express');
$block->share('app_url', 'https://jtexpress.vn');

echo $block->render('pages.landing');

?>