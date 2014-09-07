<div class="col-md-12">
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
                <td>
                <span class="btn-group">
                    <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#{{ $category->id }}" title="view category facilities ">facility</a>

                    <!-- Modal -->
                    <div class="modal fade" id="{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel"><b>{{ $category->category_name }}</b> Facility List</h4>
                          </div>
                          <div class="modal-body">

                              <table id="table_list_category" class="table datatable table-hover table-stripped">
                                                              <caption>Categories Table</caption>
                                                              <thead>
                                                              <tr>
                                                                      <th>#</th>
                                                                      <th>Facility Name</th>
                                                                      <th>action</th>
                                                                  </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                  <?php $rowCounter = 1;?>

                            @foreach(RoomCategory::find($category->id)->categoryFacilities()->get() as $facilities)

                                        <tr>
                                            <td>{{ $rowCounter++ }}.</td>
                                            <td>{{ Facility::find($facilities['id'])['facility']}}</td>
                                            <td>
                                            <div class="btn-group">
                                            <a class="btn btn-warning btn-xs" title="edit ">edit</a>
                                            <a class="btn btn-info btn-xs" title="view log">log</a>
                                            <a class="btn btn-danger btn-xs" title="delete">delete</a>
                                            </div>
                                            </td>
                                        </tr>


                            @endforeach
                            <tbody></table>
                            {{--$facility['facility_id']--}}
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

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
        $('.datatable').dataTable({
            "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-12'i><'col-lg-12 center'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            }
        });
    });
</script>