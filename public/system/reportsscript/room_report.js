/**
 * Created by leonard on 11/22/14.
 */
window.report_type = "";
window.period_type = "";
window.yearly_period = "";
window.monthly_period = "";
window.weekly_period = "";
window.yearly_period = "";
window.view_by_room = "";
window.view_by_category = "";
window.room_category = "";
window.room_selected = "";

$(document).ready(function(){


    // hiding select box that comes on certain decision
    $(".monthly_period_container").hide();
    $(".weekly_period_container").hide();
    $(".category_selection_parent").hide();
    $(".room_selection_parent").hide();



    $(".single_select").multiselect(
        {   multiple: false,
            header: "Select an option",
            noneSelectedText: "Select an Option",
            selectedList: 1,
            click: function(event, ui){
                var selected_parent_id = $(event.target).attr("id");
                if(ui.checked){
                    if(selected_parent_id =="report_type"){
                        window.report_type = ui.value;
                    }

                    if(selected_parent_id =="period_type"){
                            window.period_type = ui.value;
                        if(window.period_type=="weekly"){
                            $(".weekly_period_container").show();
                            $(".monthly_period_container").show();

                            // make year option to be single selected
                            $("#yearly_period").multiselect(
                                {   multiple: false,
                                    header: "Select an option",
                                    noneSelectedText: "Select an Option",
                                    selectedList: 1,
                                    click: function(event, ui){
                                        if(ui.checked){
                                            window.weekly_period = ui.value;
                                        }
                                    }

                                }).multiselectfilter();
                        }

                        if(window.period_type=="monthly"){

                            $(".monthly_period_container").show();
                            $(".weekly_period_container").hide();
                            // make year option to be single selected
                            $("#yearly_period").multiselect(
                                {   multiple: false,
                                    header: "Select an option",
                                    noneSelectedText: "Select an Option",
                                    selectedList: 1,
                                    click: function(event, ui){
                                        if(ui.checked){
                                            console.log(ui);
                                        }
                                    }

                                }).multiselectfilter();
                        }

                        if(window.period_type=="yearly"){
                            $(".weekly_period_container").hide();
                            $(".monthly_period_container").hide();

                            $("#yearly_period").multiselect(
                                {   multiple: true,
                                    header: "Select an option",
                                    noneSelectedText: "Select an Option",
                                    selectedList: 1,
                                    click: function(event, ui){
                                        if(ui.checked){
                                            console.log(ui);
                                        }
                                    }

                                }).multiselectfilter();
                        }
                    }
                }
            }

        }).multiselectfilter();


    $("#view_by_room").click(function(){
        if(!$(this).attr("checked")){
            $(".room_selection_parent").hide();
        }else{

            $("#view_by_category").attr('checked', false);
            $(".category_selection_parent").hide();
            $(".room_selection_parent").show();
        }
    });

    $("#view_by_category").click(function(){

        if(!$(this).attr("checked")){

            $(".category_selection_parent").hide();
        }else{

            $("#view_by_room").attr('checked', false);
            $(".category_selection_parent").show();
            $(".room_selection_parent").hide();
        }

    });

    $(".select_category").multiselect(
        {
            click: function(event, ui){
                if(ui.checked){
                    console.log(ui);
                }
            }

        }).multiselectfilter();

    // produce reports
    $("div#chart_type_menu a#table").on("click",function(){
        window.report_type = "";
        window.period_type = "";
        window.yearly_period = "";
        window.monthly_period = "";
        window.weekly_period = "";
        window.yearly_period = "";
        window.view_by_room = "";
        window.view_by_category = "";
        window.room_category = "";
        window.room_selected = "";
        alert(window.report_type);
    });

});