<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CIOAP</h1>
        <table>
            <tr>
                <th><button>FEATURES</button></th>
                <th><button>FUNCTIONALITY</button></th>
            </tr>
        </table>
	<div id="body">
            <h4>FEATURE SECTION</h4>
            <ul>
                <li><a href="<?php echo base_url('index.php/Ajax'); ?>">Ajax</a></li>
                <li><a href="<?php echo base_url('Bootstrap'); ?>">Bootstrap</a></li>
                <li><a href="<?php echo base_url('Datatable'); ?>">Datatable</a></li>
                <li><a href="<?php echo base_url('index.php/Email'); ?>">Email</a></li>
                <li><a href="<?php echo base_url('index.php/Editor'); ?>">Editor</a></li>
                <li><a href="<?php echo base_url('index.php/Excel'); ?>">Excel</a></li>
                <li><a href="<?php echo base_url('Flot'); ?>">Flot</a></li>
                <li><a href="<?php echo base_url('index.php/Grocery'); ?>">Grocery</a></li>
                <li><a href="<?php echo base_url('index.php/Jquery'); ?>">Jquery</a></li>
                <li><a href="<?php echo base_url('Json'); ?>">Json</a></li>
                <li><a href="<?php echo base_url('Jssor'); ?>">Jssor</a></li>
                <li><a href="<?php echo base_url('Library'); ?>">Library</a></li>
                <li><a href="<?php echo base_url('MYSQLTechnique'); ?>">MYSQL Technique</a></li>
                <li><a href="<?php echo base_url('index.php/Parallax'); ?>">Parallax</a></li>
                <li><a href="<?php echo base_url('index.php/PDF'); ?>">PDF</a></li>
                <li><a href="<?php echo base_url('index.php/PHPTechnique'); ?>">PHPTechnique</a></li>
                <li><a href="<?php echo base_url('ReadBean'); ?>">Read Bean PHP</a></li>
                <li><a href="<?php echo base_url('index.php/SVG'); ?>">SVG</a></li>
                <li><a href="<?php echo base_url('Table'); ?>">Table</a></li>
                <li><a href="<?php echo base_url('index.php/Admin'); ?>">Template Admin</a></li>
                <li><a href="<?php echo base_url('Template_charity'); ?>">Template Charity</a></li>
                <li><a href="<?php echo base_url('Template_luxus'); ?>">Template Luxus</a></li>
                <li><a href="<?php echo base_url('index.php/Onepage'); ?>">Template Onepage</a></li>
                <li><a href="<?php echo base_url('Template_standard'); ?>">Template Standard</a></li>
                <li><a href="<?php echo base_url('Upload'); ?>">Upload</a></li>
            </ul>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>