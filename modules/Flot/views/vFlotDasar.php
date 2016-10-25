<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Flot Examples: Pie Charts</title>
	<link href="<?php echo base_url($murl.'views/css/examples.css') ?>" rel="stylesheet" type="text/css">
	<style type="text/css">

	.demo-container {
		position: relative;
		height: 400px;
	}

	#placeholder {
		/*width: 400px;*/
	}

	#menu {
		position: absolute;
		top: 20px;
		left: 470px;
		bottom: 20px;
		right: 20px;
		width: 200px;
	}

	#menu button {
		display: inline-block;
		width: 200px;
		padding: 3px 0 2px 0;
		margin-bottom: 4px;
		background: #eee;
		border: 1px solid #999;
		border-radius: 2px;
		font-size: 16px;
		-o-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
		-ms-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
		-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
		box-shadow: 0 1px 2px rgba(0,0,0,0.15);
		cursor: pointer;
	}

	</style>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../excanvas.min.js"></script><![endif]-->
	<script language="javascript" type="text/javascript" src="<?php echo base_url($murl.'views/js/jquery.js') ?>"></script>
	<script language="javascript" type="text/javascript" src="<?php echo base_url($murl.'views/js/jquery.flot.js') ?>"></script>
	<script language="javascript" type="text/javascript" src="<?php echo base_url($murl.'views/js/jquery.flot.pie.js') ?>"></script>
	<script type="text/javascript">

	$(function() {

		// Example Data

		//var data = [
		//	{ label: "Series1",  data: 10},
		//	{ label: "Series2",  data: 30},
		//	{ label: "Series3",  data: 90},
		//	{ label: "Series4",  data: 70},
		//	{ label: "Series5",  data: 80},
		//	{ label: "Series6",  data: 110}
		//];

//		var data = [
//			{ label: "Series1",  data: [[1,10]]},
//			{ label: "Series2",  data: [[1,30]]},
//			{ label: "Series3",  data: [[1,90]]},
//			{ label: "Series4",  data: [[1,70]]},
//			{ label: "Series5",  data: [[1,80]]},
//			{ label: "Series6",  data: [[1,0]]}
//		];

		var data = [
			{ label: "SD",  data: 50000},
			{ label: "SMP",  data: 25000},
			{ label: "SMA",  data: 20000},
			{ label: "UNIVERSITAS",  data: 10000},
		];
                
		var data2 = [
			{ label: "Layak",  data: 5000},
			{ label: "Tidak Layak",  data: 2500},
		];
                
		var data3 = [
			{ label: "D3",  data: 1000},
			{ label: "S1",  data: 500},
			{ label: "S2",  data: 200},
			{ label: "S3",  data: 50},
		];

		// Randomly Generated Data

//		var data = [],
//			series = Math.floor(Math.random() * 6) + 3;
//
//		for (var i = 0; i < series; i++) {
//			data[i] = {
//				label: "Series" + (i + 1),
//				data: Math.floor(Math.random() * 100) + 1
//			}
//		}

		var placeholder = $("#placeholder");
		var placeholder2 = $("#placeholder2");
		var placeholder3 = $("#placeholder3");

		$("#example-1").click(function() {

			placeholder.unbind();

			$("#description").text("Perbandingan Jenjang Pendidikan di Majalengka");

			$.plot(placeholder, data, {
				series: {
					pie: { 
						show: true,
						radius: 1,
						label: {
							show: true,
							radius: 3/4,
							formatter: labelFormatter,
							background: {
								opacity: 0.5
							}
						}
					}
				},
				legend: {
					show: false
				}
			});

			setCode([
				"$.plot('#placeholder', data, {",
				"    series: {",
				"        pie: {",
				"            show: true,",
				"            radius: 1,",
				"            label: {",
				"                show: true,",
				"                radius: 3/4,",
				"                formatter: labelFormatter,",
				"                background: {",
				"                    opacity: 0.5",
				"                }",
				"            }",
				"        }",
				"    },",
				"    legend: {",
				"        show: false",
				"    }",
				"});"
			]);
		});
                
		$("#example-2").click(function() {

			placeholder2.unbind();

			$("#description").text("Perbandingan Jenjang Pendidikan di Majalengka");

			$.plot(placeholder2, data2, {
				series: {
					pie: { 
						show: true,
						radius: 1,
						label: {
							show: true,
							radius: 3/4,
							formatter: labelFormatter,
							background: {
								opacity: 0.5
							}
						}
					}
				},
				legend: {
					show: false
				}
			});

			setCode([
				"$.plot('#placeholder2', data2, {",
				"    series: {",
				"        pie: {",
				"            show: true,",
				"            radius: 1,",
				"            label: {",
				"                show: true,",
				"                radius: 3/4,",
				"                formatter: labelFormatter,",
				"                background: {",
				"                    opacity: 0.5",
				"                }",
				"            }",
				"        }",
				"    },",
				"    legend: {",
				"        show: false",
				"    }",
				"});"
			]);
		});
                
		$("#example-3").click(function() {

			placeholder3.unbind();

			$("#description").text("Perbandingan Jenjang Pendidikan di Majalengka");

			$.plot(placeholder3, data3, {
				series: {
					pie: { 
						show: true,
						radius: 1,
						label: {
							show: true,
							radius: 3/4,
							formatter: labelFormatter,
							background: {
								opacity: 0.5
							}
						}
					}
				},
				legend: {
					show: false
				}
			});

			setCode([
				"$.plot('#placeholder3', data3, {",
				"    series: {",
				"        pie: {",
				"            show: true,",
				"            radius: 1,",
				"            label: {",
				"                show: true,",
				"                radius: 3/4,",
				"                formatter: labelFormatter,",
				"                background: {",
				"                    opacity: 0.5",
				"                }",
				"            }",
				"        }",
				"    },",
				"    legend: {",
				"        show: false",
				"    }",
				"});"
			]);
		});

		// Show the initial default chart

		$("#example-1").click();
		$("#example-2").click();
		$("#example-3").click();

	});

	// A custom label formatter used by several of the plots

	function labelFormatter(label, series) {
		return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
	}

	//

	function setCode(lines) {
		$("#code").text(lines.join("\n"));
	}

	</script>
</head>
<body>

	<div id="header">
		<h2>GRAFIK RESUME PENDIDIKAN MAJALENGKA</h2>
	</div>

	<div id="content">
		<h3 id="title"></h3>
		<div class="demo-container">
			<div id="placeholder" class="demo-placeholder"></div>
			<div id="menu">
				<button id="example-1">Jenjang Pendidikan</button>
                                <p>SD:50000</p>
                                <p>SMP:25000</p>
                                <p>SMA:20000</p>
                                <p>UNIVERSITAS:10000</p>
			</div>
		</div>
		<div class="demo-container">
			<div id="placeholder2" class="demo-placeholder"></div>
			<div id="menu">
				<button id="example-2">Kelayakan Fasilitas</button>
                                <p>Layak:5000</p>
                                <p>Tidak Layak:2500</p>
			</div>
		</div>
		<div class="demo-container">
			<div id="placeholder3" class="demo-placeholder"></div>
			<div id="menu">
				<button id="example-3">Tingkat Pendidikan Guru</button>
                                <p>D3:1000</p>
                                <p>S1:500</p>
                                <p>S2:200</p>
                                <p>S3:50</p>
			</div>
		</div>

		

	</div>

</body>
</html>
