@extends("system_layout.master")



@section("contents")
<!-- start: Content -->
<div id="content" class="col-lg-10 col-sm-11">
    <div class="row" style="padding: 10px;background: white;-webkit-border-radius: 0 0 2px 2px;-moz-border-radius: 0 0 2px 2px;border-radius: 0 0 2px 2px;border:1px solid #ccc; ">
        <b>Hotel Management Information System Report</b>
    </div></br>

    <div class="row">
    <div class="col-md-12 btn-group" id="report_menus">
        <a class="btn btn-default btn-group-lg col-md-4" id="room_report">Room Reports</a>
        <a class="btn btn-default btn-group-lg col-md-4" id="reservation_report">Reservation Reports</a>
        <a class="btn btn-default btn-group-lg col-md-4" id="general_report">General Reports</a>
    </div>
    <div class="col-md-12">
        <div class="row" id="options_selection_menu">

        </div>
        </br>
        <div class="row" id="chart_type_menu">
            <div class="btn-group-xs">
            <a class="btn-sm btn-default" style="font-weight: bolder; color:#36A9E1;text-decoration: none;" href="#" id="table"><i class="fa fa-table" ></i>&nbsp;&nbsp;Table</a>
            <a class="btn-sm btn-default" style="font-weight: bolder; color:#36A9E1;text-decoration: none;" href="#" id="bar"><i class="fa fa-bar-chart-o"></i>&nbsp;&nbsp;Bar Chart</a>
            <a class="btn-sm btn-default" style="font-weight: bolder; color:#36A9E1;text-decoration: none;" href="#" id="column"><i class="fa fa-bars"></i>&nbsp;&nbsp;Column Chart</a>
            <a class="btn-sm btn-default" style="font-weight: bolder; color:#36A9E1;text-decoration: none;" href="#" id="line"><i class="fa fa-line-chart"></i>&nbsp;&nbsp;Line Chart</a>
            <a class="btn-sm btn-default" style="font-weight: bolder; color:#36A9E1;text-decoration: none;" href="#" id="pie"><i class="fa fa-pie-chart"></i>&nbsp;&nbsp;Pie Chart</a>
            <a class="btn-sm btn-default" style="font-weight: bolder; color:#36A9E1;text-decoration: none;" href="#" id="combined"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;Combine Chart</a>
            <a class="btn-sm btn-default" style="font-weight: bolder; color:#36A9E1;text-decoration: none;" href="#" id="spider"><i class="fa fa-yelp"></i>&nbsp;&nbsp;Spider Chart</a>
            <a class="btn-sm btn-default" style="font-weight: bolder; color:#36A9E1;text-decoration: none;" href="#" id="exel"><i class=""></i>&nbsp;&nbsp;Exel</a>
            <a class="btn-sm btn-default" style="font-weight: bolder; color:#36A9E1;text-decoration: none;" href="#" id="pdf"><i class=""></i>&nbsp;&nbsp;Pdf</a>
            </div>
        </div>
        <div class="row" id="result_area">

        </div>
    </div>
    </div><!--/col-->

</div><!--/row-->
<!-- end: Content -->

@endsection