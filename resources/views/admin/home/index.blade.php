@extends('adminlte::page')

@section('title', 'MyPocket')

@section('content_header')
<link rel="icon" type="imagem/png" href="../media/icon-mypocket.png" />
@stop

@section('content')
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>R$ 150<sup style="font-size: 20px">,00</sup></h3>

            <p>Saldo Atual</p>
          </div>
          <div class="icon">
            <i class="ion ion-social-usd"></i>
          </div>
          <a href="#" class="small-box-footer">Mais detalhes   <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>R$200<sup style="font-size: 20px">,00</sup></h3>

            <p>Total Renda</p>
          </div>
          <div class="icon">
            <i class="ion ion-arrow-graph-up-right"></i>
          </div>
          <a href="#" class="small-box-footer">Mais detalhes  <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>R$50<sup style="font-size: 20px">,00</sup></h3>

            <p>Total Gastos</p>
          </div>
          <div class="icon">
            <i class="ion ion-arrow-graph-down-right"></i>
          </div>
          <a href="#" class="small-box-footer">Mais detalhes  <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>R$5.000<sup style="font-size: 20px">,00</sup></h3>

            <p>Meta</p>
          </div>
          <div class="icon">
            <i class="ion ion-trophy"></i>
          </div>
          <a href="#" class="small-box-footer">Mais detalhes  <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">Contas</h3>
                    <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody><tr>
                        <th>Descrição</th>
                        <th>Saldo(R$)</th>
                        </tr>
                        <tr>
                        <td>Carteira</td>
                        <td><span class="label label-success">12,00</span></td>
                        </tr>
                        <tr>
                        <td>Sicredi</td>
                        <td><span class="label label-success">100,00</span></td>
                        </tr>
                        <tr>
                        <td>Nubank</td>
                        <td><span class="label label-success">38,00</span></td>
                        </tr>
                        <tr>
                        <td>Cofre</td>
                        <td><span class="label label-warning">0,00</span></td>
                        </tr>
                    </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (LEFT) -->
            <div class="col-md-6">
                    <div class="box">
                            <div class="box-header">
                            <h3 class="box-title">Cartões</h3>
                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                <th>Descrição</th>
                                <th>Fatura Atual(R$)</th>
                                <th>Disponível(R$)</th>
                                <th>Tipo</th>
                                </tr>
                                <tr>
                                <td>VISA</td>
                                <td><span class="label label-warning">150,00</span></td>
                                <td><span class="label label-success">850,00</span></td>
                                <td><span class="label label-info">C</span></td>
                                </tr>
                                <tr>
                                <td>MasterCard</td>
                                <td><span class="label label-warning">50,00</span></td>
                                <td><span class="label label-success">1050,00</span></td>
                                <td><span class="label label-info">C</span></td>
                                </tr>
                                <tr>
                                <td>Vale Alimentação</td>
                                <td><span class="label label-warning">350,00</span></td>
                                <td><span class="label label-success">50,00</span></td>
                                <td><span class="label label-info">D</span></td>
                                </tr>
                            </tbody></table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
            </div>
            <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-6">
          <!-- DONUT CHART -->
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
              <canvas id="pieChart" style="height: 242px; width: 485px;" width="606" height="302"></canvas>
            </div>
          </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
            <!-- TABLE RECENTS -->
            <div class="box box-primary">
                <div class="box-header">
                <h3 class="box-title">Últimos Registros</h3>
                
        
                <div class="box-tools">
                    <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                    </ul>
                </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                <table class="table">
                    <tbody><tr>
                    <th>Registro</th>
                    <th>Data</th>
                    <th>Valor(R$)</th>
                    </tr>
                    <tr>
                    <td>Almoço</td>
                    <td>
                        15/03/2019
                    </td>
                    <td><section class="label label-danger">22,00</section></td>
                    </tr>
                    <tr>
                    <td>Jantar</td>
                    <td>
                        14/03/2019
                    </td>
                    <td><section class="label label-danger">40,00</section></td>
                    </tr>
                    <tr>
                    <td>DVD Pirata</td>
                    <td>
                        10/03/2019
                    </td>
                    <td><section class="label label-danger">5,00</section></td>
                    </tr>
                    <tr>
                    <td>Vale Alimentação</td>
                    <td>
                        05/03/2019
                    </td>
                    <td><section class="label label-success">440,00</section></td>
                    </tr>
                </tbody></table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->
    
</section>



@stop