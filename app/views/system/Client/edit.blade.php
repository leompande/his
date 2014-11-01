<div class="row">
    <div class="col-md-12">
        <form role="form" id="client_update">
            <div class="form-group">
                <label for="client_name">First Name</label>
                <input type="hidden" class="form-control" name="id" value="{{ $client->id }}"  >
                <input type="text" class="form-control" name="firstname" value="{{ $client->firstname }}" id="client_name" >

            </div>
            <div class="form-group">
                <label for="client_name">Middle Name</label>
                <input type="text" class="form-control" name="middlename" value="{{ $client->middlename }}" id="client_name" >

            </div><div class="form-group">
                <label for="client_name">Last Name</label>
                <input type="text" class="form-control" name="lastname" value="{{ $client->lastname }}" id="client_name" >

            </div>
            <div class="form-group">
                <label for="client_email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $client->email }}" id="email" >

            </div>
            <div class="form-group">
                <label for="client_email">Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ $client->phone }}" id="phone" >

            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <select name="nationality" class="form-control" id="nationality">
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <select type="text" class="form-control" name="country" value="{{ $client->country }}" id="country" ></select>
            </div>

            <button type="submit" class="btn btn-default">Update</button>
            <button type="button" class="btn btn-danger" id="cancel_update">Cancel</button><div class="output"></div>
        </form>
    </div>
</div>

<script>

$(document).ready(function(){
    $("#country").parent().hide();
    $("#client_update").on('submit',function(e){
        e.preventDefault();
        $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> updating client wait ...</h4>");
        var formValues = $(this).serialize();

        $.ajax({
            type: "POST",
            url: 'client/update',
            data: formValues,
            success: whenSucceed
        });

    });

    function whenSucceed(){
        $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> updated successifully</h4>");
      setTimeout(function(){
          $(".output").html("");
          $("#client_add").load("<?php echo url("clients/add")?>");
       },2000);
    $("#client_list").load("<?php echo url("clients/list")?>");
    }
});
</script>