<?php 

use myfrm\Validator;
$title = 'Register User';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
/** @var \myfrm\Db $db */

$db = \myfrm\App::get(\myfrm\Db::class);

  $fillable = ['name', 'email', 'password',];
  $data = load($fillable);

  if(isset($_FILES['avatar']) and $_FILES['avatar']['error'] === 0){
    $data['avatar'] = $_FILES['avatar'];
  }else {
    $data['avatar'] = [];
  }

  $validator = new Validator();
  $validation = $validator->validate($data, $rules = [
    'name' => [
      'required' => true,
      'max' => 100,
    ],
    'email' => [
      'email' => true,
      'max' => 100,
      'unique' => 'users:email',
    ],
    'password' => [
      'required' => true,
      'min' => 6,
    ],
    'avatar' => [
      // 'required' => true,
      'ext' => 'jpg|gif',
      'size' => 1048576,
    ]
  ]);

  if(!$validator->hasErrors()){
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    if(empty($errors)){
      if($db->query("insert into users (name, email, password) value (?, ?, ?)", [$data['name'], $data['email'], $data['password']])){
        if(!empty($data['avatar']['name'])){
          $id = $db->getInsertId();
          $file_ext = get_file_ext($data['avatar']['name']);
          $dir = '/avatars/' . date('Y') . '/' . date('m') . '/' . date('d');
          if(!is_dir(UPLOADS . $dir)){
            mkdir(UPLOADS . $dir, 0755, true);
          }
          $file_path = UPLOADS . "{$dir}/avatar-{$id}.{$file_ext}";
          $file_url = "/uploads{$dir}/avatar-{$id}.{$file_ext}";
          if(move_uploaded_file($data['avatar']['tmp_name'], $file_path)){
            $db->query("UPDATE users SET avatar = ? WHERE id = ?", [$file_url, $id]);
          }else {
            error_log("[".date('Y-m-d H:i:s')."] Error upload avatar ". PHP_EOL, 3, ERRORS_LOG_FILE);
          }
        }
        $_SESSION['success'] = 'OK';
      }else {
        $_SESSION['error'] = 'Register Error';
      }
    }
    redirect('/');
  }
}

require_once VIEWS . '/users/register.tpl.php';