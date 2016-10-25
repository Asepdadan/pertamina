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
        tableGenerator();
    });


    function tableGenerator(){
        var newTable = '<thead><tr>'; // start building a new table contents    
        // then call the data using .ajax()
//        alert("Url ="+"<?php echo base_url('Datatable/datasample'); ?>");
        $.ajax( {
            url: "<?php echo base_url('Datatable/datasample'); ?>",
            data: {}, // data, if any, to send to server
            success: function(data) {
                // below use the first row to grab all the column names and set them in <th>
                                var json = JSON.parse(data);
                                    alert("xyz ="+json);
                $.each(json, function(key, value) {
                    newTable += "<th>" + key + "</th>";
                    alert(value);
                });
                newTable += "</tr></thead><tbody>";                  

                // then load the data into the table
                $.each(data, function(key, row) {
                     newTable += "<tr>";
                      $.each(row, function(key, fieldValue) {
                           newTable += "<td>" + fieldValue + "</td>";
                      });
                     newTable += "</tr>";
                });
               newTable += '<tbody>';

               $('#myDatatable').html(newTable); // replace the guts of the datatable's table placeholder with the stuff we just created. 
            }
         });
         
         // Now that our table has been created, Datatables-ize it
        $('#myDatatable').dataTable(); 
    }
 
    </script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Ajax data source (objects)</span></h1>
			
			<table id="myDatatable" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Name1</th>
						<th>Position</th>
						<th>Office</th>
						<th>Extn.</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Name2</th>
						<th>Position</th>
						<th>Office</th>
						<th>Extn.</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</tfoot>
			</table>
		
		</section>
	</div>
</body>
</html>