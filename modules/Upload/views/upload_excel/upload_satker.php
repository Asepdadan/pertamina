<?php
	/*
This script is use to upload any Excel file into database.
Here, you can browse your Excel file and upload it into 
your database.

Download Link: http://www.discussdesk.com/import-excel-file-data-in-mysql-database-using-PHP.htm

Website URL: http://www.discussdesk.com
*/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="This tutorial will learn how to import excel sheet data in mysql database using php. Here, first upload an excel sheet into your server and then click to import it into database. All column of excel sheet will store into your corrosponding database table."/>
<meta name="keywords" content="import excel file data in mysql, upload ecxel file in mysql, upload data, code to import excel data in mysql database, php, Mysql, Ajax, Jquery, Javascript, download, upload, upload excel file,mysql"/>
</head>
<body>
    <?php $ntv =  $_GET['kdsatker']; $provinsi = $_GET['provinsi']  ?>
    UPLOAD SATKER <?php echo $ntv.'&nbsp;&nbsp;&nbsp;'.$provinsi ?>
<?php
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/

define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "root"); // set database user
define ("DB_PASS",""); // set database password
define ("DB_NAME","bpiw_db"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

$databasetable = "csv";

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/
?>
<div style="border:1px dashed #333333; width:300px; margin:0 auto; padding:10px;">
    
	<form name="import" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />
    </form>

<?php
$kdsatker = preg_replace("/[^0-9]/", "",$ntv);
echo 'kdsatker ='.$kdsatker;
if(isset($_POST["submit"])){
    /************************ CODING UPLOAD *************************************************/
    set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
    include 'PHPExcel/IOFactory.php';

    // This is the file path to be uploaded.
    $inputFileName = $_FILES['file']['tmp_name']; 
    try {
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
    } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    }


    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
    $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
    
    
    
    $query1 = "delete from demo_satker where provinsi='".$provinsi."' and satker = '".$kdsatker."'";
    echo $query1;
    mysql_query($query1);
    
    for($i=13;$i<=$arrayCount;$i++){
    $pekerjaan = trim($allDataInSheet[$i]["C"]);
    $komponen = trim($allDataInSheet[$i]["D"]);
    $tahun = trim($allDataInSheet[$i]["E"]);
    $volume = trim($allDataInSheet[$i]["F"]);
    $satuan = trim($allDataInSheet[$i]["G"]);
    $alokasi = trim($allDataInSheet[$i]["H"]);
    

    
        if ($pekerjaan != ""){
            $query2 = "insert into demo_satker (provinsi,satker,pekerjaan,komponen,tahun,volume,satuan,alokasi) 
                values('".$provinsi."', '".$kdsatker."','".$pekerjaan."','".$komponen."','".$tahun."','".$volume."','".$satuan."','".$alokasi."');";
            $insertTable= mysql_query($query2);
             $msg = $query2.'Record has been added. <div style="Padding:20px 0 0 0;"></div>';
            
            }
            echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
        }
    


    }
?>
<body>
</html>