<div class="col-md-12" id="loged_div"></div>
<div class="col-md-12" id="normal_div">
    <table id="table_list_category" class="table datatable table-hover table-stripped">
        <caption>Categories Table</caption>
        <thead>
        <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Room Size</th>
                <th>Bed Rooms</th>
                <th>Location</th>
                <th>Price</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            <?php $rowCounter = 1;?>
            {{--{{ Category::find(0)->category_name }}--}}
            @foreach (RoomCategory::all() as $category)
            <tr>
                <td>{{ $rowCounter++ }}.</td>
                <td>{{ $category->category_name }}</td>
                <td>{{ $category->size }}</td>
                <td>{{ $category->bedrooms }}</td>
                <td>{{ $category->location }}</td>
                <td>{{ $category->price }}</td>
                <td class="button_parent">
                <span class="btn-group" id="{{ $category->id  }}_{{ $category->created_at  }}_{{ $category->updated_at  }}_{{ $category->category_name }}">
                    <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#{{ $category->id }}" title="view category facilities ">facility</a>
                    <a class="btn btn-warning btn-xs edit" title="edit " id="{{ $category->id }}">edit</a>
                    <a class="btn btn-info btn-xs log" id="Category_{{ $category->id }}">log</a>
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
        $('#table_list_category').dataTable({
            "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-12'i><'col-lg-12 center'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            }
        });

         var rows = $("table#table_list_category").dataTable().fnGetNodes();
                for(var i=0;i<rows.length;i++)
                {
                $(rows[i]).find("td:last span a").on("click",function(){
                    var array = $(this).parent("span").attr("id").split("_");
                    //delete item
                    if($(this).attr("class").indexOf("delete")>-1){
                    $(".modal-title").html("<h3>Deleting Category</h3>");
                    var bodyContent="";
                        bodyContent+=" Are you sure you want to delete:</br></br>";
                        bodyContent+="<b>"+array[3]+"</b> Category</br></br>";
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
                                    url: "<?php echo url("category/delete")?>/"+array[0],
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

                     $("#category_add").load("<?php echo url("category/edit")?>/"+$(this).attr("id"),function(){
                     $("#cancel_update").on("click",function(){
                     $("#category_add").load("<?php echo url("category/add")?>");
                     });
                     });
                     }
                });
                }

    });
</script>