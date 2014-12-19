@extends("system_layout.master")

@section("contents")
<div id="content" class="col-lg-10 col-sm-11">
<div class="row">
@if (Session::has('frash_message'))
                            <div id="flash_error" class="col-lg-12 col-sm-12" style="color:red;font-weight: bold;font-style: italic;"><span class="pull-right">{{ Session::get('frash_message') }}</span></div>
@endif
</div>
<div class="row">

    <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
        <div class="smallstat box">
            <i class="fa fa-puzzle-piece lightBlue"></i>
            <span class="title">Total Rooms</span>
            <span class="value">{{ Room::all()->count() }} </span>
        </div>
    </div>

    <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
            <div class="smallstat box">
                <i class="fa fa-unlock lightBlue"></i>
                <span class="title">Available Rooms</span>
                <span class="value">
                <?php $reserved = RoomStatus::where("status_id","=","reserved")->where("dateregistered",">=",date("m/d/Y"))->count(); $all = Room::all()->count();?>
                @if(($all-$reserved)==0)
                <a style="color:red;font-weight: bolder;"> {{ $all-$reserved }} </a><a style="font-size: 11px;">(Running Out of Rooms)</a>
                @else
                {{ $all-$reserved }}
                @endif
                </span>
            </div>
        </div>

    <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
        <div class="smallstat box">
            <i class="fa fa-money lightBlue"></i>
            <span class="title">Bookings</span>
            <span class="value">{{ Booking::where("end_date",">=",date("m/d/Y"))->count() }}</span>
        </div>
    </div>

    <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
        <div class="smallstat box">
            <i class="fa fa-lock lightBlue"></i>

            <span class="title">Reservations</span>
            <span class="value">{{ Booking::where("is_reserved","=",1)->where("end_date",">",date("m/d/Y"))->count() }}</span>
        </div>
    </div>


</div>

<div class="row">
    <div class="col-xs-12">
        <div id="main-chart" style="width:100%; height:400px;">

        </div>
    </div>
</div>



<div class="row">

<div class="col-lg-6 col-md-6">

    <div class="row">

        <div class="col-lg-12">

            <div class="multi-stat-box box">
                <div class="header">
                    <div class="left">
                        <h2>Monthly Arrival Summary</h2>
                        <a class="fa fa-chevron-down"></a>
                    </div>
                    <div class="right">
                        <h2>MAY 15 - MAY 22</h2>
                        <div class="percent"><i class="fa fa-double-angle-up"></i> 22%</div>
                    </div>
                </div>
                <div class="content">
                    <div class="left">
                        <ul>
                            <li>
                                <span class="date">Overall(Whole Month)</span>
                                <span class="value">{{ Client::getMonthClient() }}</span>
                            </li>
                            <li class="active">
                                <span class="date">This week</span>
                                <span class="value">{{ Client::getWeekClient() }}</span>
                            </li>
                            <li>
                                <span class="date">Yesterday</span>
                                <span class="value">{{ Client::getYesterdayClient() }}</span>
                            </li>
                            <li>
                                <span class="date">Today</span>
                                <span class="value">

                                {{ Client::getTodaysClient() }}
                                </span>
                            </li>

                        </ul>
                    </div>
                    <div class="right">
                        <div class="multi-stat-box-chart" style="height:180px; width: 90%; padding: 10px"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div><!--/col-->

<div class="col-lg-6 col-md-6">
 <div class="row">

            <div class="col-lg-6 col-sm-6 col-xs-6 col-xxs-12">

                <div class="smallchart blue box">

                    <div class="title">Account balance</div>

                    <div class="content">

                        <div class="chart-stat">
                            <div class="chart white">7,3,2,6,6,3,9,0,1,4</div>
                        </div>

                    </div>

                    <div class="value">$19 999,99</div>

                </div>

            </div><!--/col-->

            <div class="col-lg-6 col-sm-6 col-xs-6 col-xxs-12">

                <div class="smallchart red box">

                    <div class="title">Weekly revenue</div>

                    <div class="content">

                        <div class="chart-stat">
                            <div class="chart white">5,8,3,9,2,5,6,2,2,5</div>
                        </div>

                    </div>

                    <div class="value">$1 849,99</div>

                </div>

            </div><!--/col-->

        </div><!--/row-->

</div><!--/col-->

</div><!--/row-->

<div class="row">

    <div class="col-lg-12 col-md-12">

        <div class="row">

            <div class="col-lg-12">

            </div><!--/col-->

        </div><!--/row-->



    </div><!--/col-->



</div><!--/row-->

</div>
@endsection