$(document).ready(function () {
    $(".tab-pane").show();
    $(".accordion").each(function () {

        $(".collapse",this).collapse({
            parent:this
        });
    });

    $('#audit-tabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    $(".up").click(function () {
        var but = $(this);
        but.closest(".collapse").collapse("hide");
        $(document).scrollTop(0);
        return false;
    });
    $(".prev").click(function () {
        var but = $(this);
        but.closest(".collapse").collapse("hide");
        but.closest(".accordion-group").prev().children(".collapse").collapse("show");
        return false;
    });
    $(".next").click(function () {
        var but = $(this);
        but.closest(".collapse").collapse("hide");
        but.closest(".accordion-group").next().children(".collapse").collapse("show");
        return false;
    });


    $(".add-collection-item").click(function () {
        var button = $(this),
            collection = button.closest("[data-prototype]"),
            prototype = collection.data("prototype"),
            collectionContainer = $(".collection-rows", collection),
            rowNumber = collectionContainer.children().length;
        $.each($(".row", collectionContainer), function () {
            var index = $(this).data("index");
            if (index >= rowNumber) {
                rowNumber = ++index;
            }
        });

        var newRow = prototype.split("__name__").join(rowNumber);

        collectionContainer.append(newRow);
        return false;
    });

    $(".collection").on("click", ".collection-row .delete", function () {
        var but = $(this);
        but.closest(".collection-row").remove();
        return false;
    });

    $(".collection").on("click", ".collection-row .resize", function () {
        var but = $(this),
            fullRow = but.closest(".collection-row"),
            row = fullRow.children(".row"),
            resizeButton = $(".resize", fullRow),
            icon = resizeButton.children("i");

        icon.toggleClass("icon-resize-small");
        icon.toggleClass("icon-resize-full");
        row.toggleClass("hide");
        return false;
    });

    $("#audit-save").click(function () {
        $("#audit-form").submit();
    });
})
;