
<div class="row">
    <div class="col-md-12">
        <form role="form" id="booking_form">
            <div class="form-group">
                <label for="reg_no">Client Email</label>
                <input type="text" class="form-control" name="room_number" id="reg_no" >
            </div>
            <div class="form-group">
                <label for="reg_no">Number Of Adults</label>
                <input type="text" class="form-control" name="room_number" id="reg_no" >
            </div>
            <div class="form-group">
                <label for="room_phone_no">Number Of Kids</label>
                <input type="text" class="form-control" name="room_phone_number" id="room_phone_no" >
            </div>
            <div class="form-group">
                <label for="category">Room Category</label>
                <select type="text" class="form-control" name="category_id" multiple id="category">
                @foreach (RoomCategory::all() as $category)
                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
                </select>
            </div>

             <div class="form-group">
                            <label for="room_phone_no">Start Date</label>
                            <input type="text" class="form-control datepicker" name="startdater" id="startdate" >
                        </div>

              <div class="form-group">
                             <label for="room_phone_no">End Date</label>
                             <input type="text" class="form-control datepicker" name="enddate" id="enddate" >
                         </div>

            <button type="submit" class="btn btn-default">Register</button><div class="output"></div>
        </form>
    </div>
</div>

<script>
   $(document).ready(function(){
        $("#booking_form").on('submit',function(e){
            e.preventDefault();
            $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> registering booking wait ...</h4>");
            var formValues = $(this).serialize();

            $.ajax({
                type: "POST",
                url: 'bookings/store',
                data: formValues,
                success: whenSucceed
            });

        });


        function whenSucceed(){
            $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> registered successifully</h4>");
            setTimeout(function(){
                $(".output").html("");
            },1000);
            $("#booking_list").load("<?php echo url("booking/list")?>");
            $("#booking_add").load("<?php echo url("booking/add")?>");
        }
    });
</script>