<?php 

$container = new \myfrm\ServiceContainer();
$container->setService(\myfrm\Db::class, function(){
  $db_config = require_once CONFIG . '/db.php';
  return (\myfrm\Db::getInstance())->getConnection($db_config);
});

\myfrm\App::setContainer($container);