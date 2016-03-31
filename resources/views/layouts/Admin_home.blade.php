@extends('includes.header')
@section('content')

<section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">Halooo</h1>                            
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">HALOOO admin {{Auth::user()->name}}</h2>
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            
            <div class="content-body">    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- ********************************************** -->
                    <table id="example" class="display table table-hover table-condensed" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><i class="fa fa-thumb-tack"></i>&nbsp;Id Calon Anak Asuh</th>
                            <th><i class="fa fa-key"></i>&nbsp;Nama</th>
                            <th><i class="fa fa-child"></i>&nbsp;Jenis Kelamin</th>
                            <th><i class="fa fa-home"></i>&nbsp;Tempat Lahir</th>
                            <th><i class="fa fa-plus"></i>&nbsp;Option</th>
                        </tr>
                    </thead>

                    <tbody>
                    
                        <tr class="odd gradeX">
                            <td class="glyphicon-class">Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>  oo</td>
                            <td>
                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>&nbsp;
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>&nbsp;
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>&nbsp;
                            </td>
                        </tr>
                        
                     </tbody>
                 </table>
                                        <!-- ********************************************** -->




                                    </div>
                                </div>
                            </div>
                        </section></div>



                   
                </section>
                <!-- 
                                        </div> <!-- END DIV ROW -->
                                    </div> <!--END div class="col-md-12 col-sm-12 col-xs-12"-->
                                </div> <!-- END div class = "row" -->
                            </div> <!-- END div class="content-body" -->
                        </section> <!-- end section = box -->
                    </div> <!-- end div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" -->
                </section> <!-- END class="wrapper"  --> -->

<script type="text/javascript">
    $($('ul.wraplist li')[2]).addClass('open');
</script>
@endsection
