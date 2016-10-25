<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {

	public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index(){
	 $data['murl'] = $this->murl;
	 $this->load->view('vgrafik',$data);
	}

	public function getdata()
	{
		
	$sth = $this->db->query("select phase from tbl_kwh")->result_array();
	$rows = array();
	$rows['nama'] = 'phase';
	foreach ($sth as $r) {
		# code...
		$rows['data'][] = $r['phase'];
	}

	$sth = $this->db->query("select jumlah from tbl_kwh")->result_array();
	$rows1 = array();
	$rows1['nama'] = 'jumlah';

	foreach ($sth as $rr) {
		# code...
		$rows1['data'][] = $rr['jumlah'];
	}

	$result = array();
	array_push($result,$rows);
	array_push($result,$rows1);

	print json_encode($result, JSON_NUMERIC_CHECK);

	}

	public function get_google(){
		$sth = $this->db->query("select * from tbl_kwh")->result_array();
		// print_r($sth);
		// echo "<br>";
		// printf("==json==<br>");
		// print json_encode($sth);

		// array cols

		$table = array();
		$table['cols'] = array(

	    // Labels for your chart, these represent the column titles
	    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
	    array('label' => 'Weekly Task', 'type' => 'string'),
	    array('label' => 'Percentage', 'type' => 'number')
		);

		$rows = array();
		foreach ($sth as $r) {
			# code...
			$temp = array();
		    // the following line will be used to slice the Pie chart
		    $temp[] = array('v' => (string) $r['phase']); 

		    // Values of each slice
		    $temp[] = array('v' => (int) $r['jumlah']); 
		    $rows[] = array('c' => $temp);

		}
		   
		

		$table['rows'] = $rows;
		$jsonTable = json_encode($table);
		
		print $jsonTable;

		//$data = json_encode($arr);


 $bulan = array('januari'=> 2,'februari' => 4,'maret'=> 6,'april'=>8,'mei'=>1,'juni'=>1);

 foreach ($bulan as $row) {
 	# code...
 	echo $row['januari'];
 }



// 		//echo "{\"rows\":" . $data . "}";

// 		$arra = '{
//   "cols": [
//         {"id":"","label":"Topping","pattern":"","type":"string"},
//         {"id":"","label":"Slices","pattern":"","type":"number"}
//       ],
//   "rows": [
//         {"c":[{"v":"Mushrooms","f":null},{"v":3,"f":null}]},
//         {"c":[{"v":"Onions","f":null},{"v":1,"f":null}]},
//         {"c":[{"v":"Olives","f":null},{"v":1,"f":null}]},
//         {"c":[{"v":"Zucchini","f":null},{"v":1,"f":null}]},
//         {"c":[{"v":"Pepperoni","f":null},{"v":2,"f":null}]}
//       ]
// }';
// echo "<br>";
// $te = json_decode($arra,true);
//print_r($te);
	}

	public function google(){
	 $data['murl'] = $this->murl;
	 $this->load->view('vgooglechart',$data);

	}

	public function show_ssh(){
		$this->load->view('vssh');

	}

	public function ssh(){
		 include("Net/SSH2.php");

		 date_default_timezone_set("Asia/Bangkok");

		 $ssh = new Net_SSH2('192.168.1.92');

	    if (!$ssh->login('root', 'Adminsmc201692')) {
	        echo "Login Gagal";
	    }else{
	     echo "Login Sukses\n";
	     echo "<br>";
	     echo $ssh->exec('ls');
	     $ifconfig = $ssh->exec('hostname -i');
	     print_r($ifconfig);
	    	echo "<br>";

	    exec("ping 192.168.1.93",$ping);
	    if (substr($ping[2],0,5) == "Reply"){

	    	$aksi = "ping ip reply success ".date('Y-m-d h:i:s');

	    	$filename = "log_".date("Y-m-d"); //nama log: log_2011-02
 
			// Opening the text file and writing the visitor’s data
			$fp = fopen($filename, 'a');

			fwrite($fp, $aksi."\r\n");

			fclose($fp);

	    }else{
	    	$aksi = "ping ip rto request time out".date('Y-m-d h:i:s');
	    	
	    	$filename = "log_".date("Y-m-d"); //nama log: log_2011-02
 
			// Opening the text file and writing the visitor’s data
			$fp = fopen($filename, 'a');

			fwrite($fp, $aksi."\r\n");

			fclose($fp);
	    }


	    $out = shell_exec("ssh root@192.168.1.92");
	    print_r($out);

	    }

	}

	public function read_file(){
		$filename = "log_".date("Y-m-d"); //nama log: log_2011-02
		$fp = fopen('../'.$filename,'a');

		fread($filename."\r\n");

		fclose($fp);
	}


}