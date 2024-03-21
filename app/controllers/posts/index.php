<?php 
$title = 'My Home';

$db = \myfrm\App::get(\myfrm\Db::class);

$articles = $db->query("select * from posts")->findAll();
// $array = $db->query("select * from posts order by id desc limit 3")->findAll();
$array = db()->query("select * from posts order by id desc limit 3")->findAll(); //тоже самое , но через функцию хелпер.
require_once VIEWS . '/posts/index.tpl.php';