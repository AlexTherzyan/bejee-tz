<?php


namespace App\Controllers;

use App\Models\User;
use App\Tools\Request;
use App\Tools\Traits\validation;
use Core\View;

class Register extends AppController
{

    use validation;

    public function register()
    {
        $data = Request::All('post');
        if (isset($data['register'])){
            $errors = [];
            $errors = array_merge($errors,$this->checkEmptyFields($data), $this->checkEqualsPasswords($data));
            if ( empty($errors)){
                $user = new User();
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $user->create($data);
                header('Location: /');

            } else {
                try {
                    View::render('register.php',  compact('errors'));
                } catch (\Exception $e) {
                }
            }
        }
        try {
            View::render('register.php');
        } catch (\Exception $e) {
        }
    }

}
















