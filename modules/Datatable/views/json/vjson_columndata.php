<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
	<title>DataTables example - Ajax data source (objects)</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($murl.'views/media/css/jquery.dataTables.css'); ?>">
	<script type="text/javascript" language="javascript" src="<?php echo base_url($murl.'views/media/js/jquery-1.11.1.min.js'); ?>"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url($murl.'views/media/js/jquery.dataTables.js'); ?>"></script>

        
	<script type="text/javascript" language="javascript" class="init">
	
    $( document ).ready( function( $ ) {
        $.ajax({
//                "url": "<?php echo base_url('Datatable/dataSampleDynamicColumn'); ?>",
                "url": "<?php echo base_url($murl.'views/data/column_and_data.txt'); ?>",
                "success": function(json) {
                    var tableHeaders;
                    $.each(json.columns, function(i, val){
                        tableHeaders += "<th>" + val + "</th>";
                    });
                     
                    $("#tableDiv").empty();
                    $("#tableDiv").append('<table id="displayTable" class="display" cellspacing="0" width="100%"><thead><tr>' + tableHeaders + '</tr></thead></table>');
                    //$("#tableDiv").find("table thead tr").append(tableHeaders);  
                     
                    $('#displayTable').dataTable(json);
                },
                "dataType": "json"
            });
    });

	</script>
</head>
<body class="dt-example">
	<div class="container">
            <h1>DATATABLE COLUMN DATA</h1>
            <h4>Kolom pada tabel ini di driven oleh json, sehingga fleksibel</h4>
		<section>
			
<div id="tableDiv"></div>
		
		</section>
	</div>
</body>
</html>