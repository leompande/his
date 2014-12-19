$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: 'chart',
        success:function(data){
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
                            parseInt(data.customerarrival.Jan), parseInt(data.customerarrival.Feb),
                            parseInt(data.customerarrival.March),parseInt(data.customerarrival.April),
                            parseInt(data.customerarrival.May),parseInt(data.customerarrival.June),
                            parseInt(data.customerarrival.July),parseInt(data.customerarrival.Aug),
                            parseInt(data.customerarrival.Sept),parseInt(data.customerarrival.Oct),
                            parseInt(data.customerarrival.Nov),parseInt(data.customerarrival.Dec)
                        ]
                    }, {
                        name: 'Bookings',
                        data: [
                            parseInt(data.bookings.Jan), parseInt(data.bookings.Feb),
                            parseInt(data.bookings.March),parseInt(data.bookings.April),
                            parseInt(data.bookings.May),parseInt(data.bookings.June),
                            parseInt(data.bookings.July),parseInt(data.bookings.Aug),
                            parseInt(data.bookings.Sept),parseInt(data.bookings.Oct),
                            parseInt(data.bookings.Nov),parseInt(data.bookings.Dec)
                        ]
                    }, {
                        name: 'Reservations',
                        data: [
                            parseInt(data.reservations.Jan), parseInt(data.reservations.Feb),
                            parseInt(data.reservations.March),parseInt(data.reservations.April),
                            parseInt(data.reservations.May),parseInt(data.reservations.June),
                            parseInt(data.reservations.July),parseInt(data.reservations.Aug),
                            parseInt(data.reservations.Sept),parseInt(data.reservations.Oct),
                            parseInt(data.reservations.Nov),parseInt(data.reservations.Dec)
                        ]
                    }
                ]
            });
        }
    });


});