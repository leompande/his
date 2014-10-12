<div class="col-md-12">
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
    $(".table").hide();
    $("#table_list_all_bookings").show();
</script>