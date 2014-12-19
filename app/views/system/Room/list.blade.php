<?php
    $reservedArray = Array();
           $roomstatus = RoomStatus::where("dateregistered",">=",date("m/d/Y"))->get();
           $id = 0;
    foreach($roomstatus as $status){
    if($status->status_id=="reserved"){
           $reservedArray[$id] = $status->room_id;
    }
           $id++;
    }
 ?>
<div class="col-md-12" id="loged_div"></div>
<div class="col-md-12" id="normal_div">
    <table id="table_list_all_room" class="table datatable table-hover table-stripped">
        <caption>All Rooms</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>Room Reg #</th>
            <th>Room Phone #</th>
            <th>Room Category</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
            <?php $rowCounter = 1;?>
            {{--{{ Category::find(0)->category_name }}--}}
            @foreach (Room::all() as $room)
            <tr>
                <td>{{ $rowCounter++ }}.</td>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->room_phone_number }}</td>
                <td>{{ RoomCategory::find($room->category_id)->category_name }}</td>
                <td>
                 <span class="btn-group" id="{{ $room->id  }}_{{ $room->created_at  }}_{{ $room->updated_at  }}_{{ $room->room_number }}">

                   @if(in_array($room->id,$reservedArray))
                   <a class="btn btn-default btn-xs reserved_room all_room" title="this room is reserves" disabled="disabled">reserved</a>

                   @else
                   <a class="btn btn-success btn-xs reserve available_room all_room" title="reserve" id="Room,{{ $room->id }}">reserve</a>
                   @endif
                    <a class="btn btn-warning btn-xs edit" title="edit " id="{{ $room->id }}">edit</a>
                    <a class="btn btn-info btn-xs log" id="Room_{{ $room->id }}">log</a>
                    <a class="btn btn-danger btn-xs delete" title="delete" href="#myModal" data-toggle="">delete</a>
                </span>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    {{--<table id="table_list_available_room" class="datatable table-hover table-stripped">--}}
        {{--<caption>Available Rooms</caption>--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>#</th>--}}
            {{--<th>Room Reg #</th>--}}
            {{--<th>Room Phone #</th>--}}
            {{--<th>Room Category</th>--}}
            {{--<th>action</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}

        {{--</tbody>--}}
    {{--</table>--}}
    {{--<table id="table_list_booked_room" class="datatable table-hover table-stripped">--}}
        {{--<caption>Booked Rooms</caption>--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>#</th>--}}
            {{--<th>Room Reg #</th>--}}
            {{--<th>Room Phone #</th>--}}
            {{--<th>Room Category</th>--}}
            {{--<th>action</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}

        {{--</tbody>--}}
    {{--</table>--}}
    {{--<table id="table_list_reserved_room" class="datatable table-hover table-stripped">--}}
        {{--<caption>Reserved Rooms</caption>--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>#</th>--}}
            {{--<th>Room Reg #</th>--}}
            {{--<th>Room Phone #</th>--}}
            {{--<th>Room Category</th>--}}
            {{--<th>action</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}

        {{--</tbody>--}}
    {{--</table>--}}
</div>
<script>

    $(".datatable").hide();
    $("#table_list_all_room").show();
        $(document).ready(function(){
            /* ---------- Datable ---------- */
            $('.datatable').dataTable({
                "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-12'i><'col-lg-12 center'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ records per page"
                }
            });



            var rows = $("table#table_list_all_room").dataTable().fnGetNodes();
            for(var i=0;i<rows.length;i++)
            {
            $(rows[i]).find("td:last span a").on("click",function(){
                var array = $(this).parent("span").attr("id").split("_");
                //delete item
                if($(this).attr("class").indexOf("delete")>-1){
                $(".modal-title").html("<h3>Deleting Room</h3>");
                var bodyContent="";
                    bodyContent+=" Are you sure you want to delete:</br></br>";
                    bodyContent+="<b>"+array[3]+"</b> room</br></br>";
                    bodyContent+="Created at: <b>"+array[1]+"</b>  and Last Updated at: <b>"+array[2]+"</b>";
                $(".modal-body").html(bodyContent);
                $(".save_changes").html("Delete");
                $(".save_changes").addClass("btn-danger");
                $(".save_changes").removeClass("btn-primary");
                $(this).attr("data-toggle","modal");
                $(".save_changes").on("click",function(e){
                e.preventDefault();
                     $.ajax({
                                type: "GET",
                                url: "<?php echo url("rooms/delete")?>/"+array[0],
                                data: "",
                                success: whenSucceed
                            });

                            function whenSucceed(){
                                $(".modal-body").html('<div class="alert alert-success" role="alert"> Delete Successfully</div>')
                                   setTimeout(function(){
                                    $("#room_list").load("<?php echo url("rooms/list")?>");
                                    $(".close_modal").trigger("click");
                                   },1000);
                                }
                });
                }
                if($(this).attr("class").indexOf("reserve")>-1){
                  $.ajax({
                     type: "GET",
                     url: "<?php echo url("rooms/roomreserve")?>/"+$(this).attr("id").split(",")[1],
                     data: "",
                     success: function(data){
                     $("div#normal_div").hide();
                     $("div#loged_div").html(data);
                      }
                     });

                }
                if($(this).attr("class").indexOf("log")>-1){
                  $.ajax({
                     type: "GET",
                     url: "<?php echo url("/logs")?>/"+$(this).attr("id"),
                     data: "",
                     success: function(data){
                     $("div#normal_div").hide();
                     $("div#loged_div").html(data);
                      }
                     });

                }
                 if($(this).attr("class").indexOf("edit")>-1){

                                     $("#room_add").load("<?php echo url("room/edit")?>/"+$(this).attr("id"),function(){
                                     $("#cancel_update").on("click",function(){
                                     $("#room_add").load("<?php echo url("rooms/add")?>");
                                     });
                                     });
                                     }
            });
            }

        });
</script>