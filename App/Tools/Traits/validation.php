<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.1.19
 * Time: 16.35
 */


namespace App\Tools\Traits;

use function config\debug;

trait validation
{

    public function checkEqualsPasswords($data)
    {
        $errors = [];
        if (isset($data['password']) && isset($data['confirm_password'])){


            if ($data['password'] !=  $data['confirm_password'] ){

                $errors[] =  'Пароли не совпадают';
            }
        }

        return $errors;
    }


    public function checkEmptyFields($data)
    {
        $errors = [];
        if (isset($data)){
            foreach ($data as $key => $item)

                if ( trim($item) == ''){
                    $errors[] = 'Поле ' . $key . ' не должно быть пустым' ;
                }

        }

        return $errors;
    }


    public function checkEqualsInTable($data)
    {
       $errors = [];



       if (isset($data)){

           foreach ($data as $key => $item){

               if (\R::count('users', $key . '=?' ,[ $item ]) > 0){
                    $errors [] = 'Пользователь с таким ' . $key . ' Уже существует';
               }
           }

       }


       return $errors;

    }


}

























