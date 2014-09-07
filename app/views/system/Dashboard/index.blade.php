@extends("system_layout.master")

@section("contents")
<div id="content" class="col-lg-10 col-sm-11">

<div class="row">

    <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
        <div class="smallstat box">
            {{--<div class="boxchart-overlay blue">--}}
            <i class="fa fa-puzzle-piece lightBlue"></i>
                {{--<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>--}}
            {{--</div>--}}
            <span class="title">Total Rooms</span>
            <span class="value">{{ Room::all()->count() }} </span>
        </div>
    </div><!--/col-->

    <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
            <div class="smallstat box">
                <i class="fa fa-unlock lightBlue"></i>
                <span class="title">Available</span>
                <span class="value">{{ Room::all()->count() }} </span>
            </div>
        </div><!--/col-->


    <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
        <div class="smallstat box">
            <i class="fa fa-lock lightBlue"></i>

            <span class="title">Reservations</span>
            <span class="value">0</span>
        </div>
    </div><!--/col-->

    <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
        <div class="smallstat box">
            <i class="fa fa-money lightBlue"></i>
            <span class="title">Bookings</span>
            <span class="value">0</span>
        </div>
    </div><!--/col-->


</div><!--/row-->

<div class="row">
<h3>Yearly Customer Arrival Statistics</h3>
    <div class="col-xs-12">

        <div class="main-chart">

            <div class="bar">

                <div class="title">JAN</div>
                <div class="value" title="80%">80</div>

            </div>

            <div class="bar simple">

                <div class="title">FEB</div>
                <div class="value">60%</div>

            </div>

            <div class="bar simple">

                <div class="title">MAR</div>
                <div class="value">50%</div>

            </div>

            <div class="bar">

                <div class="title">APR</div>
                <div class="value">40%</div>

            </div>

            <div class="bar simple">

                <div class="title">MAY</div>
                <div class="value">10%</div>

            </div>

            <div class="bar simple">

                <div class="title">JUN</div>
                <div class="value">30%</div>

            </div>

            <div class="bar">

                <div class="title">JUL</div>
                <div class="value">50%</div>

            </div>

            <div class="bar simple">

                <div class="title">AUG</div>
                <div class="value">65%</div>

            </div>

            <div class="bar simple">

                <div class="title">SEP</div>
                <div class="value">40%</div>

            </div>

            <div class="bar">

                <div class="title">OCT</div>
                <div class="value">32%</div>

            </div>

            <div class="bar simple">

                <div class="title">NOV</div>
                <div class="value">20%</div>

            </div>

            <div class="bar simple">

                <div class="title">DEC</div>
                <div class="value">10%</div>

            </div>

            <div class="bar">

                <div class="title">JAN</div>
                <div class="value">100%</div>

            </div>

            <div class="bar simple">

                <div class="title">FEB</div>
                <div class="value">60%</div>

            </div>

            <div class="bar simple">

                <div class="title">MAR</div>
                <div class="value">50%</div>

            </div>

            <div class="bar">

                <div class="title">APR</div>
                <div class="value">40%</div>

            </div>

            <div class="bar simple">

                <div class="title">MAY</div>
                <div class="value">10%</div>

            </div>

            <div class="bar simple">

                <div class="title">JUN</div>
                <div class="value">30%</div>

            </div>

            <div class="bar">

                <div class="title">JUL</div>
                <div class="value">50%</div>

            </div>

            <div class="bar simple">

                <div class="title">AUG</div>
                <div class="value">65%</div>

            </div>

        </div>

    </div><!--/col-->

</div><!--/row-->

<div class="row">

<div class="col-lg-6 col-md-6">

    <div class="row">

        <div class="col-lg-12">

            <div class="multi-stat-box box">
                <div class="header">
                    <div class="left">
                        <h2>Weekly Summary</h2>
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
                                <span class="date">Overall</span>
                                <span class="value">987,123</span>
                            </li>
                            <li class="active">
                                <span class="date">This week</span>
                                <span class="value">9,873</span>
                            </li>
                            <li>
                                <span class="date">Yesterday</span>
                                <span class="value">851</span>
                            </li>
                            <li>
                                <span class="date">Today</span>
                                <span class="value">184</span>
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
                <div class="box calendar">
                    <div class="calendar-details">
                        <div class="day">MONDAY</div>
                        <div class="date">MAY 22</div>
                        <ul class="events">
                            <li>MAY 22, 19:30 Meeting</li>
                            <li>MAY 22, 19:30 Meeting</li>
                        </ul>
                        <div class="add-event">
                            <i class="fa fa-plus"></i>
                            <input type="text" class="new event" value="">
                        </div>
                    </div>
                    <div class="calendar-small"></div>
                    <div class="clearfix"></div>
                </div>
            </div><!--/col-->

        </div><!--/row-->



    </div><!--/col-->



</div><!--/row-->

</div>
@endsection