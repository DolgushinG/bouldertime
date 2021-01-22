



$(document).ready(function(){
    $("#showHideContent").click(function () {
        if ($("#content").hasClass("show_comments")) {
            $("#content").hide("slow");
            $('#content').removeClass('show_comments').addClass('hide_comments');
            Cookies.remove('_showmode');
            Cookies.set('_hidemode', 'Enabled');
        } else if ($("#content").hasClass("hide_comments")) {
            $("#content").show("slow");
            $('#content').removeClass('hide_comments').addClass('show_comments');
            Cookies.remove('_hidemode');
            Cookies.set('_showmode', 'Enabled');
        }
    });
});
if(Cookies.get("_hidemode") === "Enabled"){
    $("#content").hide("slow");
    $("#content").addClass('hide_comments');
    document.querySelector("#showHideContent").innerHTML = 'Посмотреть комментарии';
    document.querySelector("#showHideContent").dataset.secondname = 'Скрыть комментарии';
} else if (Cookies.get("_showmode") === "Enabled") {
    $("#content").show("slow");
    $("#content").addClass('show_comments');
    document.querySelector("#showHideContent").innerHTML = 'Скрыть комментарии';
    document.querySelector("#showHideContent").dataset.secondname = 'Посмотреть комментарии';
} else {
    Cookies.set('_showmode', 'Enabled');
    document.querySelector("#showHideContent").innerHTML = 'Скрыть комментарии';
    document.querySelector("#showHideContent").dataset.secondname = 'Посмотреть комментарии';
    $("#content").addClass('show_comments');
}


    var smoothJumpUp = function () {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    window.scrollBy(0, -200);
    setTimeout(smoothJumpUp, 10);
}
}
//для всех кнопок secondarename указать другое имя
document.querySelectorAll("button").forEach(function(el){
    el.addEventListener("click",function(){
        if(!this.dataset.secondname)
            return;
        if(Cookies.get('_showmode') === 'Enabled'){
            this.dataset.secondname = 'Показать комментарии';
            this.innerHTML = 'Скрыть комментарии';
            let tmp = this.innerHTML;
            this.innerHTML = this.dataset.secondname;
            this.dataset.secondname = tmp;
        }
        if (Cookies.get('_hidemode') === 'Enabled'){
            this.dataset.secondname = 'Скрыть комментарии';
            this.innerHTML = 'Показать комментарии';
            let tmp = this.innerHTML;
            this.innerHTML = this.dataset.secondname;
            this.dataset.secondname = tmp;
        }


    },false)

})


