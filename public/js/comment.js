$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '.del_comment', function(){
        let id = $(this).val();
        let comment_id = $(this).data('post');

        $.ajax({
            type: 'POST',
            url: 'deletecomment',
            data: {
                comment:comment_id,
            },
            success: function(){
                getComments(id);
                $('#comment_'+id)[0].reset();
            }
        });
    });
    $(document).on('click', '.comment', function(){
        var id = $(this).val();

        if($('#commentField_'+id).is(':visible')){
            $('#commentField_'+id).slideUp();
        }
        else{
            $('#commentField_'+id).slideDown();
            getComments(id);
        }
    });
    $(document).on('click', '.submitComment', function () {
        var id = $(this).val();
        if ($('#commenttext').val() == '') {
            alert('Please write a Comment First!');
        } else {
            let commentForm = $('#commentForm_' + id).serialize();
            $.ajax({
                type: 'POST',
                url: 'writecomment',
                data: commentForm,
                success: function () {
                    getComments(id);
                    $('#commentForm_' + id)[0].reset();
                },
            });
        }

    });
    function getComments(id){
        $.ajax({
            url: 'getcomment',
            data: {id:id},
            success: function(data){
                $('#comment_'+id).html(data);
            }
        });
    }

});

