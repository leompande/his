<div class="col-md-12" id="loged_div"></div>
<div class="col-md-12" id="normal_div">
    <table id="table_list_users" class="table datatable table-hover table-stripped">
        <caption>Users Table</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        <?php $rowCounter = 1;?>
        @foreach (User::all() as $user)
        <tr>
            <td>{{ $rowCounter++ }}.</td>
            <td>{{ $user->firstname }} </td>
            <td>{{ $user->middlename }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <span class="btn-group" id="{{ $user->id  }}_{{ $user->created_at  }}_{{ $user->updated_at  }}_{{ $user->firstname }} {{ $user->middlename }} {{ $user->lastname }}">
                    <a class="btn btn-warning btn-xs edit" id="{{ $user->id }}">edit</a>
                    <a class="btn btn-info btn-xs log" id="User_{{ $user->id }}">log</a>
                    <a class="btn btn-success btn-xs full_log" id="{{ $user->id }}">full log</a>
                    <a class="btn btn-danger btn-xs delete" href="#myModal" data-toggle="">delete</a>
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
            $('.datatable').dataTable({
                "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-12'i><'col-lg-12 center'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ records per page"
                }
            });
    
    
    
    
            var rows = $("table#table_list_users").dataTable().fnGetNodes();
            for(var i=0;i<rows.length;i++)
            {
            $(rows[i]).find("td:last span a").on("click",function(){
                var array = $(this).parent("span").attr("id").split("_");
                //delete item
                if($(this).attr("class").indexOf("delete")>-1){
                $(".modal-title").html("<h3>Deleting User</h3>");
                var bodyContent="";
                    bodyContent+=" Are you sure you want to delete user:</br></br>";
                    bodyContent+="User Name : <b>"+array[3]+"</b> </br></br>";
                    bodyContent+="Created at: <b>"+array[1]+"</b>  and Last Updated at: <b>"+array[2]+"</b>";
                $(".modal-body").html(bodyContent);
                $(".save_changes").html("Delete");
                $(".save_changes").addClass("btn-danger");
                $(".save_changes").removeClass("btn-primary");
                $(this).attr("data-toggle","modal");
                $(".save_changes").on("click",function(){
                     $.ajax({
                                type: "GET",
                                url: "<?php echo url("user/delete")?>/"+array[0],
                                data: "",
                                success: whenSucceed
                            });
    
                            function whenSucceed(){
                                $(".modal-body").html('<div class="alert alert-success" role="alert"> Delete Successfully</div>')
                                   setTimeout(function(){
                                    $("#user_list").load("<?php echo url("user/list")?>");
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
                              $("#user_add").load("<?php echo url("user/edit")?>/"+$(this).attr("id"),function(){
                              $("#cancel_update").on("click",function(){
                              $("#user_add").load("<?php echo url("user/add")?>");
                              });
                              });
                            }
                if($(this).attr("class").indexOf("full_log")>-1){
                              $.ajax({
                              type: "GET",
                              url: "<?php echo url("/fullLogs")?>/"+$(this).attr("id"),
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