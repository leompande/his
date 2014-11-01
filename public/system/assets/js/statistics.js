$(document).ready(function(){
//    Highcharts.theme = {
//        colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
//            '#FF9655', '#FFF263', '#6AF9C4'],
//        chart: {
//            backgroundColor: {
//                linearGradient: [0, 0, 500, 500],
//                stops: [
//                    [0, 'rgb(255, 255, 255)'],
//                    [1, 'rgb(240, 240, 255)']
//                ]
//            },
//        },
//        title: {
//            style: {
//                color: '#000',
//                font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
//            }
//        },
//        subtitle: {
//            style: {
//                color: '#666666',
//                font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
//            }
//        },
//
//        legend: {
//            itemStyle: {
//                font: '9pt Trebuchet MS, Verdana, sans-serif',
//                color: 'black'
//            },
//            itemHoverStyle:{
//                color: 'gray'
//            }
//        }
//    };
//
//// Apply the theme
//    Highcharts.setOptions(Highcharts.theme);
    //Highcharts.setOptions({
    //    chart: {
    //        backgroundColor: {
    //            linearGradient: [0, 0, 500, 500],
    //            stops: [
    //                [0, 'rgb(255, 255, 255)'],
    //                [1, 'rgb(240, 240, 255)']
    //            ]
    //        },
    //        borderWidth: 0,
    //        plotBackgroundColor: 'rgba(255, 255, 255, .9)',
    //        plotShadow: true,
    //        plotBorderWidth: 1
    //    }
    //});

    $('#main-chart').highcharts({

        chart: {
            type: 'column'
        },
        title: {
            text: 'Yearly  Statistics (Customer Arrival, Bookings and Reservations)'
        },
        xAxis: {
            categories: [
                'Jan', 'Feb', 'March',
                'April', 'May', 'June',
                'July', 'Aug', 'Sept',
                'Oct', 'Nov', 'Dec'
            ]
        },
        yAxis: {
            title: {
                text: 'Total '
            }
        },
        series: [
            {
            name: 'Customer Arrival',
            data: [
                1, 0, 4,
                1, 0, 4,
                1, 0, 4,
                1, 0, 4
            ]
        }, {
            name: 'Bookings',
            data: [
                11, 7, 3,
                5, 1, 3,
                9, 7, 3,
                3, 5, 3
            ]
        }, {
            name: 'Reservations',
            data: [
                5, 5, 6,
                5, 7, 1,
                5, 4, 12,
                5, 1, 8
            ]
        }
        ]
    });
});