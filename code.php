<?php
if (isset($_POST['search_art'])) {
    $art = $_POST['art'];

    $client = new SoapClient('https://api.forum-auto.ru/wsdl', ["exceptions" => false]);

    $login = '493358_stroyzar';
    $pass = 'sAVDkrEbqd';
    
    $result = $client->listGoods($login, $pass, $art);
    if (is_soap_fault($result)) {
        echo "Ошибка SOAP: (Код ошибки: {$result->faultcode}, строка: {$result->faultstring}, детали: {$result->detail})";

    } else {
        echo '<pre>' . var_export($result, true) . '</pre>';
    }

}
?>