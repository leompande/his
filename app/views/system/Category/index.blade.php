@extends("system_layout.master")



@section("contents")
<!-- start: Content -->
<div id="content" class="col-lg-10 col-sm-11">
    <div class="row" style="padding: 10px;background: white;-webkit-border-radius: 0 0 2px 2px;-moz-border-radius: 0 0 2px 2px;border-radius: 0 0 2px 2px;border:1px solid #ccc; ">
        <b>Manage Room Categories</b>
    </div></br>

    <div class="row">

        <div class="col-sm-7">
            <div class="box">
                <div class="box-header">
                    <h2><i class="fa fa-check"></i>List Of Room Categories</h2>
                    <div class="box-icon">
                        <a href="ui-nestable-list.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                        <a href="ui-nestable-list.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                        <a href="ui-nestable-list.html#" class="btn-close"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content clearfix">
                    <div class="row" id="category_list">
                        @include('system.Category.list')
                    </div>

                </div>
            </div>
        </div><!--/col-->
        <div class="col-sm-5">
            <div class="box">
                <div class="box-header">
                    <h2><i class="fa fa-check"></i><span id="form_title">Add Room Category</span></h2>
                    <div class="box-icon">
                        <a href="ui-nestable-list.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                        <a href="ui-nestable-list.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                        <a href="ui-nestable-list.html#" class="btn-close"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content clearfix" id="category_add">

                    @include('system.Category.add')

                </div>

            </div>
        </div>
    </div><!--/col-->

</div><!--/row-->
<!-- end: Content -->

@endsection