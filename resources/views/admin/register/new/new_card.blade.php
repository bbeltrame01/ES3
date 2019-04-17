@extends('adminlte::page')

@section('title', 'Cadastros')

@section('content_header')
    <h1>Novo Cartão</h1>
@stop

@section('content')
<div class="box box-solid">
    <div class="box-header with-border bg-purple">
        <h3 class="box-title">Dados Cartão</h3>
    </div>
    <div class="box-body">
        <div class="row">
        <div class="col-md-6">
            <label>Nome do Cartão</label>
            <input type="text" class="form-control" placeholder="Nome do Cartão">
        </div>
        <div class="col-md-4">
            <label>Nº do Cartão</label>
            <input type="text" class="form-control" placeholder="0000 0000 0000 0000">
            <br>
        </div>
        <div class="col-xs-4">
                <label>Limite</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                <input type="text" class="form-control" placeholder="1.000,00">
            </div>
        </div>
        <div class="col-xs-4">
            <label>Vencimento</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="31/2022">
            </div>
        </div>
        <div class="col-xs-2">
                <label>Vencimento da Fatura</label>
                <input type="text" class="form-control" placeholder="31">
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-success pull-right">Salvar</button>
        <button type="submit" class="btn btn-warning pull-right" style="margin-right: 5px;">Voltar</button>
    </div>
</div> 
@stop