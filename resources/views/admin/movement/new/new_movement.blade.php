@extends('adminlte::page')

@section('title', 'Novo Movimento')

@section('content_header')
    <h1>Novo Movimento</h1>
@stop

@section('content')
<div class="col-xs-6">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Novo Registro</h3>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Gasto</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Renda</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Transferência</a></li>
            </ul>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" class="AVAST_PAM_loginform">
            <div class="box-body">
                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" class="form-control input-lg" placeholder="Descrição">
                    </div>
                <div class="col-md-6">
                        <label>Valor</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dollar-sign"></i></span>
                                <input type="text" class="form-control" placeholder="0,00">
                        </div>
                </div>
                <div class="col-md-6">
                        <label>Data</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" placeholder="01/01/2019">
                        </div>
                    <br>
                </div>
                <br>
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Categoria</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="0" aria-hidden="true">
                                <option selected="selected">Alimentação</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-0gki-container"><span class="select2-selection__rendered" id="select2-0gki-container" title="Categoria">Alimentação</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                </div>
                <div class="col-md-6">                
                    <div class="form-group">
                        <label>Conta</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="0" aria-hidden="true">
                            <option selected="selected">Carteira</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-0gki-container"><span class="select2-selection__rendered" id="select2-0gki-container" title="Conta">Carteira</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>            
                </div>
                <div class="checkbox">
                    <label>
                    <div class="col-md-6">
                        <input type="checkbox"> Fixo? 
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox"> Parcelado? 
                        </div>               
                    </label>                
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                            <select class="form-control select2 select2-hidden-accessible" disabled="" style="width: 100%;" tabindex="-1" aria-hidden="true">
                            <option selected="selected">Mensal</option>
                            <option>Anual</option>
                            <option>Bimestral</option>
                            <option>Semestral</option>
                            </select><span class="select2 select2-container select2-container--default select2-container--disabled select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-z9nj-container"><span class="select2-selection__rendered" id="select2-z9nj-container" title="Mensal">Mensal</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                </div>
                <div class="col-xs-2">
                    <input type="text" class="form-control" disabled="" placeholder="1">
                </div>            
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Salvar</button>
                <button type="button" class="btn btn-warning pull-right" style="margin-right: 5px;">Voltar</button>
            </div>
        </form>
    </div>
</div>
@stop