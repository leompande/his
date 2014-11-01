<div class="col-md-12" id="loged_div"></div>
<div class="col-md-12" id="normal_div">
    <table id="table_list_facility" class="table datatable table-hover table-stripped">
        <caption>Facilities Table</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>Facility Name</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        <?php $rowCounter = 1;?>
        @foreach (Facility::all() as $facility)
        <tr>
            <td>{{ $rowCounter++ }}.</td>
            <td>{{ $facility->facility }}</td>
            <td>
                <span class="btn-group" id="{{ $facility->id  }}_{{ $facility->created_at  }}_{{ $facility->updated_at  }}_{{ $facility->facility }}">
                    <a class="btn btn-warning btn-xs edit" id="{{ $facility->id }}">edit</a>
                    <a class="btn btn-info btn-xs log" id="Facility_{{ $facility->id }}">log</a>
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



        var rows = $("table#table_list_facility").dataTable().fnGetNodes();
        for(var i=0;i<rows.length;i++)
        {
        $(rows[i]).find("td:last span a").on("click",function(){
            var array = $(this).parent("span").attr("id").split("_");
            //delete item
            if($(this).attr("class").indexOf("delete")>-1){
            $(".modal-title").html("<h3>Deleting Facility</h3>");
            var bodyContent="";
                bodyContent+=" Are you sure you want to delete:</br></br>";
                bodyContent+="<b>"+array[3]+"</b> facility</br></br>";
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
                            url: "<?php echo url("facility/delete")?>/"+array[0],
                            data: "",
                            success: whenSucceed
                        });

                        function whenSucceed(){
                            $(".modal-body").html('<div class="alert alert-success" role="alert"> Delete Successfully</div>')
                               setTimeout(function(){
                                $("#facility_list").load("<?php echo url("facility/list")?>");
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

             $("#facility_add").load("<?php echo url("facility/edit")?>/"+$(this).attr("id"),function(){
             $("#cancel_update").on("click",function(){
             $("#facility_add").load("<?php echo url("facility/add")?>");
             });
             $("#process_update").on("click",function(){

             $("#facility_add").load("<?php echo url("facility/add")?>");
             });
            });

            }
        });
        }

    });
</script>