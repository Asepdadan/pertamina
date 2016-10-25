<html>
<head>
	<title>Demo 1 : Convert All Textareas</title>
</head>
<body>

<div id="menu"></div>

<div id="intro">
By calling the nicEditors.allTextareas() function the below example replaces all 3 textareas on the page with nicEditors. NicEditors will match the size of the editor window with the size of the textarea it replaced.
</div>
<br />

<div id="sample">
<script type="text/javascript" src="<?php echo base_url($murl.'views/js/nicEdit.js'); ?>"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

<h4>First Textarea</h4>
<form action="test.php" method="post">
<textarea name="area1" cols="40"></textarea>
<input type="submit" value="SIMPAN"/>
</form>


</div>

</body>
</html>