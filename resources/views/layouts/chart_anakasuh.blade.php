@extends('includes.header')
@section('content')
    <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Chart JS</h1>                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="charts-morris.html">Charts</a>
                                    </li>
                                    <li class="active">
                                        <strong>Chart Donatur</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Bar chart</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <canvas id="bar-chartjs" height="450" width="600"></canvas>
                                    </div>
                                </div>
                            </div>
                        </section></div>

                    
                   
                </section>
                 <script src="assets/plugins/chartjs-chart/Chart.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-chartjs.js" type="text/javascript"></script>
         <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
<script type="text/javascript">
    $($('ul.wraplist li')[10]).addClass('open');
</script>

@endsection