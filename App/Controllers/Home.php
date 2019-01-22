<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15.08.2018
 * Time: 18:57
 */

namespace App\Controllers;

use App\Models\Task;
use App\Tools\Pagination;
use App\Tools\Traits\sorting;
use Core\View;



class Home extends  AppController
{

    use sorting;

    public function showAction()
    {
        $task = new Task();

        //-------------------pagination---------------------------------
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1 ;
        $total = $task->count();
        $perpage = 3;
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();
        //-------------------pagination---------------------------------
        $tasks = \R::getAll( $this->sorting($start,$perpage));

        $user = null;
        if (isset($_SESSION['logged_user'])){
            $user = $_SESSION['logged_user'];
        }

        try {
            View::render('home.php',  compact('tasks', 'pagination', 'user'));
        } catch (\Exception $e) {
        }

    }






}

