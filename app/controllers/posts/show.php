<?php 

$db = \myfrm\App::get(\myfrm\Db::class);

$id = (int)$_GET['id'] ?? 0;
$post = $db->query("select * from posts where id = :id limit 1", [':id' => $id])->findOrFail();


$title = "Blog :: {$post['title']}";
require_once VIEWS . '/posts/show.tpl.php';