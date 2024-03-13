<?php 

/**
 * @var Db $db
 */

$title = 'My Home';

$articles = $db->query("select * from posts")->findAll();
$array = $db->query("select * from posts order by id desc limit 3")->findAll();


require_once VIEWS . '/index.tpl.php';