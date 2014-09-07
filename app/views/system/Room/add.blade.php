<div class="row">
    <div class="col-md-12">
        <form role="form" id="room_form">
            <div class="form-group">
                <label for="reg_no">Room Reg.#</label>
                <input type="text" class="form-control" name="room_number" id="reg_no" >
            </div>
            <div class="form-group">
                <label for="room_phone_no">Room Phone no.</label>
                <input type="text" class="form-control" name="room_phone_number" id="room_phone_no" >
            </div>
            <div class="form-group">
                <label for="category">Room Category</label>
                <select type="text" class="form-control" name="category_id" id="category">
                @foreach (RoomCategory::all() as $category)
                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-default">Register</button><div class="output"></div>
        </form>
    </div>
</div>

<script>
   $(document).ready(function(){
        $("#room_form").on('submit',function(e){
            e.preventDefault();
            $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> registering room wait ...</h4>");
            var formValues = $(this).serialize();

            $.ajax({
                type: "POST",
                url: 'rooms/store',
                data: formValues,
                success: whenSucceed
            });

        });


        function whenSucceed(){
            $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> registered successifully</h4>");
            setTimeout(function(){
                $(".output").html("");
            },1000);
            $("#room_list").load("<?php echo url("rooms/list")?>");
            $("#room_add").load("<?php echo url("rooms/add")?>");
        }
    });
</script>