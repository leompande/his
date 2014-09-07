<div class="row">
    <div class="col-md-12">
        <form role="form" id="facility_form">
            <div class="form-group">
                <label for="facility_name">Facility Name</label>
                <input type="text" class="form-control" name="facility_name" id="facility_name" >
            </div>

            <button type="submit" class="btn btn-default">Register</button><div class="output"></div>
        </form>
    </div>
</div>

<script>
$(document).ready(function(){
    $("#facility_form").on('submit',function(e){
        e.preventDefault();
        $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> registering facility wait ...</h4>");
        var formValues = $(this).serialize();

        $.ajax({
            type: "POST",
            url: 'facility/store',
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