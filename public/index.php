<?php 

define('ROOT', dirname(__DIR__));
define('PUB', ROOT . '/public');
define('CORE', ROOT . '/core');
define('APP', ROOT . '/app');
define('CONTROLLERS', APP . '/controllers');
define('VIEWS', APP . '/views');
define('PATH', ROOT . 'http://mvc');

require_once CORE . '/funcs.php';




require_once CONTROLLERS . '/index.php';