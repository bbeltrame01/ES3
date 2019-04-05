@extends('adminlte::page')

@section('title', 'Gastos')

@section('content_header')
    <h1>Gastos</h1>
@stop

@section('content')
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
      <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Mostrar <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> Registros</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Busca:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
        <tr role="row"><th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 114.6px;" aria-sort="ascending">Descrição</th><th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 114.6px;" aria-sort="ascending">Categoria</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 143.4px;">Data</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 126.6px;">Valor(R$)</th>
        </thead>
        <tbody>
        <tr role="row" class="odd">
          <td class="sorting_1">Almoço</td>
          <td>Alimentação</td>
          <td class="">15/03/2019</td>
          <td>22,00</td>
        </tr><tr role="row" class="even">
          <td class="sorting_1">Janta</td>
          <td>Alimentação</td>
          <td class="">14/03/2019</td>
          <td>40,00</td>
        </tr><tr role="row" class="odd">
          <td class="sorting_1">DVD Pirata</td>
          <td>Compras</td>
          <td class="">10/03/2019</td>
          <td>5,00</td>
        </tr><tr role="row" class="even">
          <td class="sorting_1">Lanche URI</td>
          <td>Alimentação</td>
          <td class="">05/03/2019</td>
          <td>4,50</td>
        </tr></tbody>
      </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite"> 4 Registros</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"><<</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a><li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">>></a></li></ul></div></div></div></div>
    </div>
    <!-- /.box-body -->
  </div>
<div class="row">
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Gastos por Categoria</h3>
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <canvas id="pieChart" style="height: 183px; width: 366px;" width="457" height="228"></canvas>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-info">
                <div class="box-header with-border">
                <h3 class="box-title">Gastos Mensais</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                </div>
                <div class="box-body">
                <div class="chart">
                    <canvas id="lineChart" style="height: 250px; width: 346px;" width="432" height="312"></canvas>
                </div>
                </div>
                <!-- /.box-body -->
        </div>
    </div>
</div>    
@stop