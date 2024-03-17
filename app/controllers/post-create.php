<?php 
require_once CORE . '/classes/Validator.php';
/**
 * @var Db $db
 */


if($_SERVER['REQUEST_METHOD'] === 'POST'){

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
  if($validator->hasErrors()){
    damp_r($validator->getErrors());
  }else {
    echo 'SUCCES';
  }
  die;
  // if(empty($data['title'])){
  //   $errors['title'] = 'Title is register';
  // }
  // if(empty($data['excerpt'])){
  //   $errors['excerpt'] = 'Excerpt is register';
  // }
  // if(empty($data['content'])){
  //   $errors['content'] = 'Content is register';
  // }

  if(empty($errors)){
    if($db->query("insert into posts (title, excerpt, content) value (:title, :excerpt, :content)", $data)){
      echo 'ok';
    }else {
      echo 'DB Error';
    }
    
    // redirect('/posts/create');
  }
}

$title = "Blog :: New Posts";
require_once VIEWS . '/post-create.tpl.php';