
{{HTML::script("public/system/reportsscript/room_report.js")}}

</br>
<div class="col-md-12">
    <div class="col-md-2" style="margin-right:20px;">
    <div class="col-md-10">
    <label for="report_type">Report Type</label>
    </div>
    <div class="col-md-10">
     <select  name='standard' id="report_type" class='single_select'>
          <option value='customers' text="abd">Number Of Customers</option>
          <option value='income'>Income Generated</option>
     </select>
    </div>

    </div>
    &nbsp;&nbsp;
    <div class="col-md-2" style="margin-left:20px;margin-right:20px;">
    <div class="col-md-10">

    <label for="periodtype">Period</label>

    </div>
    <div class="col-md-10">
     <select  name='standard' id="period_type" class='single_select'>
          <option value='weekly'>Weekly</option>
          <option value='monthly'>Monthly</option>
          <option value='yearly'>Yearly</option>
     </select>
    </div>

    </div>
     &nbsp;&nbsp;
    <div class="col-md-2" style="margin-left:20px;margin-right:20px;">
    <div class="col-md-10">

    <label for="yearly_period">Year</label>

    </div>
    <div class="col-md-10">
     <select  name='standard' id="yearly_period" class='select_category'>
          <option value=''>2013</option>
          <option value=''>2014</option>
     </select>
    </div>

    </div>
         &nbsp;&nbsp;
    <div class="col-md-2 monthly_period_container" id="monthly_period_container" style="margin-left:20px;margin-right:20px;">
    <div class="col-md-10">

    <label for="monthly_period">Months</label>

    </div>
    <div class="col-md-10">
     <select  name='standard' id="monthly_period" class='select_category'>
          <option value='jan'>January</option>
          <option value='feb'>February</option>
          <option value='march'>March</option>
          <option value='apri'>April</option>
          <option value='may'>May</option>
          <option value='jun'>June</option>
          <option value='jul'>July</option>
          <option value='aug'>August</option>
          <option value='oct'>October</option>
          <option value='sept'>September</option>
          <option value='nov'>November</option>
          <option value='dec'>December</option>
     </select>
    </div>

    </div>
        &nbsp;&nbsp;
    <div class="col-md-2 weekly_period_container" style="margin-left:20px;margin-right:20px;">
    <div class="col-md-10">

    <label for="weekly_period">Week</label>

    </div>
    <div class="col-md-10">
     <select  name='standard' id="weekly_period" class='select_category'>
          <option value='first_week'>First Week</option>
          <option value='second_week'>Second Week</option>
          <option value='third_week'>Third Week</option>
          <option value='fourth_week'>Fourth Week</option>
     </select>
    </div>

    </div>

     &nbsp;&nbsp;
    <div class="col-md-4" style="margin-left:20px;margin-right:20px;">
    <div class="col-md-10">

   <div class="col-md-5">
   <label for="view_by_room">Rooms</label>
   <input type="checkbox" class="checkbox" id="view_by_room" />
   </div>&nbsp;
   <div class="col-md-5">
<label for="view_by_category">Category</label>
   <input type="checkbox" class="checkbox" id="view_by_category" />
   </div>

    </div>
    <div class="col-md-10">
    <div class="category_selection_parent">
     <select  name='standard' id="room_category" class='select_category'>
     @foreach(RoomCategory::all() as $category)
          <option value='{{ $category->id }}'>{{ $category->category_name }}</option>
     @endforeach
     </select>
     </div>
     <div class="room_selection_parent">
     <select  name='standard' id="room_selection" class='select_category'>
          @foreach(Room::all() as $room)
            <option value='{{ $room->id }}'>{{ $room->room_number }}</option>
          @endforeach
     </select>
    </div>
    </div>

    </div>




</div>
<script>
$(function() {
   $(".datepicker1").datepicker({
       //normal setup parameters here
       onSelect: function(date) {

                 var           minDateObject= new Date($(".datepicker1").val());//compose the date you want to set

             $( ".datepicker2" ).datepicker( "option", "minDate",minDateObject );
       }
      });

      $(".datepicker2").datepicker({
             //normal setup parameters here
             onSelect: function(date) {

                       var   minDateObject= new Date($(".datepicker2").val());//compose the date you want to set

                   $( ".datepicker1" ).datepicker( "option", "maxDate",minDateObject );
             }
      });

  });
</script>