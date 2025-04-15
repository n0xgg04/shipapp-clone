<?php
use Common\Utils\Helper;

echo Helper::view('pages.about', [
    'title' => 'Về chúng tôi - J&T Express',
    'description' => 'J&T Express - Dịch vụ chuyển phát nhanh hàng đầu Việt Nam',
    'page' => 'about'
]);
