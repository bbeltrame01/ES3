@extends('adminlte::page')

@section('title', 'Comprovantes')

@section('content_header')
    <h1>Comprovante de Renda</h1>
@stop


@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Selecionar arquivos...</span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload" type="file" name="documento">
                </span>
                <br>
                <br>
                <!-- The global progress bar -->
                <div id="progress" class="progress">
                    <div class="progress-bar progress-bar-success"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script>
        ;(function($)
        {
          'use strict';
          $(document).ready(function()
          {
              var $fileupload     = $('#fileupload'),
                  $upload_success = $('#upload-success');
    
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
        })(window.jQuery);
    </script>
@stop