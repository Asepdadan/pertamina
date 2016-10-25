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
	
        $(document).ready(function() {
		  table = $('#example1').DataTable({ 
                  "scrollX":true,
                  "scrollY":"300px", 
			
			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			
			// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "<?php echo site_url('Datatable/complete_json')?>",
				"type": "POST"
			},
			"iDisplayLength": 100,

			//Set column definition initialisation properties.
			"columnDefs": [
			{ 
			  "orderable": false, //set not orderable
			},
			],

		  });
        });

	</script>
</head>
<body class="dt-example">
	<div class="container">
            <h1>DATATABLE COMPLETE FUNCTION</h1>
            <h4>Kolom pada tabel ini di driven oleh json, sehingga fleksibel</h4>
            <div class="box"> 
                <div class="box-header"> 
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr style="background:yellow;"> 
                                <th>CustomerNumber</th>
                                <th>CustomerName</th>
                                <th>contactLastName</th>
                                <th>contactFirstName</th>
                                <th>phone</th>
                                <th>addressLine1</th>
                                <th>addressLine2</th>
                                <th>city</th>
                                <th>state</th>
                                <th>postalCode</th>
                                <th>country</th>
                                <th>salesRepEmployeeNumber</th>
                                <th>creditLimit</th>
                            </tr>
                        </thead>
                        <tbody> 
                        </tbody>
                        <tfoot>
                            <tr style="background:yellow;"> 
                                <th>CustomerNumber</th>
                                <th>CustomerName</th>
                                <th>contactLastName</th>
                                <th>contactFirstName</th>
                                <th>phone</th>
                                <th>addressLine1</th>
                                <th>addressLine2</th>
                                <th>city</th>
                                <th>state</th>
                                <th>postalCode</th>
                                <th>country</th>
                                <th>salesRepEmployeeNumber</th>
                                <th>creditLimit</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
	</div>
</body>
</html>