    <table id="table_list_logs" class="table logs table-hover table-stripped">
        <caption>System Log Table</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>Item logged</th>
            <th>Specific Name</th>
            <th>Operation logged</th>
            <th>Operation Date</th>
            <th>Operator</th>
        </tr>
        </thead>
        <tbody>
        <?php $rowCounter = 1;?>
        @foreach ($logs as $log)
        <tr>
            <td>{{ $rowCounter++ }}.</td>
            <td>{{ $log->model }}</td>
            <td>
            @if($log->model=="Facility")
            {{ Facility::find($log->model_id)['facility'] }}
            @endif
            @if($log->model=="Category")
            {{ RoomCategory::find($log->model_id)['category_name'] }}
            @endif
             @if($log->model=="Room")
            {{ Room::find($log->model_id)['room_number'] }}
            @endif
            @if($log->model=="Booking")
            {{ Booking::find($log->model_id)['client_name'] }}
            @endif
            @if($log->model=="Client")
            {{ Booking::find($log->model_id)['client_name'] }}
            @endif
            @if($log->model=="Employee")
            {{ Employee::find($log->model_id)['firstname'] }}
            {{ Employee::find($log->model_id)['middlename'] }}
            {{ Employee::find($log->model_id)['lastname'] }}
            @endif
            @if($log->model=="User")
            {{ User::find($log->model_id)['firstname'] }}
            {{ User::find($log->model_id)['middlename'] }}
            {{ User::find($log->model_id)['lastname'] }}
            @endif
            @if($log->model=="Reservation")
            {{--{{ Booking::find($log->model_id)['client_name'] }}--}}
            @endif


            </td>
            <td>{{ $log->action }}</td>
            <td>{{ $log->created_at }}</td>
            <td>{{ User::find($log->user_id)['firstname']}} {{ User::find($log->user_id)['middlename']}} {{ User::find($log->user_id)['lastname']}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-xs btn-info" id="back"><i class="fa fa-arrow-left"></i>&nbsp;back</a>
</div>
<script>
    $(document).ready(function(){
        /* ---------- Datable ---------- */
        $('.logs').dataTable({
            "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-12'i><'col-lg-12 center'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            }
        });

        $("a#back").on("click",function(){
            $("div#loged_div").html("");
            $("div#normal_div").show();

        });
    });
</script>