<div class="col-md-12" id="loged_div"></div>
<div class="col-md-12" id="normal_div">
    <table id="table_list_all_clients" class="table table-hover table-stripped">

        <thead>
        <tr>
            <th>#</th>
            <th>Client Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Nationality</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
            <?php $rowCounter = 1;?>
            {{--{{ client::find(0)->client_name }}--}}
            @foreach (Client::all() as $client)
            <tr>
                <td>{{ $rowCounter++ }}.</td>
                <td>{{ $client->firstname }}  {{ $client->middlename }}  {{ $client->lastname }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->nationality }}</td>
                <td>
                <span class="btn-group" id="{{ $client->id  }}_{{ $client->created_at  }}_{{ $client->updated_at  }}_{{ $client->firstname }} {{ $client->middlename }} {{ $client->lastname }}">
                    <a class="btn btn-success btn-xs" title="reserve">bookings</a>
                    <a class="btn btn-warning btn-xs edit" title="edit" id="{{ $client->id }}">edit</a>
                    <a class="btn btn-info btn-xs log" id="Client_{{ $client->id }}">log</a>
                    <a class="btn btn-danger btn-xs delete" href="#myModal" data-toggle="" title="delete">delete</a>
                </span>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
<script>
   $(document).ready(function(){
        /* ---------- Datable ---------- */
        $('#ttable_list_all_clients').dataTable({
            "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-12'i><'col-lg-12 center'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            }
        });

         var rows = $("table#table_list_all_clients").dataTable().fnGetNodes();
                for(var i=0;i<rows.length;i++)
                {
                $(rows[i]).find("td:last span a").on("click",function(){
                    var array = $(this).parent("span").attr("id").split("_");
                    //delete item
                    if($(this).attr("class").indexOf("delete")>-1){
                    $(".modal-title").html("<h3>Deleting Client</h3>");
                    var bodyContent="";
                        bodyContent+=" Are you sure you want to delete:</br></br>";
                        bodyContent+="Client: <b>"+array[3]+"</b> </br></br>";
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
                                    url: "<?php echo url("client/delete")?>/"+array[0],
                                    data: "",
                                    success: whenSucceed
                                });

                                function whenSucceed(){
                                    $(".modal-body").html('<div class="alert alert-success" role="alert"> Delete Successfully</div>')
                                       setTimeout(function(){
                                        $("#client_list").load("<?php echo url("clients/list")?>");
                                        $(".close_modal").trigger("click");
                                       },1000);
                                    }
                    });
                    }

                 if($(this).attr("class").indexOf("edit")>-1){
                    $("#client_add").load("<?php echo url("client/edit")?>/"+$(this).attr("id"),function(){
                    $("#cancel_update").on("click",function(){
                    $("#client_add").load("<?php echo url("clients/add")?>");
                  });
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

                });
                }

    });
</script>