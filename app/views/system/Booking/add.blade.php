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
        <form role="form" id="booking_form" >
           <div class="form-group">
               <label for="client">Client</label>
               <select class="form-control" name="client" id="client" >
               @foreach (Client::all() as $client)
               <option value="{{ $client->firstname }} {{ $client->middlename }} {{ $client->lastname }}_{{ $client->email }}">{{ $client->firstname }} {{ $client->middlename }} {{ $client->lastname }}</option>
               @endforeach
               </select>
               <a class="btn btn-mini btn-primary">add client</a>
           </div>
            <div class="form-group">
                <label for="reg_no">Number Of Adults</label>
                <input type="text" class="form-control" name="number_of_adults" id="reg_no" >
            </div>
            <div class="form-group">
                <label for="room_phone_no">Number Of Kids</label>
                <input type="text" class="form-control" name="number_kids" id="room_phone_no" >
            </div>
            <div class="form-group">
                <label for="category">Room Category</label>
                <select type="text" class="form-control" name="categories[]" multiple id="category">
                @foreach (RoomCategory::all() as $category)
                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
                </select>
            </div>

             <div class="form-group">
                            <label for="room_phone_no">Start Date</label>
                            <input type="text" class="form-control datepicker1" name="start_date" id="startdate" >
                        </div>

              <div class="form-group">
                             <label for="room_phone_no">End Date</label>
                             <input type="text" class="form-control datepicker2" name="end_date" id="enddate" >
              </div>

            <button type="submit" class="btn btn-default">Register</button><div class="output"></div>
        </form>
    </div>
</div>

<script>
   $(document).ready(function(){
        $("form#booking_form").on('submit',function(e){
            e.preventDefault();
            $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> registering booking wait ...</h4>");
            var formValues = $(this).serialize();
            $.ajax({
                type: "POST",
                url: 'bookings/store',
                data: formValues,
                success: whenSucceed
            });
        alert(formValues);
        });


        function whenSucceed(){
            $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> registered successifully</h4>");
            setTimeout(function(){
                $(".output").html("");
            },1000);
            $("#booking_list").load("<?php echo url("bookings/list")?>");
            $("#booking_add").load("<?php echo url("bookings/add")?>");
        }
    });
</script>