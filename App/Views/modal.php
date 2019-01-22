


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="form-edit" method="post" action="/task-update" enctype="multipart/form-data">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Редактирование</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <label for="basic-url">Название</label>
                        <div class="input-group mb-3">
                            <input id="edit_name" name="name" type="text" class="form-control" aria-describedby="basic-addon3">
                        </div>


                        <div class="form-group">
                            <label for="">Описание</label>
                            <textarea id="edit_description" name="description" class="form-control" rows="5" id=""></textarea>

                        </div>

                        <label for="basic-url">Изображение</label>
                        <br>
                        <img id="img-edit" src="" alt="">
                        <div class="input-group mb-3">

                            <div class="custom-file">
                                <input type="file" name="image"  />
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="submit"  class="btn btn-primary">Изменить</button>

                    </div>
                </div>
            </div>
        </form>

    </div>
</div>



<!-- Modal create -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">


    <form method="post" action="/task-add" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="<?=isset($_SESSION['logged_user']) ? $_SESSION['logged_user']->id : 0?>">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Новая задача</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <label for="basic-url">Название</label>
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" id="task_name" aria-describedby="basic-addon3">
                    </div>


                    <div class="form-group">
                        <label for="">Описание</label>
                        <textarea name="description" class="form-control" rows="5" id=""></textarea>

                    </div>

                    <label for="basic-url">Изображение</label>
                    <div class="input-group mb-3">

                        <div class="custom-file">
                            <input type="file" name="image"  />
                        </div>
                    </div>





                </div>

                <div class="modal-footer">
<!--                    <button type="button" style="float: left" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Предварительный просмотр</button>-->
                    <button type="submit"  class="btn btn-primary">Сохранить</button>

                </div>
            </div>
        </div>
    </form>

</div>
<!-- Button trigger modal -->





<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            ...
        </div>
    </div>
</div>



<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Войти</button>
            </div>
        </div>
    </div>
</div>

<!-- Register -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Выйти</button>
                <button type="button" class="btn btn-primary">Зарегистрироваться</button>
            </div>
        </div>
    </div>
</div>