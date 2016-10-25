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

<?php
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/

define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "root"); // set database user
define ("DB_PASS",""); // set database password
define ("DB_NAME","classicmodels"); // set database name

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
if(isset($_POST["submit"])){
    /************************ CODING UPLOAD *************************************************/
    include 'PHPExcel/IOFactory.php';

    // This is the file path to be uploaded.
    $inputFileName = $_FILES['file']['tmp_name']; 
    try {
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
    } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    }
    echo "HANDOKO =".pathinfo($inputFileName,PATHINFO_BASENAME);

    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
    $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet

    
    for($i=1;$i<=$arrayCount;$i++){
        $customerName = trim($allDataInSheet[$i]["A"]);
        $contactLastName = trim($allDataInSheet[$i]["B"]);
        $contactFirstName = trim($allDataInSheet[$i]["C"]);     
        $query = "insert into test (customerName, contactLastName, contactFirstName) 
                               values('".$customerName."','".$contactLastName."','".$contactFirstName."');";
        $insertTable= mysql_query($query);
        $msg = $query.'Record has been added. <div style="Padding:20px 0 0 0;"></div>';
    }
    echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
}
?>
<body>
</html>