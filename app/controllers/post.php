<?php 

/**
 * @var Db $db
 */


$id = (int)$_GET['id'] ?? 0;
$post = $db->query("select * from posts where id = :id limit 1", [':id' => $id])->findOrFail();


$title = "Blog :: {$post['title']}";
require_once VIEWS . '/post.tpl.php';