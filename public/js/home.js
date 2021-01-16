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
window.addEventListener("DOMContentLoaded", function() {
    function setCursorPosition(pos, elem) {
        elem.focus();
        if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
        else if (elem.createTextRange) {
            var range = elem.createTextRange();
            range.collapse(true);
            range.moveEnd("character", pos);
            range.moveStart("character", pos);
            range.select()
        }
    }

    function mask(event) {
        var matrix = this.defaultValue,
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, "");
        def.length >= val.length && (val = def);
        matrix = matrix.replace(/[_\d]/g, function(a) {
            return val.charAt(i++) || "_"
        });
        this.value = matrix;
        i = matrix.lastIndexOf(val.substr(-1));
        i < matrix.length && matrix != this.defaultValue ? i++ : i = matrix.indexOf("_");
        setCursorPosition(i, this)
    }

    var input = document.querySelector("#phoneMask");
    input.addEventListener("input", mask, false)
});

