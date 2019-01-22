<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.1.19
 * Time: 15.17
 */

namespace App\Tools;

class Request
{



    public static function get($key)
    {
        if (is_string($key)){

            $value = htmlentities($_REQUEST[$key]);

            if ($value) {
                return $value;
            } else {
                return null;
            }

        }  else die('Неверный тип входных данных'); //throw new Exception('Неверный тип входных данных');
    }

    public static function All($request_method = null)
    {
        $request = null;


        switch (strtoupper($request_method)){
            case 'GET':
                $request = $_GET;
                break;
            case 'POST':
                $request = $_POST;
                break;
            case 'REQUEST':
                $request = $_REQUEST;
            break;
            default : $request = $_REQUEST;

        }

        $data = [];
        foreach($request as $key => $value ){
            $data[$key] = htmlentities($value);
        }

        return $data;
    }

}





















