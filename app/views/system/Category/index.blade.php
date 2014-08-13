@extends("system_layout.master")



@section("contents")
<!-- start: Content -->
<div id="content" class="col-lg-10 col-sm-11">
    <div class="row" style="padding: 10px;background: white;-webkit-border-radius: 0 0 2px 2px;-moz-border-radius: 0 0 2px 2px;border-radius: 0 0 2px 2px;border:1px solid #ccc; ">
        <b>Manage Rooms</b>
    </div></br>

    <div class="row">

        <div class="col-sm-8">
            <div class="box">
                <div class="box-header">
                    <h2><i class="fa fa-check"></i>List Of Rooms</h2>
                    <div class="box-icon">
                        <a href="ui-nestable-list.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                        <a href="ui-nestable-list.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                        <a href="ui-nestable-list.html#" class="btn-close"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content clearfix">
                    <div class="row" >
                        <div class="col-md-12" id="button_list">
                            <span class="btn-group" >
                                <a class="btn btn-info btn-xs"><b><i class="fa fa-list-ol"></i>&nbsp; all rooms</b></a>
                                <a class="btn btn-success btn-xs"><b><i class="fa fa-list"></i>&nbsp; available rooms</b></a>
                                <a class="btn btn-warning btn-xs"><b><i class="fa fa-list-ul"></i>&nbsp; booked rooms</b></a>
                                <a class="btn btn-danger btn-xs"><b><i class="fa fa-th-list"></i>&nbsp; reserved rooms</b></a>
                            </span>
                        </div>
                    </div>
                    <div class="row"></div>

                </div>
            </div>
        </div><!--/col-->
        <div class="col-sm-4">
            <div class="box">
                <div class="box-header">
                    <h2><i class="fa fa-check"></i><span id="form_title">Add Room</span></h2>
                    <div class="box-icon">
                        <a href="ui-nestable-list.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                        <a href="ui-nestable-list.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                        <a href="ui-nestable-list.html#" class="btn-close"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content clearfix">


                </div>

            </div>
        </div>
    </div><!--/col-->

</div><!--/row-->
<!-- end: Content -->

@endsection