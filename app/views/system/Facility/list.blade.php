<div class="col-md-12">
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
                <span class="btn-group">
                    <a class="btn btn-warning btn-xs">edit</a>
                    <a class="btn btn-info btn-xs">log</a>
                    <a class="btn btn-danger btn-xs">delete</a>
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
    });
</script>