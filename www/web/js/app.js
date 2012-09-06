$(document).ready(function () {
    $(".collapse").collapse();
    $(".next").click(function () {
        var but = $(this);
        but.closest(".collapse").collapse("hide");
        but.closest(".accordion-group").next().children(".collapse").collapse("show");
        return false;
    })
});