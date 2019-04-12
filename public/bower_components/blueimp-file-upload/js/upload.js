
$(document).ready(function() {
    console.log(true);
    var $fileupload     = $('#fileupload'),
        $upload_success = $('#upload-success');

$fileupload.on("change", function() {
    $fileupload.fileupload({
        url: '/upload',
        formData: {_token: $fileupload.data('token'), userId: $fileupload.data('userId')},
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        done: function (e, data) {
            $upload_success.removeClass('hide').hide().slideDown('fast');

            setTimeout(function(){
                location.reload();
            }, 2000);
        }
    });
});

});