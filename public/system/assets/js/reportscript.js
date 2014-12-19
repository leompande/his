/**
 * Created by leonard on 11/9/14.
 */
$(document).ready(function(){


   $("div#report_menus a#room_report").on("click",function(){
       activeClass($(this));
       $("div#options_selection_menu").load("report/roomview");
   });


    $("div#report_menus a#reservation_report").on("click",function(){
        activeClass($(this));
        $("div#options_selection_menu").load("report/reservationview");
   });
   $("div#report_menus a#general_report").on("click",function(){
        activeClass($(this));
        $("div#options_selection_menu").load("report/generalview");
   });

    $("div#report_menus a#room_report").trigger("click");
});
function activeClass(data){
    $("div#report_menus a").each(function(){
        $(this).removeClass("active");
    });
    data.addClass("active");
}