<?php

use Emsifa\Block;

require(__DIR__ . '/../../vendor/autoload.php');

$view_dir = __DIR__ . '/../../views';
$view_extension = 'view.php';

$block = new Block($view_dir, $view_extension);

return $block;
