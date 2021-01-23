$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.submitComment', function(){
        var id = $(this).val();
        if($('#commenttext').val()==''){
            alert('Please write a Comment First!');
        }
        else{
            let commentForm = $('#commentForm_'+id).serialize();
            $.ajax({
                type: 'POST',
                url: 'writecomment',
                data: commentForm,
                success: function(){
                    // getComment(id);
                    alert('Отправлено');
                    $('#commentForm_'+id)[0].reset();
                },
            });
        }

    });
    // function getComment(id){
    //     $.ajax({
    //         url: 'getcomment',
    //         data: {id:id},
    //         success: function(data){
    //             $('#comment_'+id).html(data);
    //         }
    //     });
    // }

});

