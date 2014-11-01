<div class="row">
    <div class="col-md-12">
        <form role="form" id="user_update">

           <div id="from_employees">
            <div class="form-group">
               <label for="user">User</label>
               <input type="text" class="form-control"  disabled name="username" value="{{ $user->firstname }} {{ $user->middlename }} {{ $user->lastname }}">
               <input type="hidden" class="form-control"   name="id" value="{{ $user->id }} ">
            </div>
              <div class="form-group">
               <label for="username">User Name</label>
               <input type="text" class="form-control" name="username" value="{{ $user->username }}" id="username" >
              </div>
              <div class="form-group">
               <label for="password">Default Password</label>
               <input type="password" class="form-control" name="password" value="{{ $user->password }}" id="password" >
              </div>
             </div>
            <button type="submit" class="btn btn-warning">Update</button>
            <button type="button" class="btn btn-danger" id="cancel_update">Cancel</button><div class="output"></div>
        </form>
    </div>
</div>

<script>

$(document).ready(function(){
    $("#country").parent().hide();
    $("#user_update").on('submit',function(e){
        e.preventDefault();
         $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> registering employeey wait ...</h4>");
                 var formValues = $(this).serialize();

                 $.ajax({
                   type: "POST",
                   url: 'user/update',
                   data: formValues,
                   success: whenSucceed
                 });

    });

    function whenSucceed(){
        $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> updated successifully</h4>");
      setTimeout(function(){
          $(".output").html("");
          $("#user_add").load("<?php echo url("user/add")?>");
       },2000);
    $("#user_list").load("<?php echo url("user/list")?>");
    }
});
</script>