    {{HTML::script("system/assets/js/bookingscript/roomreservescript.js")}}
    <table id="table_list_reserves" class="table reserves table-hover table-stripped">
        <caption>Pick A Booking to Reserve Room For</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>Client Name</th>
            <th>Email</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Select</th>
        </tr>
        </thead>
        <tbody>
        <?php $rowCounter = 1;?>
        @foreach ($bookingArray as $booking)
         @if(!$booking->is_reserved)
        <tr>
            <td>{{ $rowCounter++ }}.</td>
            <td>{{ $booking->client_name }}</td>
            <td>{{ $booking->client_email }}</td>
            <td>{{ $booking->start_date }}</td>
            <td>{{ $booking->end_date }}</td>
            <td><input type="checkbox" name="check_to_reserve" id="{{ $booking->id }}_{{ $room->id }}"></td>

        </tr>
        @endif
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