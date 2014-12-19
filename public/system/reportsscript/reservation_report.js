/**
 * Created by leonard on 11/24/14.
 */

$(document).ready(function(){


    // hiding select box that comes on certain decision
    $(".monthly_period_container").hide();
    $(".weekly_period_container").hide();
    $(".category_selection_parent").hide();
    $(".room_selection_parent").hide();


    $(".select_category").multiselect(
        {
            click: function(event, ui){

            }

        }).multiselectfilter();

});