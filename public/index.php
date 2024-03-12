<?php 

define('ROOT', dirname(__DIR__));
define('PUB', ROOT . '/public');
define('CORE', ROOT . '/core');
define('APP', ROOT . '/app');
define('CONTROLLERS', APP . '/controllers');
define('VIEWS', APP . '/views');
define('PATH', 'http://mvc');

require_once CORE . '/funcs.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

if($uri === ''){
    require_once CONTROLLERS . '/index.php';
}elseif($uri === 'about'){
    require_once CONTROLLERS . '/about.php';
}elseif($uri === 'link'){
    dd("SHOW post");
}else {
    abort();
}

