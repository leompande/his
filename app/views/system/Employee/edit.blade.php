<script>
$(function() {
   $(".datepicker1").datepicker();
   $(".datepicker2").datepicker();

  });
</script>
<div class="row">
    <div class="col-md-12">
        <form role="form" id="employee_update">
            <div id="new_employee">
               <div class="form-group">
                 <label for="client_name">Fist Name</label>
                 <input type="text" class="form-control" name="firstname" value="{{ $employee->firstname }}" id="firstname" >
                 <input type="hidden" class="form-control" name="id" value="{{ $employee->id }}"  >
               </div>
               <div class="form-group">
                <label for="middlename">Middle Name</label>
                <input type="text" class="form-control" name="middlename" value="{{ $employee->middlename }}" id="middlename" >
               </div>
               <div class="form-group">
                 <label for="lastname">Last Name</label>
                 <input type="text" class="form-control" name="lastname" value="{{ $employee->lastname }}" id="lastname" >
                 </div>
                <div class="form-group">
                    <label for="birth_date">Birth Date</label>
                        <input type="text" class="form-control datepicker1" value="{{ $employee->birth_date }}" name="birth_date" id="birth_date" >
                </div>
                <div class="form-group">
                   <label for="location">Location</label>
                      <input type="text" class="form-control" name="location" value="{{ $employee->location }}" id="location" >
                 </div>
                 <div class="form-group">
                 <label for="email">Email</label>
                 <input type="text" class="form-control" name="email" value="{{ $employee->email }}" id="email" >
                 </div>
                 <div class="form-group">
                  <label for="phone">Phone</label>
                   <input type="text" class="form-control" name="phone" value="{{ $employee->phone }}" id="phone" >
                 </div>
                  <div class="form-group">
                     <label for="employement_date">Employement Date</label>
                      <input type="text" class="form-control datepicker2" value="{{ $employee->employement_date }}" name="employement_date" id="employement_date" >
                  </div>
                 <div class="form-group">
                  <label for="responsibility">Responsibility</label>
                   <input type="text" class="form-control" name="responsibility" value="{{ $employee->responsibility }}" id="responsibility" >
                 </div>
            </div>
            </br>
            <button type="submit" class="btn btn-default">Update</button>
            <button type="button" class="btn btn-danger" id="cancel_update">Cancel</button><div class="output"></div>
        </form>
    </div>
</div>

<script>

$(document).ready(function(){
    $("#employee_update").on('submit',function(e){
        e.preventDefault();
         $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> registering employeey wait ...</h4>");
         var formValues = $(this).serialize();

         $.ajax({
           type: "POST",
           url: 'employee/update',
           data: formValues,
           success: whenSucceed
         });

               });


    function whenSucceed(){
        $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> updated successifully</h4>");
      setTimeout(function(){
          $(".output").html("");
          $("#employee_add").load("<?php echo url("employees/add")?>");
       },2000);
    $("#employee_list").load("<?php echo url("employees/list")?>");
    }
});
</script>