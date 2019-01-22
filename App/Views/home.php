<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ТЗ</title>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Bejee-tz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <form class="form-inline my-2 my-lg-0">


                <? if (($user)): ?>

                    <span class="my-2 my-sm-0" style="margin-right: 5px">Привет, <?=$user->name ?: 'Пользователь' ?></span>
                    <a href="/logout" class="btn btn-outline-success my-2 my-sm-0"  >Выйти</a>

                <? else: ?>

                    <a href="/login" class="btn btn-outline-success my-2 my-sm-0" style="margin-right: 5px"  >Войти</a>
                    <a href="/register" class="btn btn-outline-success my-2 my-sm-0"  >Зарегистрироваться</a>

                <? endif; ?>


            </form>
        </div>
    </nav>


</head>
<body>

<div class="container" style="margin-top: 100px">
</div>

        <!-- Page Content -->


    <div class="container">
        <div class="row">

            <!-- Button trigger modal -->
            <div class="col">
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Сортировать по...
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/?sort=status">По статусу</a>
                        <a class="dropdown-item" href="/?sort=email">По email</a>
                        <a class="dropdown-item" href="/?sort=name">По имени</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <button type="button" style="float: right" class="btn btn-success"  data-toggle="modal" data-target="#new">
                    Новая задача
                </button>
            </div>

            <div class="w-100"></div>

            <div  class="col text-center text-lg-left ">

                <div class="list-group my-3">

                    <? if ($tasks): ?>
                        <? foreach ($tasks as $task): ?>

                            <a href="#" class="list-group-item list-group-item-action d-flex   align-items-start">
                                <img class="d-block float-right img-thumbnail img-fluid" src="<?=$task['image'] ?: 'https://dummyimage.com/240x320/c2bac2/fff&text=NO-IMAGE'?>" >
                                <div class="w-100">
                                    <h4 class="mb-1 text-center"><?=$task['name']?></h4>
                                </div>
                                <div class="w-100">
                                    <h5 class="mb-1 text-right"><?=$task['description']?></h5>
                                    <?if ($task['status'] == \App\Models\Task::DONE): ?>
                                        <span style="color: greenyellow">Выполнена</span>
                                    <? else: ?>
                                        <span style="color: red;">В работе</span>
                                    <? endif; ?>
                                </div>

                            </a>
                            <? if (($user)): ?>
                                <? if ($task['status'] == \App\Models\Task::DONE): ?>
                                    <button  data-id="<?=$task['id']?>" data-status="<?=$task['status']?>" type="button" class="btn btn-success update-status"  >Выполнена</button>
                                <? else: ?>
                                    <button  data-status="<?=$task['status']?>" data-id="<?=$task['id']?>" type="button" class="btn btn-danger update-status"  >Не выполнена</button>
                                <? endif; ?>


                                <button  data-id="<?=$task['id']?>"  type="button" style="float: right" class="btn btn-warning edit-task"  data-toggle="modal" data-target="#exampleModal">Редактировать</button>
                            <? endif; ?>
                        <? endforeach; ?>

                    <? else: ?>
                        <h1>Задач нету</h1>

                    <? endif; ?>


                </div>

            </div>

            <div class="w-100"></div>

            <? if ( isset($pagination) && $pagination->countPages > 1): ?>

                <div class="col-sm"></div>
                <div class="col-sm"> <?=$pagination?></div>
                <div class="col-sm"></div>


            <? endif; ?>

        </div>
    </div>






 <? require_once('modal.php')?>






<link rel="stylesheet" href="../../public/css/auth.css" media="screen" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="../../public/js/jquery-1.11.0.min.js" ></script>

<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="../../public/js/app.js"></script>






</body>
</html>















