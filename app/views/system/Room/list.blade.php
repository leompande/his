<div class="col-md-12">
    <table id="table_list_all_room" class="table table-hover table-stripped">
        <caption>All Rooms</caption>
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
            <?php $rowCounter = 1;?>
            {{--{{ Category::find(0)->category_name }}--}}
            @foreach (Room::all() as $room)
            <tr>
                <td>{{ $rowCounter++ }}.</td>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->room_phone_number }}</td>
                <td>{{ RoomCategory::find($room->category_id)->category_name }}</td>
                <td>
                <span class="btn-group">
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
    $("#table_list_all_room").show();
</script>