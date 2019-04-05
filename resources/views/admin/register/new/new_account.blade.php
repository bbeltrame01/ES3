@extends('adminlte::page')

@section('title', 'Cadastros')

@section('content_header')
    <h1>Nova Conta</h1>
@stop

@section('content')

<div class="box box-solid">
    <div class="box-header with-border bg-purple">
        <h3 class="box-title">Dados Conta</h3>
    </div>
    <div class="box-body">
        <div class="row">
        <div class="col-md-6">
            <label>Nome da Conta</label>
            <input type="text" class="form-control" placeholder="Nome da Conta">
        </div>
        <div class="col-md-4">
            <label>Nº da Conta</label>
            <input type="text" class="form-control" placeholder="12345-6">
            <br>
        </div>
        
        <div class="col-xs-5">
            <div class="form-group">
                <label>Tipo</label>
                <select class="form-control">
                    <option>Dinheiro</option>
                    <option>Conta Corrente</option>
                    <option>Conta Poupança</option>
                </select>
            </div>
        </div>
        <div class="col-xs-5">
            <label>Saldo Inicial</label>
            <input type="text" class="form-control" placeholder="1.000,00">
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