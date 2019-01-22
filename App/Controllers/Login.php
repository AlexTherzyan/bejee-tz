<?php


namespace App\Controllers;


use App\Tools\Request;
use Core\View;

class Login extends AppController
{

    public function login()
    {

        if ( !empty($_POST)){
            $errors = [];
            $data = Request::All('POST');
            $user = \R::findOne( 'users', ' email = ? ', [ $data['email']] );

            if ($user){
                if (password_verify($data['password'], $user->password)){
                    $_SESSION['logged_user'] = $user;
                    header('Location: /');
                } else {
                    $errors [] = 'Неверный пароль';                }
            } else {
                $errors [] = 'Неверный email';
            }
            try {
                View::render('login.php', compact('errors'));
            } catch (\Exception $e) {
            }

        } else {
            try {
                View::render('login.php');
            } catch (\Exception $e) {
            }
        }



    }


    public function logout()
    {
        if (isset($_SESSION['logged_user'])){
            unset($_SESSION['logged_user']);
            header('Location: /');
        }
    }




}