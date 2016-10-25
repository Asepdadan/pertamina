<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
	<title>DataTables example - Ajax data source (objects)</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($murl.'views/media/css/jquery.dataTables.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($murl.'views/resources/syntax/shCore.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($murl.'views/resources/demo.css'); ?>">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url($murl.'views/media/js/jquery.dataTables.js'); ?>">
	</script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url($murl.'views/resources/syntax/shCore.js'); ?>">
	</script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url($murl.'views/resources/demo.js'); ?>">
	</script>
	<script type="text/javascript" language="javascript" class="init">
	
$(document).ready(function() {
    var dataObject = eval('[{"COLUMNS":[{ "title": "NAME1"}, { "title": "COUNTY"}],"DATA":[["John Doe","Fresno"],["Billy","Fresno"],["Tom","Kern"],["King Smith","Kings"]]}]');
    var columns = [];
    $('#example').dataTable({
        "data": dataObject[0].DATA,
        "columns": dataObject[0].COLUMNS
    });
} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Ajax data source (objects)</span></h1>
			
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
</table>
		
		</section>
	</div>
</body>
</html>