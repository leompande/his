<div class="row">
    <div class="col-md-12">
        <form role="form" id="room_update">
            <div class="form-group">
                <label for="reg_no">Room Reg.#</label>
                <input type="text" class="form-control" id="reg_no" name="room_number" value="{{ $room->room_number }}"  >
            </div>
            <div class="form-group">
                <label for="room_phone_no">Room Phone no.</label>
                <input type="text" class="form-control" id="room_phone_no" name="room_phone_number" value="{{ $room->room_phone_number }}" >
                <input type="hidden" class="form-control" id="id" name="id" value="{{ $room->id }}" >
            </div>
            <div class="form-group">
                <label for="category">Room Category</label>
                <select type="text" class="form-control" name="category_id" id="category">
                <?php $select = RoomCategory::find($room->category_id); ?>
                <option value="{{ $select->id }}" selected>{{ $select->category_name }}</option>

                @foreach (RoomCategory::all() as $category)
                 <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
                 </select>
            </div>

            <button type="submit" class="btn btn-warning" id="">Update</button>
            <button type="button" class="btn btn-danger" id="cancel_update">Cancel</button>
        </form>
    </div>
</div>

<script>
$(document).ready(function(){
    $("#room_update").on('submit',function(e){
        e.preventDefault();
        $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> updating room wait ...</h4>");
        var formValues = $(this).serialize();

        $.ajax({
            type: "POST",
            url: 'room/update',
            data: formValues,
            success: whenSucceed
        });

    });


    function whenSucceed(){
        $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> updated successifully</h4>");
      setTimeout(function(){
          $(".output").html("");
       },1000);
    $("#room_list").load("<?php echo url("rooms/list")?>");
    $("#room_add").load("<?php echo url("rooms/add")?>");
    }
});
</script>