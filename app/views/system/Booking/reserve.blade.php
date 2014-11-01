{{HTML::script("system/assets/js/bookingscript/reservescript.js")}}
<?php
    $idArray = array();
    $i=0;
?>
@foreach($roomArray as $rooms)
        @foreach($rooms as $room)
              <?php $idArray[$i] = $room['category_id'];
                $i++
                ;?>
        @endforeach
@endforeach
        <br>
        <table>
        <tr>
        <th>Client Name:&nbsp;</th>
        <td>{{ $booking->client_name }}</td>
        </tr>
        <tr>
        <th>Email:&nbsp;</th>
        <td>{{ $booking->client_email }}</td>
        </tr>
        <tr>
        <th>Start Date:&nbsp;</th>
        <td>{{ $booking->start_date }}</td>
        </tr>
        <tr>
        <th>End Date:&nbsp;</th>
        <td>{{ $booking->end_date }}</td>
        </tr>
        </table><br>

 <!-- Nav tabs -->
 <ul class="nav nav-tabs" role="tablist" id="tab_menu_table">
      <?php $array = array();$i=0; $idArray = array_unique($idArray)?>
      @foreach(RoomCategory::all() as $category)
      @if (in_array($category->id, $idArray))
      <li role="presentation" ><a href="#{{ $category->category_name }}" role="tab" data-toggle="tab" id="reservetab_{{ $category->category_name }}">{{ $category->category_name }}</a></li>
      @endif
      <?php $array[$i] = $category->id;$i++; ?>
      @endforeach
 </ul>

 <!-- Tab panes -->
 <div class="tab-content">
 @foreach($array as $ids)
        @if (in_array($ids, $idArray))
            <div role="tabpanel" class="tab-pane active" id="{{ RoomCategory::find($ids)->category_name }}">
            <table id="table_{{ RoomCategory::find($ids)->category_name }}" class="table table-hover table-stripped">
                    <caption style="text-align: center;">Available Rooms Under {{ RoomCategory::find($ids)->category_name }} Category</caption>
                    <thead>
                    <tr>
                        <th>Room Reg #</th>
                        <th>Room Phone #</th>
                        <th>Reserve</th>
                    </tr>
                    </thead>
                    <tbody>
            @foreach($roomArray as $rooms)
                @foreach($rooms as $room)
                @if ($ids == $room['category_id'])
                  @if (Booking::find($booking->id)->is_reserved==1)
                         <tr><td>{{ $room['room_number'] }}</td><td>{{ $room['room_phone_number'] }}</td><td><input type="checkbox" name="reserve" id="{{ $room['id'] }}_{{ $room['category_id'] }}_{{ $booking->id }}" disabled checked /></td></tr>
                  @else
                        <tr><td>{{ $room['room_number'] }}</td><td>{{ $room['room_phone_number'] }}</td><td><input type="checkbox" name="reserve" id="{{ $room['id'] }}_{{ $room['category_id'] }}_{{ $booking->id }}" /></td></tr>
                 @endif
                @endif
                @endforeach
            @endforeach
                    </tbody>
                </table>
            </div>
        @endif
 @endforeach
 </div>
 <div class="col-md-10"></br>
  <a class="btn btn-info btn-sm" id="back_to_bookings"><i class="fa fa-arrow-left"></i>&nbsp;back</a>
 </div>
 <script>
 $(document).ready(function(){
    $("ul#tab_menu_table li:first a").trigger("click");
    $("ul#tab_menu_table li:first a").addClass("active");
    $("#back_to_bookings").on("click",function(){
             $("#replaceable_div").load("<?php echo url("bookings/replace")?>");
    });
 });
 </script>