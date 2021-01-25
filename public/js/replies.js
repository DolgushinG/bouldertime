$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '.repl', function(){
        var id = $(this).val();
        console.log($(this).val());
        if($('#replField_'+id).is(':visible')){
            $('#replField_'+id).slideUp();
        }
        else{
            $('#replField_'+id).slideDown();
        }
    });
    $(document).on('click', '.submitRepl', function () {
        var id = $(this).val();
        if ($('#repltext').val() == '') {
            alert('Please write a Comment First!');
        } else {
            let replForm = $('#replForm_' + id).serialize();
            $.ajax({
                type: 'POST',
                url: 'writerepl',
                data: replForm,
                success: function () {
                    getReplies(id);
                    $('#replForm_' + id)[0].reset();
                },
            });
        }

    });
    function getReplies(id){
        $.ajax({
            url: 'getrepl',
            data: {id:id},
            success: function(data){
                $('#repl_'+id).html(data);
            }
        });
    }

});


