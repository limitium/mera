$(document).ready(function () {

    $('.fileupload').each(function () {
        var uploader = $(this);
        uploader.fileupload({
            dropZone: uploader
        });

        uploader.fileupload('option', 'done')
            .call(this, null, {result:Mera.files[ uploader.data("type")]});
    });

});
