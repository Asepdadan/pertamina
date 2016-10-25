<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="<?php echo base_url($murl.'views/js/tinymce/tinymce.min.js'); ?>"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
    <form method="post" action="<?php echo base_url('index.php/Editor/TinyMCEAction'); ?>">
<textarea name="mytext">Easy (and free!) You should check out our premium features.</textarea>
<input type="submit" value="simpan"/>
</form>
</body>
</html>