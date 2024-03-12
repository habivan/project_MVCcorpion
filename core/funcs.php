<?php 
function damp($data){
    
    echo'<pre>';
    print_r($data);
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