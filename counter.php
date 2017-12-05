<?php

define('MODX_API_MODE', true);
require 'index.php';

/** Получаем наш ID статьи из запроса */

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) == 'XMLHttpRequest') {

    $page_id = intval($_POST["id"]);
    $count = 0;
    $count1= 1;
    $message = '';
    $error = true;


    /** Если нам передали ID то проверяем на наличие */
    if($page_id){

        /** Обновляем количество репостов в статье */
        $query = $modx->prepare("UPDATE modx_site_content SET count_post = count_post+1 WHERE id = :id");
        $query->execute(array(':id' => $page_id));

        /** Выбираем количество репостов в статье */
        $query = $modx->prepare("SELECT count_post FROM modx_site_content WHERE id = :id");
        $query->execute(array(':id' => $page_id));
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $count = isset($result['count_post']) ? $result['count_post']  : 0;
    
        $error = false;

    } else {

        /** Если ID пуст - возвращаем ошибку */

        $error = true;
        $message = 'Ошибка';
    }

    /** Возвращаем ответ скрипту */
 
    // Формируем масив данных для отправки

    $out = array(
        'error' => $error,
        'message' => $message,
        'count' => $count,
    );

    header('Content-Type: text/json; charset=utf-8');
    echo json_encode($out); 
}