@extends('adminlte::page')

@section('title', 'Contas')

@section('content_header')
    <h1>Contas</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="box-tools pull-right">
          <div class="btn-group">
            <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-wrench"></i></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Editar</a></li>
              <li><a href="#">Excluir</a></li>
            </ul>
          </div>
        </div>
        <!-- /.box-tools -->
    <div class="info-box bg-gray">
      <span class="info-box-icon"><i class="fas fa-wallet"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Carteira</span>
        <span class="info-box-number">12,00</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
            <span class="progress-description">
              Dinheiro
            </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="box-tools pull-right">
          <div class="btn-group">
            <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-wrench"></i></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Editar</a></li>
              <li><a href="#">Excluir</a></li>
            </ul>
          </div>
        </div>
        <!-- /.box-tools -->
    <div class="info-box bg-gray">
      <span class="info-box-icon"><i class="fas fa-university"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Sicredi</span>
        <span class="info-box-number">100,00</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
            <span class="progress-description">
              Conta Corrente
            </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="box-tools pull-right">
          <div class="btn-group">
            <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-wrench"></i></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Editar</a></li>
              <li><a href="#">Excluir</a></li>
            </ul>
          </div>
        </div>
        <!-- /.box-tools -->
    <div class="info-box bg-gray">
      <span class="info-box-icon"><i class="fas fa-university"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Nubank</span>
        <span class="info-box-number">38,00</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
            <span class="progress-description">
              Conta Corrente
            </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <div class="col-md-3 col-sm-6 col-xs-12">  
          <div class="box-tools pull-right">
            <div class="btn-group">
              <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-wrench"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Editar</a></li>
                <li><a href="#">Excluir</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box-tools -->
    <div class="info-box bg-gray">
      <span class="info-box-icon"><i class="fas fa-piggy-bank"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">cofre</span>
        <span class="info-box-number">0,00</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
            <span class="progress-description">
              Conta Poupança
            </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
      <div class="col-md-3">
        <button type="button" class="btn btn-block btn-default btn-lg" style="padding: 33px">+</button>
      </div>
</div>

@stop