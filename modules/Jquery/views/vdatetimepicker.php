<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="<?php echo base_url($murl.'views/js/jquery-ui-1.11.4/jquery-ui.css') ?>">
  <script type="text/javascript" src="<?php echo base_url($murl.'views/js/jquery-2.2.4.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url($murl.'views/js/jquery-ui-1.11.4/jquery-ui.js') ?>"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>
<body>
 
<p>Masukan Tanggal: <input type="text" id="datepicker"></p>
 
 
</body>
</html>