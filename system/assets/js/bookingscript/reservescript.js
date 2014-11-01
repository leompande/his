/**
 * Created by leonard on 10/30/14.
 */
$(document).ready(function(){
    var reservation_tracker = 0;
    $("ul#tab_menu_table li a").on("click",function(){
        var tab_id = $(this).attr("id").split("_");
        var SelectedTabDiv = $("div#"+tab_id[1]);
        var chosenTable = SelectedTabDiv.find("table#table_"+tab_id[1]);
        chosenTable.find("tbody tr").each(function(){
            $(this).find("td:last input").on("click",function(){
                if(!$(this).prop("checked")){
                    $(this).next().remove();
                }else{
                    $(this).next().remove();
                    $(this).parent("td").append("<div class='btn-group'><a class='btn btn-xs btn-warning' id='proceed_"+$(this).attr('id').split('_')+"' title='proceed reserving'><i class='fa fa-plus'></i></a><a class='btn btn-xs btn-danger' id='cancel_"+$(this).attr('id').split('_')+"' title='cancel reserving'><i class='fa fa-times'></i></a></div>")
                    chosenTable.find("tbody tr").each(function(){
                        $(this).find("td:last div a").each(function(){
                            $(this).on("click",function(){
                                if($(this).attr("id").split("_")[0]==="proceed"){
                                    var lastTd = $(this).parent("div").parent("td");
                                    $(this).parent("div").parent("td").append("<span class='progess' style='color:green;'><i class='fa fa-spin fa-spinner' ></i></span>");
                                    $(this).parent("div.btn-group").remove();

                                    $.ajax({
                                        type: "POST",
                                        url: 'bookings/addreserve',
                                        data: "&data="+$(this).attr("id").split("_")[1],
                                        success: function(data){
                                            lastTd.find("input").prop("checked");
                                            lastTd.find("input").attr('disabled',true);
                                            lastTd.find("span").remove();

                                        }
                                    });

                                }

                                if($(this).attr("id").split("_")[0]==="cancel"){
                                    $(this).parent("div.btn-group").remove();
                                    $(this).parent("div.btn-group").previous().attr('checked','checked');
                                }
                            });
                        });
                    })
                }
            });
        });

    });
});
