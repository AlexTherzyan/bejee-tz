<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 11.08.2018
 * Time: 1:04
 */

namespace Core;




use config\Config;

class Db{

    use TSingletone;

    protected function __construct(){

        class_alias('\RedBeanPHP\R','\R');
        \R::setup( Config::DSN,Config::DB_USERNAME,Config::DB_PASSWORD);
        if( !\R::testConnection() ){
            echo "нет Соединения с бд";
            die;
        }


    }

}