<?php 
$db = \myfrm\App::get(\myfrm\Db::class);
use myfrm\Validator;

  $fillable = ['title', 'excerpt', 'content'];
  $data = load($fillable);
  
  $validator = new Validator();
  $validation = $validator->validate($data, $rules = [
    'title' => [
      'required' => true,
      'min' => 5,
      'max' => 190,
    ],
    'excerpt' => [
      'required' => true,
      'min' => 5,
      'max' => 190,
    ],
    'content' => [
      'required' => true,
      'min' => 100,
    ],
  ]);
  if(!$validator->hasErrors()){
    if(empty($errors)){
      if($db->query("insert into posts (title, excerpt, content) value (:title, :excerpt, :content)", $data)){
        $_SESSION['success'] = 'OK';
      }else {
        $_SESSION['error'] = 'DB Error';
      }
    }
    redirect('/');
  }else {
    require_once VIEWS . '/posts/create.tpl.php';
  }