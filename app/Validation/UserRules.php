<?php
namespace App\Validation;
use App\Models\UserModel;

class UserRules
{

  public function validateUser(string $str, string $fields, array $data){
    $model = new UserModel();
    $user = $model->where('user_name', $data['user_name'])
                  ->first();

    if(!$user)
      return false;

    //return true;
    return password_verify($data['password'], $user['password']);
  }
}