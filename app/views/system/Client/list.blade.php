<div class="col-md-12">
    <table id="table_list_all_bookings" class="table table-hover table-stripped">

        <thead>
        <tr>
            <th>#</th>
            <th>Client Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Nationality</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
            <?php $rowCounter = 1;?>
            {{--{{ Category::find(0)->category_name }}--}}
            @foreach (Client::all() as $client)
            <tr>
                <td>{{ $rowCounter++ }}.</td>
                <td>{{ $client->firstname }}  {{ $client->middlename }}  {{ $client->lastname }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->nationality }}</td>
                <td>
                <span class="btn-group">
                    <a class="btn btn-success btn-xs" title="reserve">bookings</a>
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
</script>