<div class="row">
    <div class="col-md-12">
        <form role="form" id="service_form">

         <div class="form-group">
            <label for="service_category_id">Service Category</label>
             <select type="text" class="form-control" name="service_category_id" id="service_category_id">
               <option  selected disabled> select service category</option>

                @foreach(ServiceCategory::all() as $servicesCat)
                  <option  value="{{ $servicesCat->service_category_name }}" data-id="{{ $servicesCat->id }}"> {{ $servicesCat->service_category_name }}</option>
                @endforeach
             </select>
         </div>
            <div class="form-group">
                <label for="service_name" id="name_lable"></label>
                <input type="text" class="form-control" name="service_name" id="service_name" >
            </div>
            <div class="form-group">
                <label for="service_price" id="price_lable"></label>
                <input type="text" class="form-control" name="service_price" id="service_price" >
            </div>


            <button type="submit" class="btn btn-default">Register</button><div class="output"></div>
        </form>
    </div>
</div>

<script>
   $(document).ready(function(){
   $("#service_name").hide();
   $("#service_price").hide();
   $("#service_category_id").on("change",function(){
        var category = $(this).val();
        var nameLable = category+" Name";
        var priceLable = category+" Price";
        var data_id = $('option:selected', this).attr('data-id');
   $("#service_name").hide();
   $("#service_price").hide();
   $("#name_lable").html(nameLable);
   $("#price_lable").html(priceLable);

   $("#service_name").show();
   $("#service_price").show();


          $("#service_form").on('submit',function(e){
               e.preventDefault();
               $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> registering category wait ...</h4>");
               var formValues = $(this).serialize();

               $.ajax({
                   type: "POST",
                   url: 'services/store',
                   data: formValues+"&service_category_id="+data_id,
                   success: whenSucceed
               });

           });


   });




        function whenSucceed(){
            $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> registered successifully</h4>");
            setTimeout(function(){
                $(".output").html("");
            },1000);
            $("#room_list").load("<?php echo url("services/list")?>");
            $("#room_add").load("<?php echo url("services/add")?>");
        }
    });
</script>