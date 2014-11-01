<div class="row">
    <div class="col-md-12">
        <form role="form" id="client_form">
            <div class="form-group">
                <label for="client_name">First Name</label>
                <input type="text" class="form-control" name="firstname" id="client_name" >

            </div>
            <div class="form-group">
                <label for="client_name">Middle Name</label>
                <input type="text" class="form-control" name="middlename" id="client_name" >

            </div><div class="form-group">
                <label for="client_name">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="client_name" >

            </div>
            <div class="form-group">
                <label for="client_email">Email</label>
                <input type="text" class="form-control" name="email" id="email" >

            </div>
            <div class="form-group">
                <label for="client_email">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" >

            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <select name="nationality" class="form-control" id="nationality">
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Register</button><div class="output"></div>
        </form>
    </div>
</div>

<script>
   $(document).ready(function(){
   //hide country

        $("#client_form").on('submit',function(e){
            e.preventDefault();
            $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> registering client wait ...</h4>");
            var formValues = $(this).serialize();
            $.ajax({
                type: "POST",
                url: 'clients/store',
                data: formValues,
                success: whenSucceed
            });

        });


        function whenSucceed(){
            $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> registered successifully</h4>");
            setTimeout(function(){
                $(".output").html("");
            },1000);
            $("#client_list").load("<?php echo url("clients/list")?>");
            $("#client_add").load("<?php echo url("clients/add")?>");
        }
    });
</script>