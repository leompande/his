<div class="row">
    <div class="col-md-12">
        <form role="form" id="client_form">
            {{--<div class="form-group">--}}
                {{--<label for="client">Client</label>--}}
                {{--<select class="form-control" name="client" id="client" ></select><a class="btn btn-mini btn-primary">add client</a>--}}

            {{--</div>--}}
            <div class="form-group">
                <label for="booking">Booking</label>
                <select class="form-control" name="booking" id="booking" >
                <option disabled selected>-- select booking to reserve --</option>
                @foreach(Booking::all() as $booking )
                    @if($booking->id)

                    @endif
                <option>{{ $booking->client_name }} -- {{ $booking->start_date }}</option>
                @endforeach
                </select>

            </div>

            <button type="submit" class="btn btn-default">Register</button><div class="output"></div>
        </form>
    </div>
</div>

<script>
   $(document).ready(function(){
   //hide country
       $("#country").parent().hide();


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