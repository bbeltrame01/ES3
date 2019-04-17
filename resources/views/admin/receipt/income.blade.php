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
@stop