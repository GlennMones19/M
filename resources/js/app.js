require('./bootstrap');


function onMouseOut(event) {
    if (event.clientY < 0) {
        document.removeEventListener("mouseout", onMouseOut);
        $("#myModal").modal();
    }
}
document.addEventListener("mouseout", onMouseOut);