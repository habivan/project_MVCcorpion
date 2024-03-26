<?php 


$title = 'Login User';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
/** @var \myfrm\Db $db */

$db = \myfrm\App::get(\myfrm\Db::class);

$data = load(['email', 'password']);
$validator = new \myfrm\Validator();
$validation = $validator->validate($data, $rules = [
    'email' => [
      'email' => true,
    ],
    'password' => [
      'required' => true,
    ],
  ]);
  if(!$validator->hasErrors()){
    if(!$user = $db->query("SELECT * FROM users WHERE email = ?", [$data['email']])->find()){
      $_SESSION['error'] = 'Wrong email or password';
      redirect();
    }
    if(!password_verify($data['password'], $user['password'])){
      $_SESSION['error'] = 'Wrong email or password';
      redirect();
    }

    foreach($user as $key =>$value){
      if( $key != 'password'){
        $_SESSION['user'][$key] = $value;
      }
    }
    $_SESSION['success'] = 'Successful login';
    redirect(PATH);
  //   $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
  //   if(empty($errors)){
  //     if($db->query("insert into users (name, email, password) value (:name, :email, :password)", $data)){
  //       $_SESSION['success'] = 'OK';
  //     }else {
  //       $_SESSION['error'] = 'Register Error';
  //     }
  //   }
  //   redirect(PATH);
  }
}
require_once VIEWS . '/users/login.tpl.php';
