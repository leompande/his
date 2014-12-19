@extends("system_layout.master")
@section("contents")
        <!-- start: Content -->
        <div id="content" class="col-lg-10 col-sm-11">
            <div class="row" style="padding: 10px;background: white;-webkit-border-radius: 0 0 2px 2px;-moz-border-radius: 0 0 2px 2px;border-radius: 0 0 2px 2px;border:1px solid #ccc; ">
                <b>Manage Services</b>
            </div></br>

            <div class="row">

                <div class="col-sm-8">
                    <div class="box">
                        <div class="box-header">
                            <h2><i class="fa fa-check"></i>List Of Services</h2>
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
                            @foreach(ServiceCategory::all() as $servicesCat)
                                <a class="btn btn-info btn-xs" id="{{ $servicesCat->id }}"><b><i class="fa fa-list"></i>&nbsp;View  {{ $servicesCat->service_category_name }} List</b></a>
                            @endforeach
                            </span>
                        </div>
                        </div>
                        <div class="row" id="room_list">
                            @include('system.Services.list')
                        </div>

                        </div>
                    </div>
                </div><!--/col-->
                <div class="col-sm-4">
                    <div class="box">
                        <div class="box-header">
                            <h2><i class="fa fa-check"></i><span id="form_title">Add Service</span></h2>
                            <div class="box-icon">
                                <a href="ui-nestable-list.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                                <a href="ui-nestable-list.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="ui-nestable-list.html#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="box-content clearfix" id="room_add">
                            @include('system.Services.add')
                        </div>

                    </div>
                </div>
            </div><!--/col-->

        </div><!--/row-->
        <!-- end: Content -->
<script>
$(document).ready(function(){
$("div#button_list span a").on("click",function(){
        var id_option = $(this).attr("id");
        if(id_option=="all_room"){
        $("table#table_list_all_room caption").html("All Rooms");
            $(".all_room").parent("span").parent("td").parent("tr").hide();
            $(".all_room").parent("span").parent("td").parent("tr").show();
        }else{
        var title = (id_option+"s").split("_");
            $("table#table_list_all_room caption").html(capitalize(title[0])+" "+capitalize(title[1]));
            $(".all_room").parent("span").parent("td").parent("tr").hide();
            $("."+id_option).parent("span").parent("td").parent("tr").show();
        }
});
});
function capitalize(s)
{
    return s[0].toUpperCase() + s.slice(1);
}
</script>
@endsection