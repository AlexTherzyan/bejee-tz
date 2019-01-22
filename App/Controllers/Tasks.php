<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.1.19
 * Time: 20.45
 */

namespace App\Controllers;

use App\Models\Task;
use App\Tools\Image;
use App\Tools\Request;


class Tasks extends AppController
{

    public function add()
    {
        $data = Request::All();

        $image = new Image();
        $image->loadImage();

        $task = new Task();
        $task->create(array_merge($data, ['image' => $image->getPathToImage()]));

        header('Location: /');

    }

    public function update()
    {

        $data = Request::All();
        $id = $data['id'];
        unset($data['id']);

        $image = new Image();
        $image->loadImage();

        $task = new Task();
        $task->update($id,array_merge($data, ['image' => $image->getPathToImage()]));

        header('Location: /');

    }

}
















