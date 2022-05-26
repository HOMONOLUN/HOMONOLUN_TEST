<?php
$GET_INPUT = file_get_contents('php://input');
const TOKEN = '5293466497:AAFv7qav2nuAUsaiST3bMyD4y_p3PlD98-8';

const API_URL = 'https://api.telegram.org/bot';

function PrintAnswer($str)
{
    echo"<pre>";
    print_r($str);
    echo"<pre>";
}

function getTelegramApi($method, $options = null)
{
    $str_request = API_URL . TOKEN . '/' . $method;
    if($options)
    {
        $str_request .='?' . http_build_query($options);
    }
    $request = file_get_contents($options);
    return json_decode($request, 1);
}

function setHook($set = 1)
{
    $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    printAnswer
    (
        getTelegramApi('setWebhook',['url'=> $set?$url:''])
    );
    exit();
}

//установка хукка
setHook(1);

