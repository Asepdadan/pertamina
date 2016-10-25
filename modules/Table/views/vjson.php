<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM PEMROGRAMAN</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url($murl) ?>/views/theme/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url($murl) ?>/views/theme/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url($murl) ?>/views/theme/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url($murl) ?>/views/theme/dist/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url($murl) ?>/views/theme/plugins/datatables/dataTables.bootstrap.css"> 
    
    <link rel="stylesheet" href="<?php echo base_url($murl) ?>/views/theme/dist/css/skins/_all-skins.min.css"> 
    <link rel="stylesheet" href="<?php echo base_url($murl) ?>/views/datatables/css/dataTables.bootstrap.css"> 
    <script type="text/javascript" src="<?php echo base_url($murl) ?>/views/js/autoCurrency.js"></script>
    <script type="text/javascript" src="<?php echo base_url($murl) ?>/views/js/numberFormat.js"></script>
    
  </head> 
  <body>    
  <!-- Main content -->
  <section class="content">
          <!-- Title -->  
          
          <!-- /.row -->
           <div class="box"> 
                <div class="box-header"> 
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr style="background:yellow;"> 
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>customerNumber</th>
                                <th>customerName</th>
                                <th>contactLastName</th>
                                <th style="width:500px;">contactFirstName/contactFirstName/contactFirstName</th>
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
                                 <th>Edit</th>
                                <th>Delete</th>
                                <th>customerNumber</th>
                                <th>customerName</th>
                                <th>contactLastName</th>
                                <th style="width:500px;">contactFirstName/contactFirstName/contactFirstName</th>
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
           
  </section><!-- /.content -->

     
     
    
    <!-- jQuery 2.1.4 -->
    <script type="text/javascript" src="<?php echo base_url($murl) ?>/views/theme/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script type="text/javascript" src="<?php echo base_url($murl) ?>/views/theme/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script type="text/javascript" src="<?php echo base_url($murl) ?>/views/theme/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url($murl) ?>/views/theme/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script type="text/javascript" src="<?php echo base_url($murl) ?>/views/theme/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script type="text/javascript" src="<?php echo base_url($murl) ?>/views/theme/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script type="text/javascript" src="<?php echo base_url($murl) ?>/views/theme/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script type="text/javascript" src="<?php echo base_url($murl) ?>/views/theme/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
		var save_method; //for save method string
		var table;
		$(document).ready(function() {
//                  alert("handoko ="+"<?php echo site_url('Table/Data_json')?>");
		  table = $('#example1').DataTable({ 
                    "scrollX":true,
                    "scrollY":"300px", 

			"ajax": {
				"url": "<?php echo site_url('Table/Data_json')?>",
				"type": "POST"
			},
			"iDisplayLength": 100,

			//Set column definition initialisation properties.
			"columnDefs": [
			{ 
			  "targets": [ 0,1,2,3,4,5,6,7,8,9,10,11,12,13,14], 
			  "orderable": true, //set not orderable
			},
			],

		  });
		});
                
		function reload_table()
		{
		  table.ajax.reload(null,false); //reload datatable ajax 
		}
                
                function showModalDelete(id){
			$('#id').html(id);
			$('#modal_form').modal('show');
		}
		
		function deleteMe(id){
			window.location.assign("<?php echo base_url('Table/json_delete'); ?>/"+id);
		}
  
		
    </script>
	
	<!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Konfirmasi Hapus data Customer</h3>
      </div>
      <div class="modal-body form">
		Apakah anda yakin menghapus data dengan id = <span id="id"></span> ?
	  </div>
	  <div class="modal-footer">
		<button type="button" id="btnSave" onclick="deleteMe($('#id').html())" class="btn btn-primary">Hapus</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
	  </div>
	</div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
  </body>
</html>
