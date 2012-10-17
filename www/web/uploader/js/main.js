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

    $('#fileupload').each(function () {
        $(this).fileupload('option', 'done')
            .call(this, null, {result:Mera.files[ $(this).data("type")]});
    });
});
