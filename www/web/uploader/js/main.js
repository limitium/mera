
$(document).ready(function () {

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload();

    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

//    // Load existing files:
//    $('#fileupload').each(function () {
//        var that = this;
//        $.getJSON(this.action, function (result) {
//            if (result && result.length) {
//                $(that).fileupload('option', 'done')
//                    .call(that, null, {result:result});
//            }
//        });
//    });


});
