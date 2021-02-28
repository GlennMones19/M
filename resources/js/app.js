require('./bootstrap');

$(function() {
    $("body").mouseleave(function() {
        $("#myModal").modal();
    });
});

window.onbeforeunload = leave;

function leave() {
    return "You are leaving the site. Are you sure?";
}