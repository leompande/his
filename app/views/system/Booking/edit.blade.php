<script>
$(function() {
   $(".datepicker1").datepicker({
       //normal setup parameters here
       onSelect: function(date) {

                 var           minDateObject= new Date($(".datepicker1").val());//compose the date you want to set

             $( ".datepicker2" ).datepicker( "option", "minDate",minDateObject );
       }
      });

      $(".datepicker2").datepicker({
             //normal setup parameters here
             onSelect: function(date) {

                       var   minDateObject= new Date($(".datepicker2").val());//compose the date you want to set

                   $( ".datepicker1" ).datepicker( "option", "maxDate",minDateObject );
             }
            });
  });
</script>
<div class="row">
    <div class="col-md-12">
     <p>Edit Booking by <b>{{ $booking->client_name }}</b></p>
        <form role="form" id="booking_update" >
           <div class="form-group">
               <label for="client">Client</label>
               <input type="hidden" class="form-control" name="id" value="{{ $booking->id }}" id="id" >
               <select class="form-control" name="client" id="client" >
               <option selected value="{{ $booking->client_name}}_{{ $booking->client_email }}">{{ $booking->client_name}}</option>
               @foreach (Client::all() as $client)
               <option value="{{ $client->firstname }} {{ $client->middlename }} {{ $client->lastname }}_{{ $client->email }}">{{ $client->firstname }} {{ $client->middlename }} {{ $client->lastname }}</option>
               @endforeach
               </select>
               <a class="btn btn-mini btn-primary">add client</a>
           </div>
            <div class="form-group">
                <label for="reg_no">Number Of Adults</label>
                <input type="text" class="form-control" name="number_of_adults" value="{{ $booking->number_of_adults }}" id="number_of_adults" >

            </div>
            <div class="form-group">
                <label for="room_phone_no">Number Of Kids</label>
                <input type="text" class="form-control" name="number_kids" value="{{ $booking->number_kids }}" id="number_kids" >
            </div>
            <div class="form-group">
                <label for="category">Room Category</label>
                <select type="text" class="form-control" name="categories[]" multiple id="category">
                <?php $categories_id = explode("_",$booking->categories); ?>
                @foreach ($categories_id as  $cat_id)

                @if(!empty($cat_id))
                <?php $categ = RoomCategory::find($cat_id); ?>
                <option selected value="{{ $cat_id }}">{{ $categ->category_name }}</option>
                @endif
                @endforeach
                @foreach (RoomCategory::all() as $category)
                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
                </select>
            </div>

             <div class="form-group">
                            <label for="room_phone_no">Start Date</label>
                            <input type="text" class="form-control datepicker1" name="start_date" value="{{ $booking->start_date }}" id="startdate" >
                        </div>

              <div class="form-group">
                             <label for="room_phone_no">End Date</label>
                             <input type="text" class="form-control datepicker2" value="{{ $booking->end_date }}" name="end_date" id="enddate" >
              </div>

            <button type="submit" class="btn btn-warning">Update</button>
            <button type="button" class="btn btn-danger" id="cancel_update">Cancel</button><div class="output"></div>
        </form>
    </div>
</div>

<script>
$(document).ready(function(){
    $("#booking_update").on('submit',function(e){
        e.preventDefault();
        $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> updating facility wait ...</h4>");
        var formValues = $(this).serialize();

        $.ajax({
            type: "GET",
            url: 'booking/update',
            data: formValues,
            success: whenSucceed
        });

    });

    function whenSucceed(){
        $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> updated successifully</h4>");
      setTimeout(function(){
          $(".output").html("");
       },1000);
    $("#booking_list").load("<?php echo url("bookings/list")?>");
    $("#booking_add").load("<?php echo url("bookings/add")?>");
    }
});
</script>