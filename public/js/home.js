//посмотреть комментарии
$(document).ready(function(){
    $("#showHideContent").click(function () {
        if ($("#content").is(":hidden")) {
            $("#content").show("slow");
        } else {
            $("#content").hide("slow");
        }
        return false;
    });
});

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
        var tmp = this.innerHTML;
        this.innerHTML = this.dataset.secondname;
        this.dataset.secondname = tmp;
    },false)
})

//mask phone
$(document).ready(function(){
    $('#telephone').inputmask('+7(999)-999-9999');

});

