<?php

$_controller = 'pages';
$_action = 'index';

if ( $_GET ){
    if (isset($_GET['controller']) ){
        $_controller = strtolower($_GET['controller']);
    }
    if (isset($_GET['action']) ){
        $_action = strtolower($_GET['action']);
    }
}

include('D:\server\mysite\config.php');

include('helpers/menu.helper.php');

$data = array();
$data['page_title'] = $site_name;
$data['menu'] = getMenu();

$_controller_path = CONTROLLERS_PATH .'/' . $_controller . '.controller.php';

if ( file_exists($_controller_path) ){
    require_once($_controller_path);
    call_user_func($_action, $_GET);
} else {
    die('Error');
}

include('views/index.html');