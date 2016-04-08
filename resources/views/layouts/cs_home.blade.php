@extends('includes.cs_header')
@section('content')

<section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Manajer => Pemetaan Anak Asuh</h1>                            
                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="ui-vectormaps.html">Maps</a>
                                    </li>
                                    <li class="active">
                                        <strong>Advanced Google Maps</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Google Map with Search</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="">
                                            <form role="form" method="post" id="address-search">
                                                <div class="input-group primary">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Enter address">
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-default">Search</button>
                                                    </span>
                                                </div>
                                            </form>

                                        </div> 
                                        <div class="clearfix"></div><br>

                                        <div class="gmap full-page-google-map">
                                            <div id="map-1"></div>
                                        </div>


                                        <!-- start -->
                                        <div class="clearfix"></div><br>
                                        <div class="map-toolbar">
                                            <div class="row">

                                                <div class="col-sm-8 text-right">

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning" id="map-unzoom">-</button>
                                                        <button type="button" class="btn btn-warning" id="map-resetzoom">Reset</button>
                                                        <button type="button" class="btn btn-warning" id="map-zoom">+</button>
                                                    </div>

                                                    &nbsp;

                                                    <a href="#" class="btn btn-info" id="go-sthlm">Go to Stockholm</a>
                                                    <a href="#" class="btn btn-purple" id="go-bln">Go to Berlin</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->

                                </div>
                            </div>
                    </div>
                </section></div>
    </section>
<script type="text/javascript">
    $($('ul.wraplist li')[0]).addClass('open');
</script>
@endsection

<script type="text/javascript">
    jQuery(document).ready(function($)
    {
        var map;
        var geocoder = new google.maps.Geocoder();

        var markers = [];
        var iterator = 0;

        var berlin = new google.maps.LatLng(52.520816, 13.410186),
                stockholm = new google.maps.LatLng(59.32522, 18.07002);

        var neighborhoods = [
            new google.maps.LatLng(52.511467, 13.447179),
            new google.maps.LatLng(52.549061, 13.422975),
            new google.maps.LatLng(52.497622, 13.396110),
            new google.maps.LatLng(52.517683, 13.394393),
            new google.maps.LatLng(52.530843, 13.382721),
            new google.maps.LatLng(52.514549, 13.350105),
            new google.maps.LatLng(52.534394, 13.340492),
        ];

        function initialize()
        {
            var mapOptions = {
                zoom: 12,
                center: berlin
            };

            // Calculate Height
            var el = document.getElementById('map-1'),
                    doc_height =
                    $(document).height() - 10 -
                    $(".main-content > .user-info-navbar").outerHeight() -
                    $(".main-content > .page-title").outerHeight() -
                    $(".google-map-env .map-toolbar").outerHeight();

            // Adjust map height to fit the document contianer
            el.style.height = doc_height + 'px';

            map = new google.maps.Map(el, mapOptions);

            for (var i = 0; i < neighborhoods.length; i++)
            {
                setTimeout(function() {
                    addMarker();
                }, i * 200 + 200);
            }

            // Stockholm Marker
            new google.maps.Marker({
                map: map,
                position: stockholm,
                draggable: true
            });
        }

        function addMarker()
        {
            markers.push(new google.maps.Marker({
                position: neighborhoods[iterator],
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP
            }));

            iterator++;
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        // Toolbar
        $("#go-sthlm").on('click', function(ev)
        {
            ev.preventDefault();

            map.panTo(stockholm);
        });

        $("#go-bln").on('click', function(ev)
        {
            ev.preventDefault();

            map.panTo(berlin);
        });

        $("#map-unzoom").on('click', function(ev)
        {
            ev.preventDefault();

            map.setZoom(map.getZoom() - 1);
        });

        $("#map-resetzoom").on('click', function(ev)
        {
            ev.preventDefault();

            map.setZoom(12);
        });

        $("#map-zoom").on('click', function(ev)
        {
            ev.preventDefault();

            map.setZoom(map.getZoom() + 1);
        });

        $("#address-search").submit(function(ev)
        {
            ev.preventDefault();

            var $inp = $(this).find('.form-control'),
                    address = $inp.val().trim();

            $inp.prev().find('i').addClass('fa-spinner fa-spin');

            if (address.length != 0)
            {
                geocoder.geocode({'address': address}, function(results, status)
                {
                    $inp.prev().find('i').removeClass('fa-spinner fa-spin');

                    if (status == google.maps.GeocoderStatus.OK)
                    {
                        map.setCenter(results[0].geometry.location);

                        var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            draggable: true
                        });

                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                });
            }
        });
    });
</script>