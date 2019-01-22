<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.1.19
 * Time: 20.44
 */

namespace App\Models;


class Task extends AppModel
{

    const DONE = 1;
    const NOT_DONE = 0;

    protected $table = 'tasks';

}