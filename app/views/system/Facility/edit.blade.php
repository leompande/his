<div class="row">
    <div class="col-md-12">
        <form role="form" id="facility_update">
            <div class="form-group">
                <label for="facility_name">Edit Facility <b>{{ $facility->facility }}</b></label>
                <input type="text" class="form-control" id="facility_name" name="facility" value="{{ $facility->facility }}" >
                <input type="hidden" class="form-control" id="id" name="id" value="{{ $facility->id }}" >
            </div>

            <button type="submit" class="btn btn-warning" id="process_update">Update</button>
            <button type="button" class="btn btn-danger" id="cancel_update">Cancel</button>
        </form>
    </div>
</div>

<script>
$(document).ready(function(){
    $("#facility_update").on('submit',function(e){
        e.preventDefault();
        $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> updating facility wait ...</h4>");
        var formValues = $(this).serialize();

        $.ajax({
            type: "POST",
            url: 'facility/update',
            data: formValues,
            success: whenSucceed
        });

    });


    function whenSucceed(){
        $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> registered successifully</h4>");
      setTimeout(function(){
          $(".output").html("");
       },1000);
    $("#facility_list").load("<?php echo url("facility/list")?>");
    $("#facility_add").load("<?php echo url("facility/add")?>");
    }
});
</script>