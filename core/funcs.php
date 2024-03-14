<?php 
function damp($data){
    
    echo'<pre>';
    var_dump($data);
    echo'</pre>';
}

function dd($data){
    damp($data);
    die;
}

function abort($code = 404){
    http_response_code($code);
    require_once VIEWS . "/errors/{$code}.tpl.php";
    die;
}

function load($fillable = []){
    $data = [];
    foreach($_POST as $k =>$v){
        if(in_array($k, $fillable)){
            $data[$k] = trim($v);
        }
    }
    return $data;
}

function old($fieldname){
    return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : '';
}

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

function redirect($url = ''){
    $url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    header("Location: {$url}");
    die;
}