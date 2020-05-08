var beforeUpdate;
var afterUpdate;

$(document).ready(function() {
    // Make Chart
    var ticksStyle = {
        fontColor: '#495057',
        fontStyle: 'bold'
    }
    var mode = 'index'
    var intersect = true

    var mode = 'index'
    var intersect = true

    beforeUpdate = document.getElementById("custom-chart").getContext("2d");
    // Make Chart after Update
    afterUpdate = new Chart(beforeUpdate, {
        data: {
            labels: ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
            datasets: [{
                    type: 'line',
                    data: [100, 120, 170, 167, 180, 177, 160],
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    pointBorderColor: '#007bff',
                    pointBackgroundColor: '#007bff',
                    fill: false
                        // pointHoverBackgroundColor: '#007bff',
                        // pointHoverBorderColor    : '#007bff'
                },
                {
                    type: 'line',
                    data: [60, 80, 70, 67, 80, 77, 100],
                    backgroundColor: 'tansparent',
                    borderColor: '#ced4da',
                    pointBorderColor: '#ced4da',
                    pointBackgroundColor: '#ced4da',
                    fill: false
                        // pointHoverBackgroundColor: '#ced4da',
                        // pointHoverBorderColor    : '#ced4da'
                }
            ]
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                mode: mode,
                intersect: intersect
            },
            hover: {
                mode: mode,
                intersect: intersect
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    // display: false,
                    gridLines: {
                        display: true,
                        lineWidth: '4px',
                        color: 'rgba(0, 0, 0, .2)',
                        zeroLineColor: 'transparent'
                    },
                    ticks: $.extend({
                        beginAtZero: true,
                        suggestedMax: 200
                    }, ticksStyle)
                }],
                xAxes: [{
                    display: true,
                    gridLines: {
                        display: false
                    },
                    ticks: ticksStyle
                }]
            }
        }
    });
    // End Make Chart

    // Daterange
    $('.daterange').daterangepicker({
            ranges: {
                'Today': { 'date': [moment(), moment()] },
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            showCustomRangeLabel: false
        }, function(start, end) {
            // window.alert('You chose: ' + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        })
        // End Daterange
})

// Dynamically change chart
$('.daterange').on('apply.daterangepicker', function(ev, picker) {
    // console.log(picker['chosenLabel']);
    switch (picker['chosenLabel']) {
        case 'Today':
            afterUpdate.data.labels = ['18th', '20th', '22nd', '24th', '26th', '28th', '39th'];
            afterUpdate.data.datasets[0].data = [1, 2, 3, 4, 5, 6, 4];
            afterUpdate.data.datasets[1].data = [9, 3, 2, 4, 1, 5, 6];
            afterUpdate.update();
            break;
        case 'Yesterday':
            afterUpdate.data.labels = ['18th', '20th', '22nd', '24th', '26th', '28th', '39th'];
            afterUpdate.data.datasets[0].data = [82, 13, 23, 43, 542, 61, 4];
            afterUpdate.data.datasets[1].data = [723, 223, 419, 2, 1, 5, 623];
            afterUpdate.update();
            break;
        case 'Last 7 Days':
            afterUpdate.data.labels = ['18th', '20th', '22nd', '24th', '26th', '28th', '39th'];
            afterUpdate.data.datasets[0].data = [21, 2, 31, 43, 5, 6, 4];
            afterUpdate.data.datasets[1].data = [73, 23, 19, 2, 1, 5, 63];
            afterUpdate.update();
            break;
        case 'Last 30 Days':
            afterUpdate.data.labels = ['18th', '20th', '22nd', '24th', '26th', '28th', '39th'];
            afterUpdate.data.datasets[0].data = [73, 23, 19, 2, 1, 5, 63];
            afterUpdate.data.datasets[1].data = [21, 2, 31, 43, 5, 6, 4];
            afterUpdate.update();
            break;
        case 'This Month':
            afterUpdate.data.labels = ['18th', '20th', '22nd', '24th', '26th', '28th', '39th'];
            afterUpdate.data.datasets[0].data = [723, 223, 419, 2, 1, 5, 623];
            afterUpdate.data.datasets[1].data = [21, 2, 31, 43, 5, 6, 4];
            afterUpdate.update();
            break;
        case 'Last Month':
            afterUpdate.data.labels = ['18th', '20th', '22nd', '24th', '26th', '28th', '39th'];
            afterUpdate.data.datasets[0].data = [1, 2, 3, 4, 5, 6, 4];
            afterUpdate.data.datasets[1].data = [21, 2, 31, 43, 5, 6, 4];
            afterUpdate.update();
            break;
    }
})