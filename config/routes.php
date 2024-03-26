<?php 

/**
 * @var $router
 */

const MIDDLEWARE = [
  'auth' => \myfrm\middleware\Auth::class,
  'gust' => \myfrm\middleware\Gust::class,
];

//posts
$router->get('', 'posts/index.php');
$router->get('posts', 'posts/show.php');
$router->get('posts/create', 'posts/create.php')->only('auth');
$router->post('posts', 'posts/store.php');
$router->delete('posts', 'posts/destroy.php');

//pages
$router->get('about', 'about.php');
$router->get('contract', 'contract.php');

//user
$router->add('register', 'users/register.php',['get', 'post'])->only('gust');
$router->post('register', 'users/store.php')->only('gust');
$router->add('login', 'users/login.php', ['get', 'post'])->only('gust');
$router->get('logout', 'users/logout.php')->only('auth');
