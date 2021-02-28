require('./bootstrap');

$(function() {
    $("body").mouseleave(function() {
        $("#myModal").modal();
    });
});