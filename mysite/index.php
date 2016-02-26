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

include('config.php');

include('helpers/menu.helper.php');

$data = array();
$data['page_title'] = $site_name;
$data['menu'] = getMenu();

$_controller_path = CONTROLLERS_PATH .'/' . $_controller . '.controller.php';

/*
 * $directory_root = '/full/system/path/to/doc_root';

    require_once($directory_root.'/app/bootstrap.php');
 */

if ( file_exists($_controller_path) ){
    require "$_controller_path";
    call_user_func($_action, $_GET);
} else {
    die('Error');
}

include('views/main.html');