$(document).ready(function(){
    $("#showHideContent").click(function () {
        if ($("#content").is(":hidden")) {
            $("#content").show("slow");
        } else {
            $("#contents").hide("slow");
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

    window.onscroll = function () {
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if (scrolled > 100) {
    document.getElementById('upbutton').style.display = 'block';
} else {
    document.getElementById('upbutton').style.display = 'none';
}
}


