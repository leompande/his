
{{HTML::script("public/system/reportsscript/reservation_report.js")}}

</br>
<div class="col-md-12">
    <div class="col-md-2" style="margin-right:20px;">
      <div class="col-md-10">
      <label for="report_type">Report Type</label>
      </div>
      <div class="col-md-10">
       <select  name='standard' id="report_type" class='select_category'>
            <option value='1'>Booked Rooms</option>
            <option value='1'>Number Of Customers</option>
       </select>
      </div>

      </div>
        &nbsp;&nbsp;
        <div class="col-md-2" style="margin-left:20px;margin-right:20px;">
        <div class="col-md-10">

        <label for="periodtype">Period</label>

        </div>
        <div class="col-md-10">
         <select  name='standard' id="periodtype" class='select_category'>
              <option value='2'>Weekly</option>
              <option value='2'>Monthly</option>
              <option value='3'>Yearly</option>
         </select>
        </div>

        </div>&nbsp;&nbsp;
    <div class="col-md-2" style="margin-left:20px;margin-right:20px;">
    <div class="col-md-10">
    <label for="from">Nationality</label>
    </div>
    <div class="col-md-10">
     <select  name='standard' id="" class='select_category'>
          <option value='2'>Local</option>
          <option value='3'>International</option>
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
          <option value='2'>2013</option>
          <option value='3'>2014</option>
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
              <option value='2'>January</option>
              <option value='3'>February</option>
              <option value='3'>March</option>
              <option value='3'>April</option>
              <option value='3'>May</option>
              <option value='3'>June</option>
              <option value='3'>July</option>
              <option value='3'>August</option>
              <option value='3'>October</option>
              <option value='3'>September</option>
              <option value='3'>November</option>
              <option value='3'>December</option>
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
              <option value='2'>First Week</option>
              <option value='3'>Second Week</option>
              <option value='3'>Third Week</option>
              <option value='3'>Fourth Week</option>
         </select>
        </div>

        </div>


     &nbsp;&nbsp;
    <div class="col-md-3" style="margin-left:20px;margin-right:20px;">
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
     <select  name='standard' id="category_selection" class='select_category'>
          <option value='2'>First Week</option>
          <option value='3'>Second Week</option>
          <option value='3'>Third Week</option>
          <option value='3'>Fourth Week</option>
     </select>
     </div>
     <div class="room_selection_parent">
     <select  name='standard' id="room_selection" class='select_category'>
          <option value='2'>First Week</option>
          <option value='3'>Second Week</option>
          <option value='3'>Third Week</option>
          <option value='3'>Fourth Week</option>
     </select>
    </div>
    </div>

    </div>


</div>
<script>
  $(function(){
       $(".select_category").multiselect().multiselectfilter();
  });
</script>