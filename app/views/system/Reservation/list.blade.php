
<div class="col-md-12">
    <table id="table_list_all_bookings" class="table table-hover table-stripped ">
        <caption>All Reservation</caption>
        <thead>
        <tr>
            <th rowspan="2">#</th>
            <th colspan="5" style="text-align: center;">Booking</th>
            <th rowspan="2">Employee</th>
            <th rowspan="2">Date</th>
            <th rowspan="2">Action</th>

        </tr>
        <tr>

            <th>Client Name</th>
            <th>Room #</th>
            <th>Room Category #</th>
            <th>Start Date</th>
            <th>End date</th>
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
                <td><a title="view categories"><i class="fa fa-list"></i></a></td>
                <td>
                <span class="btn-group">
                    <a class="btn btn-success btn-xs" title="reserve">reserve</a>
                    <a class="btn btn-warning btn-xs" title="edit ">edit</a>
                    <a class="btn btn-info btn-xs" title="view log">log</a>
                    <a class="btn btn-danger btn-xs" title="delete">delete</a>
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
        $('#table_list_all_bookings').dataTable({
            "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-12'i><'col-lg-12 center'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            }
        });
    });
</script>