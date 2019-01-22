<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.1.19
 * Time: 18.49
 */

namespace App\Tools\Traits;


trait sorting
{

    public function sorting($start, $perpage) : string
    {
        $query = null;
        if (isset($_GET['sort'])){

            switch ($_GET['sort']){
                case 'status' :
                    $query = "SELECT * FROM tasks ORDER BY {$_GET['sort']} DESC LIMIT {$start}, {$perpage}";
                    break;
                case 'email' :
                    $query = "SELECT * FROM tasks JOIN users ON users.id = tasks.user_id ORDER BY {$_GET['sort']} DESC LIMIT {$start}, {$perpage}";

                    break;
                case 'name' :
                    $query = "SELECT * FROM tasks ORDER BY {$_GET['sort']} DESC LIMIT {$start}, {$perpage}";
                    break;

            }
        } else $query =  "SELECT * FROM tasks ORDER BY id DESC LIMIT {$start}, {$perpage}";

        return $query;
    }

}