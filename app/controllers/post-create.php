<?php 

/**
 * @var Db $db
 */


if($_SERVER['REQUEST_METHOD'] === 'POST'){

  $fillable = ['title', 'excerpt', 'content'];
  $data = load($fillable);

  $errors = [];
  if(empty(trim($data['title']))){
    $errors['title'] = 'Title is register';
  }
  if(empty(trim($data['excerpt']))){
    $errors['excerpt'] = 'Excerpt is register';
  }
  if(empty(trim($data['content']))){
    $errors['content'] = 'Content is register';
  }

  if(empty($errors)){

    $db->query("insert into posts (title, excerpt, content) value (?,?,?)", [$_POST['title'], $_POST['excerpt'], $_POST['content']]);
  }
}

$title = "Blog :: New Posts";
require_once VIEWS . '/post-create.tpl.php';