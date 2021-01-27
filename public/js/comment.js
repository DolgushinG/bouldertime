
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '.del_comment', function(){
        let id = $(this).val();

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
            Cookies.remove('_showmode', 'Enabled');
            Cookies.set('_hidemode', 'Enabled');
        }
        else{
            $('#commentField_'+id).slideDown();
            Cookies.remove('_hidemode', 'Enabled');
            Cookies.set('_showmode', 'Enabled');
            getComments(id);
        }
    });
    $(document).on('click', '.submitComment', function () {
        var id = $(this).val();
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
    });

});
function getComments(id){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: 'getcomments',
        data: {id:id
            },
        success: function(data){
            $('#comment_'+id).html(data);

        }
    });
}
if(Cookies.get("_hidemode") === "Enabled"){
    let id = $('.comment').val();
    $('#commentField_'+id).slideUp();
    $('#commentField_'+id).addClass('hide_comments');
    document.querySelector("#showHideContent").innerHTML = 'Посмотреть комментарии';
    document.querySelector("#showHideContent").dataset.secondname = 'Скрыть комментарии';
} else if (Cookies.get("_showmode") === "Enabled") {
    let id = $('.comment').val();
    $('#commentField_'+id).addClass('show_comments');
    getComments(id);

    $('#commentField_'+id).slideDown();
    document.querySelector("#showHideContent").innerHTML = 'Скрыть комментарии';
    document.querySelector("#showHideContent").dataset.secondname = 'Посмотреть комментарии';
} else {
    let id = $('.comment').val();
    Cookies.set('_hidemode', 'Enabled');
    document.querySelector("#showHideContent").innerHTML = 'Посмотреть комментарии';
    document.querySelector("#showHideContent").dataset.secondname = 'Скрыть комментарии';
    $('#commentField_'+id).addClass('hide_comments');
}

//comment
const checkLengthcomment = function(evt) {
    if (fieldcomment.value.length > 1) {
        buttoncomment.removeAttribute('disabled')
    } else {
        buttoncomment.setAttribute('disabled','disabled');
    }
  }
  const fieldcomment = document.querySelector('#commenttext')
  const buttoncomment = document.querySelector('.submitComment')
  fieldcomment.addEventListener('keyup', checkLengthcomment)
