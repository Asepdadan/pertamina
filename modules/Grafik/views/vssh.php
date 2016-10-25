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
		<style>
		
		@keyframes blink {
		    0% { opacity: 1; }
		    25% { opacity: 0; }
		    50% { opacity: 0; }
		    100% { opacity: 1; }
		}
		@-webkit-keyframes blink {
		    0% { opacity: 1; }
		    25% { opacity: 0; }
		    50% { opacity: 0; }
		    100% { opacity: 1; }
		}
		@-ms-keyframes blink {
		    0% { opacity: 1; }
		    25% { opacity: 0; }
		    50% { opacity: 0; }
		    100% { opacity: 1; }
		}
		@-moz-keyframes blink {
		    0% { opacity: 1; }
		    25% { opacity: 0; }
		    50% { opacity: 0; }
		    100% { opacity: 1; }
		}
		.cmd .cursor.blink {
		    background: #0c0;
		    -webkit-animation: blink 1s infinite linear;
		       -moz-animation: blink 1s infinite linear;
		        -ms-animation: blink 1s infinite linear;
		            animation: blink 1s linear infinite;
		    -webkit-box-shadow: 0 0 5px rgba(0,100,0,50);
		       -moz-box-shadow: 0 0 5px rgba(0,100,0,50);
		        -ms-box-shadow: 0 0 5px rgba(0,100,0,50);
		         -o-box-shadow: 0 0 5px rgba(0,100,0,50);
		            box-shadow: 0 0 5px rgba(0,100,0,50);
		}
			
		</style>
	</head>
	<body>
		
		<div class="container-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					<div id="term_demo">
		</div>
				</div>
			</div>
		</div>

		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="<?php echo base_url()?>terminal/js/jquery.terminal-0.11.11.min.js"></script>

		<script src="<?php echo base_url()?>terminal/js/jquery.mousewheel-min.js"></script>

		<link href="<?php echo base_url()?>terminal/css/jquery.terminal-0.11.11.min.css" rel="stylesheet"/>

		<script>
			
				jQuery(function($, undefined) {
				    $('#term_demo').terminal(function(command, term) {

				        if (command !== '') {
				            try {

				                var result = window.eval(command);
				                if (result !== undefined) {
				                    term.echo(new String(result));
				                }
				            } catch(e) {
				                term.error(new String(e));
				            }
				        } if(command == 'ls'){
				        	term.echo('ajip');
				        }else {
				           term.echo('');
				        }
				    }, {
				        greetings: 'Javascript Interpreter',
				        name: 'js_demo',
				        height: 200,
				        prompt: '>'
				    });
				});
		</script>
	</body>
</html>