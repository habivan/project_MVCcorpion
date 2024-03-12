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