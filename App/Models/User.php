<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.1.19
 * Time: 15.08
 */

namespace App\Models;


class User extends AppModel
{


    const IS_ADMIN = 1;
    const IS_USER  = 0;

    protected $table = 'users';











}