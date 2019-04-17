@extends('adminlte::page')

@section('title', 'Comprovantes')

@section('content_header')
    <h1>Comprovante de Compras</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
                <form id="form-upload" enctype="multipart/form-data" action="" method="post">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Selecionar arquivos...</span>
                        <!-- The file input field used as target for the file upload widget -->
                        <input id="fileupload" type="file" name="documento">
                    </span>
                    
                    <br>
                    <br>

                    <div class="msg_upload" style="display: none;"></div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="list-files">
                <?php
                    foreach ($files as $key => $file) { ?>
                        <div class="block-file">
                            <img width="250px" src="<?php echo "/uploads/" . $file->name; ?>" />
                        </div>
                    <?php }
                ?>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@stop