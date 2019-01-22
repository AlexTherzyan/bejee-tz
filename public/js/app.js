$(function() {

    $('.edit-task').click(function () {


        var id = $(this).data("id");
        var action = 'edit';

        $.ajax({
            url: "task-edit",
            data: {id, action},
            dataType: 'json',

            success: function(result){


                 $('#edit_name').val(result.name);
                 $('#edit_description').val(result.description);
                 $('#img-edit').attr('src',result.image );

                $('<input>').attr({
                    type: 'hidden',
                    name: 'id',
                    id: 'task-id',
                    value: result.id
                }).appendTo('#form-edit');


            },
            error: function(error){
                console.log('error')

            },
        });


    })

});




$(function() {

    $('.update-status').click(function (e) {




        var id = $(this).data("id");
        var status = $(this).data("status");
        var action = 'update-status';

        $.ajax({
            url: "task-status-update",
            data: {id, action, status},
            dataType: 'html',

            success: function(){

                setInterval(function () {
                    location.reload();
                }, 200);



            },
            error: function (err) {
                console.log(err);
            },
        });


    })

});





















