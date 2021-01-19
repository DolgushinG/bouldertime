

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

var token = "33c419ffb77324c6b14c23909f66ac321646a8cc";

var defaultFormatResult = $.Suggestions.prototype.formatResult;

function formatResult(value, currentValue, suggestion, options) {
    var newValue = suggestion.data.city;
    suggestion.value = newValue;

    return defaultFormatResult.call(this, newValue, currentValue, suggestion, options);
}

function formatSelected(suggestion) {
    return suggestion.data.city;
}
$("#email").suggestions({
    token: token,
    type: "EMAIL",
    /* Вызывается, когда пользователь выбирает одну из подсказок */
    onSelect: function(suggestion) {
        console.log(suggestion);
    }
});
    //dadate
$("#city").suggestions({
    minChars: "2",
    noSuggestionsHint: "ADDRESS: 'Неизвестный адрес'",
    scrollOnFocus: true,
    count: 5,
    token: token,
    type: "ADDRESS",
    hint: false,
    bounds: "city",
    addon: "none",
    constraints: {
        locations: { city_type_full: "город" }
    },
    formatResult: formatResult,
    formatSelected: formatSelected,
    /* Вызывается, когда пользователь выбирает одну из подсказок */
    onSelect: function(suggestion) {
        console.log(suggestion);
    }
});
