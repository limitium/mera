$(document).ready(function () {

    $(".accordion").each(function () {
        $(".collapse", this).collapse({
            parent:this
        });
    });

    $('#audit-tabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    setTimeout(function () {
        $('#audit-tabs a[href="#audit-data"]').tab('show');
    }, 100);


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

    $.datepicker.regional['ru'] = {
        closeText:'Закрыть',
        prevText:'&#x3c;Пред',
        nextText:'След&#x3e;',
        currentText:'Сегодня',
        monthNames:['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        monthNamesShort:['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
            'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
        dayNames:['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
        dayNamesShort:['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
        dayNamesMin:['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
        dateFormat:'dd.mm.yy',
        firstDay:1,
        isRTL:false
    };
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $(".collection").on("click", ".collection-row .btn.calendar", function () {
        var input = $(this).closest(".input-append").children("input");
        var picker = $(input).datepicker({
            dateFormat:"dd.mm.yy",
            showOn:"button",
            changeMonth:true,
            changeYear:true,
            yearRange: "-60:+05",
            onClose:function () {
                picker.datepicker("destroy");
            }
        });
        picker.datepicker("setDate", input.val());
        picker.datepicker("show");
        return false;
    });

    $("#audit-save").click(function () {
        $("#submiter").trigger("click");
    });
})
;