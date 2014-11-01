<div class="col-md-12" id="loged_div"></div>
<div class="col-md-12" id="normal_div">
    <table id="table_list_employees" class="table datatable table-hover table-stripped">
        <caption>Employees Table</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            {{--<th>Birth Date</th>--}}
            {{--<th>Location</th>--}}
            {{--<th>Email</th>--}}
            {{--<th>Phone</th>--}}
            {{--<th>Responsibility</th>--}}
            {{--<th>Employ Date</th>--}}
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        <?php $rowCounter = 1;?>
        @foreach (Employee::all() as $employee)
        <tr>
            <td>{{ $rowCounter++ }}.</td>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->middlename }}</td>
            <td>{{ $employee->lastname }}</td>
            {{--<td>{{ $employee->birth_date }}</td>--}}
            {{--<td>{{ $employee->location }}</td>--}}
            {{--<td>{{ $employee->email }}</td>--}}
            {{--<td>{{ $employee->phone }}</td>--}}
            {{--<td>{{ $employee->responsibility }}</td>--}}
            {{--<td>{{ $employee->employement_date }}</td>--}}
            <td>
                <span class="btn-group" id="{{ $employee->id  }}_{{ $employee->created_at  }}_{{ $employee->updated_at  }}_{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }}">
                    <a class="btn btn-primary btn-xs">more</a>
                    <a class="btn btn-warning btn-xs edit" id="{{ $employee->id }}">edit</a>
                    <a class="btn btn-info btn-xs log" id="Employee_{{ $employee->id }}">log</a>
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




        var rows = $("table#table_list_employees").dataTable().fnGetNodes();
        for(var i=0;i<rows.length;i++)
        {
        $(rows[i]).find("td:last span a").on("click",function(){
            var array = $(this).parent("span").attr("id").split("_");
            //delete item
            if($(this).attr("class").indexOf("delete")>-1){
            $(".modal-title").html("<h3>Deleting Employee</h3>");
            var bodyContent="";
                bodyContent+=" Are you sure you want to delete employee:</br></br>";
                bodyContent+="<b>"+array[3]+"</b> </br></br>";
                bodyContent+="Created at: <b>"+array[1]+"</b>  and Last Updated at: <b>"+array[2]+"</b>";
            $(".modal-body").html(bodyContent);
            $(".save_changes").html("Delete");
            $(".save_changes").addClass("btn-danger");
            $(".save_changes").removeClass("btn-primary");
            $(this).attr("data-toggle","modal");
            $(".save_changes").on("click",function(){
                 $.ajax({
                            type: "GET",
                            url: "<?php echo url("employee/delete")?>/"+array[0],
                            data: "",
                            success: whenSucceed
                        });

                        function whenSucceed(){
                            $(".modal-body").html('<div class="alert alert-success" role="alert"> Delete Successfully</div>')
                               setTimeout(function(){
                                $("#employee_list").load("<?php echo url("employees/list")?>");
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
               $("#employee_add").load("<?php echo url("employee/edit")?>/"+$(this).attr("id"),function(){
               $("#cancel_update").on("click",function(){
               $("#employee_add").load("<?php echo url("employees/add")?>");
               });
               });
            }
        });
        }
    });
</script>