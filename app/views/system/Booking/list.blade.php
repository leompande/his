<?php
    $reservedArray = Array();
           $bookings = Booking::where("end_date",">=",date("m/d/Y"))->get();
           $id = 0;
    foreach($bookings as $booking){
        if($booking->is_reserved==1){
               $reservedArray[$id] = $booking->id;
        }
           $id++;
    }
 ?>
<div class="col-md-12" id="loged_div"></div>
<div class="col-md-12" id="normal_div">
    <table id="table_list_all_bookings" class="table table-hover table-stripped">
        <caption>All Bookings</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>Client Name</th>
            <th>Clinet Email</th>
            <th>Adults</th>
            <th>Kids</th>

            <th>Start Date</th>
            <th>End Date</th>
            <th>Booked Categories</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
            <?php $rowCounter = 1;?>
            {{--{{ Category::find(0)->category_name }}--}}
            @foreach (Booking::all() as $booking)
            <tr>
                <td>{{ $rowCounter++ }}.</td>
                <td>{{ $booking->client_name }}</td>
                <td>{{ $booking->client_email }}</td>
                <td>{{ $booking->number_of_adults }}</td>
                <td>{{ $booking->number_kids }}</td>
                <td>{{ $booking->start_date }}</td>
                <td>{{ $booking->end_date }}</td>
                <td><a class="cat_view" title="view categories" href="#myModal" data-toggle=""  id="{{ $booking->id }},{{ $booking->categories }}"><i class="fa fa-list"></i></a></td>
                <td>
                <span class="btn-group" id="{{ $booking->id  }}_{{ $booking->created_at  }}_{{ $booking->updated_at  }}_{{ $booking->client_name }}">


                   @if(in_array($booking->id,$reservedArray))
                   <a class="btn btn-default btn-xs " title="this booking is reserved" disabled="disabled">reserved</a>

                   @else
                    <a class="btn btn-success btn-xs reserve" title="reserve" id="reserve_{{ $booking->id }}">reserve</a>
                   @endif
                    <a class="btn btn-warning btn-xs edit" title="edit " id="{{ $booking->id }}">edit</a>
                    <a class="btn btn-info btn-xs log" id="Booking_{{ $booking->id }}">log</a>
                    <a class="btn btn-danger btn-xs delete"  href="#myModal" data-toggle="" title="delete">delete</a>
                </span>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    <table id="table_list_available_room" class="table table-hover table-stripped">
        <caption>Available Rooms</caption>
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

        </tbody>
    </table>
    <table id="table_list_booked_room" class="table table-hover table-stripped">
        <caption>Booked Rooms</caption>
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

        </tbody>
    </table>
    <table id="table_list_reserved_room" class="table table-hover table-stripped">
        <caption>Reserved Rooms</caption>
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

        </tbody>
    </table>
</div>
<script>
 $('#table_list_all_bookings').dataTable({
            "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-12'i><'col-lg-12 center'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            }
        });
    $(".table").hide();
    $("#table_list_all_bookings").show();

    var rows = $("table#table_list_all_bookings").dataTable().fnGetNodes();
                    for(var i=0;i<rows.length;i++)
                    {
                    $(rows[i]).find("td:last span a").on("click",function(){
                        var array = $(this).parent("span").attr("id").split("_");
                        //delete item
                        if($(this).attr("class").indexOf("delete")>-1){
                        $(".modal-title").html("<h3>Deleting Booking</h3>");
                        var bodyContent="";
                            bodyContent+=" Are you sure you want to delete:</br></br>";
                            bodyContent+="Bookng by <b>"+array[3]+"</b> </br></br>";
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
                                        url: "<?php echo url("bookings/delete")?>/"+array[0],
                                        data: "",
                                        success: whenSucceed
                                    });

                                    function whenSucceed(){
                                        $(".modal-body").html('<div class="alert alert-success" role="alert"> Delete Successfully</div>')
                                           setTimeout(function(){
                                            $("#category_list").load("<?php echo url("categories/list")?>");
                                            $(".close_modal").trigger("click");
                                           },1000);
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
                                     $("#booking_add").load("<?php echo url("booking/edit")?>/"+$(this).attr("id"),function(){
                                     $("#cancel_update").on("click",function(){
                                     $("#booking_add").load("<?php echo url("bookings/add")?>");
                                     });
                                     });
                                     }
                 if($(this).attr("class").indexOf("reserve")>-1){
                                     $("#replaceable_div").load("<?php echo url("bookings/reserve")?>/"+$(this).attr("id").split("_")[1],function(){
                                     $("#cancel_update").on("click",function(){
                                     $("#booking_add").load("<?php echo url("bookings/add")?>");
                                     });
                                     });
                                     }








                    });
                    }

                    //view categories
 $("table#table_list_all_bookings tr td a.cat_view").on("click",function(){
                    var array = $(this).parent("td").next().find("span").attr("id").split("_");
                        var categoriesId = $(this).attr("id");
                        var booking_id = null;
                        var resulted_array = categoriesId.split(",");
                        booking_id = resulted_array[0];
                        $(this).attr("data-toggle","modal");
                        $(".modal-title").html("<h3>Selected Room Categories</h3>");
                        var bodyContent="";
                            bodyContent+="Client Name: <b>"+array[3]+"</b> </br></br>";
                            bodyContent+="<ol>";
                        $.ajax({
                            type: "GET",
                            url: "<?php echo url("category/show/")?>/"+resulted_array[1],
                            data: "",
                            success: function(data){
                            bodyContent+=data;
                             $(".modal-body").html(bodyContent);
                             $(".save_changes").html("Delete");
                             $(".save_changes").addClass("btn-danger");
                             $(".save_changes").removeClass("btn-primary");
                             $(this).attr("data-toggle","modal");
                             console.log($(this).attr("id"));
                            }
                        });


 });



</script>