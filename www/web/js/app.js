$(document).ready(function () {
    $(".collapse").collapse();
    $(".next").click(function () {
        var but = $(this);
        but.closest(".collapse").collapse("hide");
        but.closest(".accordion-group").next().children(".collapse").collapse("show");
        return false;
    })
    $(".add-collection-item").click(function () {
        var button = $(this),
            collection = button.closest("[data-prototype]"),
            prototype = collection.data("prototype"),
            collectionContainer = $(".collection-rows", collection),
            rowNumber = $(".collection-rows").children().length,
            newRow = prototype.split("__name__").join(rowNumber);

        collectionContainer.append(newRow);
        return false;
    });
});