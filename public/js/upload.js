
$(document).ready(function() {
    
    var $fileupload     = $('#fileupload'),
        $upload_success = $('#upload-success');

    $('#fileupload').on("change", function(e) {
        var form = new FormData();
        form.append('fileUpload', e.target.files[0]);

        $.ajax({
            url: "/upload_buy",
            dataType: 'json',
            type: 'POST',
            data: form,
            processData: false,
            contentType: false,
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')},
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                if(myXhr.upload){
                    myXhr.upload.addEventListener('progress', progress, false);
                }
                return myXhr;
            },
            success: function(data) {
                if(data.success) {
                    $(".msg_upload").append("<span style='color: green;'>" + data.message + "</span>").fadeIn();
                } else {
                    $(".msg_upload").append("<span style='color: red;'>" + data.message + "</span>").fadeIn();
                }

                $(".progress .progress-bar").css("width", "0%").find("> span").text("");

                setTimeout(function() {
                    $(".msg_upload").html("").fadeOut();
                }, 3000);
            }
        });

        /*function progress(e) {
            if(e.lengthComputable){
                var max = e.total;
                var current = e.loaded;
        
                var Percentage = (current * 100)/max;
        
                if(Percentage <= 100) {
                    $(".progress .progress-bar").css("width", Percentage + "%").find("> span").text(Math.round(Percentage, 0) + "%");
                }
            }  
         }*/
    });

});