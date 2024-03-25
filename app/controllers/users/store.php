<?php 
/** @var \myfrm\Db $db */

// $db = \myfrm\App::get(\myfrm\Db::class);
// use myfrm\Validator;

//   $fillable = ['name', 'email', 'password'];
//   $data = load($fillable);
  
//   $validator = new Validator();
//   $validation = $validator->validate($data, $rules = [
//     'name' => [
//       'required' => true,
//       'max' => 100,
//     ],
//     'email' => [
//       'email' => true,
//       'max' => 100,
//       'unique' => 'users:email',
//     ],
//     'password' => [
//       'required' => true,
//       'min' => 6,
//     ],
//   ]);
//   if(!$validator->hasErrors()){
//     $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
//     if(empty($errors)){
//       if($db->query("insert into users (name, email, password) value (:name, :email, :password)", $data)){
//         $_SESSION['success'] = 'OK';
//       }else {
//         $_SESSION['error'] = 'Register Error';
//       }
//     }
//     redirect('/');
//   }else {
//     require_once VIEWS . '/users/register.tpl.php';
//   }