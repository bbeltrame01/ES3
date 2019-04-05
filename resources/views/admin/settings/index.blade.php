@extends('adminlte::page')

@section('title', 'Configurações')

@section('content_header')
    <h1>Configurações</h1>
@stop

@section('content')
    <div class="col-md-6">
        <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-purple">
                    <h3 class="widget-user-username">{{$name}}</h3>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="../media/perfil.jpg" alt="User Avatar">
                </div>
                <div class="box-footer">
                    <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">4</h5>
                        <span class="description-text">CONTAS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">3</h5>
                        <span class="description-text">CARTÕES</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                        <h5 class="description-header">1</h5>
                        <span class="description-text">METAS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <form role="form" class="AVAST_PAM_loginform">
                        <br>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label>Primeiro Nome</label>
                                <input type="text" class="form-control" placeholder="Primeiro Nome">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label>Último Nome</label>
                                <input type="text" class="form-control" placeholder="Último Nome">
                            </div>
                            <br>
                        </div>
                        
                        <div class="box-body">
                                <label>Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <br>
                        <label>Senha</label>
                        <div class="input-group">                            
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Senha">
                        </div>
                        </div>
                        <!-- /.box-body -->        
                        <div class="box-footer">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
    </div>
@stop