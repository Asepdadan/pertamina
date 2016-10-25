<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="//pubnub.github.io/eon/v/eon/0.0.10/eon.js"></script>
		<link type="text/css" rel="stylesheet" href="//pubnub.github.io/eon/v/eon/0.0.10/eon.css"/>

	</head>
	<body>
		
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Title</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div class="container-fluid">
		

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				
				<div id="body-spline">
				
					
				</div>

				</div>
			</div>
	


		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				
				
				<div id="body-bar">
					
				</div>

			</div>
		</div>

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				
				
				<div id="body-gauge">
					
				</div>

			</div>
		</div>
	


	</div>
		
		<script>
			eon.chart({
			 channel: 'eon-chart',
			 limit: 20,
			 flow: true,
			 generate: {
			  bindto: '#body-spline'
			 }
			});	

			eon.chart({
			  channel: 'eon-chart',
			  generate: {
			    bindto: '#body-bar',
			    data: {
			      labels: true,
			      type: 'bar'
			    },
			    bar: {
			      width: {
			        ratio: 0.5
			      }
			    },
			    tooltip: {
			        show: false
			    }
			  }
			});


			eon.chart({
			  channel: 'eon-chart',
			  generate: {
			    bindto: '#body-gauge',
			    data: {
			      type: 'gauge',
			    },
			    gauge: {
			      min: 0,
			      max: 100
			    },
			    color: {
			      pattern: ['#FF0000', '#F6C600', '#60B044'],
			      threshold: {
			        values: [30, 60, 90]
			      }
			    }
			  }
			});



			
		</script>

		<script>
			setInterval(function(){

				PUBNUB.publish({
				 channel: 'eon-chart',
				 message: {"eon":
				 {"Me":3 * Math.random(),
				 "Nick":7 * Math.random(),
				 "Ritika":19 * Math.random(),
				 "Emily":37 * Math.random(),
				 "Sami":56 * Math.random()
				 }}

				});

			}, 1000);

		</script>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		
	</body>
</html>