<div class="row" >
   <div class="col-md-12" id="button_list">
   <span class="btn-group" >
      <a class="btn btn-info btn-xs"><b><i class="fa fa-list-ol"></i>&nbsp; All Bookings</b></a>
      <a class="btn btn-danger btn-xs"><b><i class="fa fa-th-list"></i>&nbsp; Recent Bookings</b></a>
      <a class="btn btn-success btn-xs"><b><i class="fa fa-list"></i>&nbsp; Reserved Bookings</b></a>
      <a class="btn btn-warning btn-xs"><b><i class="fa fa-list-ul"></i>&nbsp; Expired Bookings</b></a>
   </span>
   </div>
</div>
   <div class="row" id="booking_list">
      @include('system.Booking.list')
   </div>
