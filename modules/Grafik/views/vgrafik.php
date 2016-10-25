<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<!-- content -->
<div class="container">
	
	<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Contoh Grafik Batang</h3>
	</div>
	<div class="panel-body">
		<div id="container1" style="width:100%; height:400px;"></div>
	</div>

	</div>
	<br>
		<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Contoh Grafik Batang</h3>
	</div>
	<div class="panel-body">
		<div id="container2" style="width:100%; height:400px;"></div>
	</div>

	</div>


</div>



<!-- end content -->

<!-- javascript dll -->

<!-- jquery google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- highchart -->
<script src="<?php echo base_url($murl.'highchart/js/highcharts.js') ?>"></script>
<script type="text/javascript" charset="utf-8" async defer>
// 	$(function () { 
//     var myChart = Highcharts.chart('container', {
//         chart: {
//             type: 'bar'
//         },
//         title: {
//             text: 'Fruit Consumption'
//         },
//         xAxis: {
//             categories: ['Apples', 'Bananas', 'Oranges']
//         },
//         yAxis: {
//             title: {
//                 text: 'Fruit eaten'
//             }
//         },
//         series: [{
//             name: 'Jane',
//             data: [1, 0, 4]
//         }, {
//             name: 'John',
//             data: [5, 7, 3]
//         }, {
//             name: 'asdan',
//             data: [5, 7, 3]
//         }]
//     });
// });
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("http://localhost/pertamina/grafik/getdata", function(json) {
        
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'container1',
                    type: 'line',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Grafik Line',
                    x: -20 //center
                },
                subtitle: {
                    text: '',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Site'
                    },
                    plotLines: [{
                        value: 1,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                series: json
            });
        });
    
    });
    
});


 $(document).ready(function(){
        $.getJSON("http://localhost/pertamina/grafik/getdata", function(json) {
        chart = new Highcharts.chart({

        chart: {
        renderTo: 'container2',
        type: 'column'
        },
        title: {
            text: 'Jumlah Phase'
        },
        subtitle: {
            text: 'SISTEM INFORMASI APARTEMEN PERTAMINA'
        },
        xAxis: {
            categories: [
                'TEKNIK SIPIL',
                'TEKNIK MESIN',
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            max : 25,
            title: {
                text: 'Nilai Tertinggi'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: json

        })

    });

    });




        </script>

</script>