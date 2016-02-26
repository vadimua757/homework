<?php
/**
 * Функция для получения ссылки
 * @param $controller
 * @param $action
 * @param array $params
 */
function getUrlByParams($controller,$action,$params=array()){
    $url=http_build_query(array(
            'controller'=>$controller,
            'action'=>$action,
        )
    );
    return '/?'.$url;
}
/**
 * Получаем меню
 */
function getMenu()
{
    $menu = array(
        'Главная' => array(
            'controller' => 'pages',
            'action' => 'index',
        ),
        'Образование' => array(
            'controller' => 'pages',
            'action' => 'education',
        ),
        'Опыт' => array(
            'controller' => 'pages',
            'action' => 'experience',
        ),
        'Контакты' => array(
            'controller' => 'pages',
            'action' => 'contacts',
        ),

    );

    foreach($menu as &$item){
        $item['url'] = getUrlByParams($item['controller'], $item['action'], isset($item['params'])?$item['params']:array());
    }
/*
 * Открываем буфер
 */
    ob_start();
    include(VIEWS_PATH.'/helpers/menu.php');
    $html = ob_get_clean();

    return $html;
}