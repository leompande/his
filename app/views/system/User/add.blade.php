<div class="row">
    <div class="col-md-12">
        <form role="form" id="user_form">

           <div id="from_employees">
            <div class="form-group">
               <label for="user">Pick From Employees</label>
               <select  class="form-control" name="user" id="user" >
               <option> -- select employee to be user -- </option>
               @foreach(Employee::all() as $employee)
                <option>{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }}</option>
               @endforeach
               </select>
            </div>
              <div class="form-group">
               <label for="username">User Name</label>
               <input type="text" class="form-control" name="username" id="username" >
              </div>
              <div class="form-group">
               <label for="password">Default Password</label>
               <input type="text" class="form-control" name="password" id="password" >
              </div>
            <button type="button" id="newuser_btn" class="btn btn-default"><i class="fa fa-plus"></i> New User </button>
            </div>
            <div id="new_user">
               <div class="form-group">
                 <label for="client_name">Fist Name</label>
                 <input type="text" class="form-control" name="firstname" id="firstname" >
               </div>
               <div class="form-group">
                <label for="middlename">Middle Name</label>
                <input type="text" class="form-control" name="middlename" id="middlename" >
               </div>
               <div class="form-group">
                 <label for="lastname">Last Name</label>
                 <input type="text" class="form-control" name="lastname" id="lastname" >
                 </div>
                 <div class="form-group">
                 <label for="email">Email</label>
                 <input type="text" class="form-control" name="email" id="email" >
                 </div>
                 <div class="form-group">
                  <label for="username">User Name</label>
                   <input type="text" class="form-control" name="username" id="username" >
                 </div>
                 <div class="form-group">
                  <label for="password">Default Password</label>
                  <input type="text" class="form-control" name="password" id="password" >
                 </div>
               <button type="button" id="employee_btn" class="btn btn-default"><i class="fa fa-plus"></i> From Employees </button>

            </div>
            </br>
            <button type="submit" class="btn btn-default">Register</button><div class="output"></div>
        </form>
    </div>
</div>

<script>
   $(document).ready(function(){
   //hide country
       $("#new_user").hide();
       $("#newuser_btn").on("click",function(){
         $("#new_user").show();
         $("#from_employees").hide();
       });

       $("#employee_btn").on("click",function(){
                $("#from_employees").show();
                $("#new_user").hide();
              });


        $("#user_form").on('submit',function(e){
            e.preventDefault();
            $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> registering user wait ...</h4>");
            var formValues = $(this).serialize();

            $.ajax({
                type: "POST",
                url: 'user/store',
                data: formValues,
                success: whenSucceed
            });

        });


        function whenSucceed(){
            $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> registered successifully</h4>");
            setTimeout(function(){
                $(".output").html("");
            },1000);
            $("#user_list").load("<?php echo url("user/list")?>");
            $("#user_add").load("<?php echo url("user/add")?>");
        }
    });
</script>