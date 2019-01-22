<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.1.19
 * Time: 19.44
 */

namespace App\Controllers;


use App\Models\Task;
use App\Tools\Request;
use function config\dd;
use function config\debug;

class Ajax extends AppController
{

    public function edit()
    {
        $request = Request::All('REQUEST');
        if (isset($request['action']) &&  ($request['action'] == 'edit') ){
            $task = \R::getAll( "select * from tasks WHERE id = {$request['id']}" );
            echo json_encode($task[0]);
        }
    }


    public function updateStatus()
    {
        $request = Request::All('REQUEST');
        if (isset($request['action']) &&  ($request['action'] == 'update-status') ) {
            $task = new Task();
            $status = (int)$request['status'] == Task::DONE ? Task::NOT_DONE : Task::DONE;
            $task->update($request['id'], ['status' => $status]);
        }
    }
}























