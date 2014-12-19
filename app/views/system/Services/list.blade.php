<div class="col-md-12" id="loged_div"></div>
<div class="col-md-12" id="food_div">
    <table id="table_list_users" class="table datatable table-hover table-stripped">
        <caption>Food Table</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>Service Name</th>
            <th>Category</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        <?php $rowCounter = 1;?>
        @foreach (Service::all() as $services)
        @if(ServiceCategory::find($services->service_category_id) ->service_category_name =="Food")

        <tr>
                    <td>{{ $rowCounter++ }}.</td>
                    <td>{{ $services->service_name }} </td>
                    <td>{{ ServiceCategory::find($services->service_category_id) ->service_category_name}} </td>
                    <td>
                        <span class="btn-group" id="">
                            <a class="btn btn-warning btn-xs edit" id="{{ $services->id }}">edit</a>
                            <a class="btn btn-info btn-xs log" id="User_{{ $services->id }}">log</a>
                            <a class="btn btn-success btn-xs full_log" id="{{ $services->id }}">full log</a>
                            <a class="btn btn-danger btn-xs delete" href="#myModal" data-toggle="">delete</a>
                        </span>
                    </td>
                </tr>

        @else
                             <tr>
                                <td colspan="4" style="text-align: center;">no values available</td>
                             </tr>
                            @endif

        @endforeach
        </tbody>
    </table>
</div>

<div class="col-md-12" id="beverage_div">
      <table id="table_list_users" class="table datatable table-hover table-stripped">
            <caption>Beverage Table</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Service Name</th>
                <th>Category</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            <?php $rowCounter = 1;?>
            @foreach (Service::all() as $services)
             @if(ServiceCategory::find($services->service_category_id) ->service_category_name =="Beverage")

                    <tr>
                                <td>{{ $rowCounter++ }}.</td>
                                <td>{{ $services->service_name }} </td>
                                <td>{{ ServiceCategory::find($services->service_category_id) ->service_category_name}} </td>
                                <td>
                                    <span class="btn-group" id="">
                                        <a class="btn btn-warning btn-xs edit" id="{{ $services->id }}">edit</a>
                                        <a class="btn btn-info btn-xs log" id="User_{{ $services->id }}">log</a>
                                        <a class="btn btn-success btn-xs full_log" id="{{ $services->id }}">full log</a>
                                        <a class="btn btn-danger btn-xs delete" href="#myModal" data-toggle="">delete</a>
                                    </span>
                                </td>
                            </tr>

                    @else
                     <tr>
                        <td colspan="4" style="text-align: center;">no values available</td>
                     </tr>
                    @endif
            @endforeach
            </tbody>
        </table>
</div>
<script>
$(document).ready(function(){
    $("#beverage_div").hide();
    $("#food_div").hide();
    $("#button_list a").click(function(){
        alert("data");
    });
});
</script>