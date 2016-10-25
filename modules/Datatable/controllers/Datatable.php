<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatable extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index()
	{
            $data['murl'] = $this->murl;
            $this->load->view('vmain',$data);
	}
        
        public function dataSample(){
            $sample = array();
            
            $temp = array(
                "nama" => "jono",
                "umur" => "33"
            );
            array_push($sample, $temp);
            
            $temp = array(
                "nama" => "burhan",
                "umur" => "17"
            );
            array_push($sample, $temp);
            
            echo json_encode($sample);
            
        }
        
        
        public function dataSampleDynamicColumn(){
            $str = "";
            $column = "\"columns\":[[\"Name\"],[\"Position\"]] ";
            $data = "\"data\":[[\"Tiger\",\"System\"],[\"Nixon\",\"Accountant\"]]";
            $str = "{".$column.",".$data."}";
            echo $str;
        }
        
        public function remap($method){
            $rem = FALSE;
            if($method == "right") {$this->right ();$rem=TRUE;}
            if($method == "datatable_json") {$this->datatable_json ();$rem=TRUE;}
            if($method == "datatable_json_database") {$this->datatable_json_database ();$rem=TRUE;}
            if($method == "datatable_json_columndata") {$this->datatable_json_columndata ();$rem=TRUE;}
            if($method == "datatable_complete") {$this->Complete ();$rem=TRUE;}
            if(!$rem)echo "Method unknown"; 
        }
        
        public function datatable_json() {
            $data['murl'] = $this->murl;
            $this->load->view('json/vjson_object',$data);
        }
        
        public function datatable_json_database() {
            $data['murl'] = $this->murl;
            $this->load->view('json/vjson_object_database',$data);
        }
        
        public function dataSampleJson(){
            $result = array();
            $this->db->from("customers");
            $data = $this->db->get();
            $result["data"] = $data->result();
            
            echo json_encode($result);
        }
        
        public function datatable_json_columndata() {
            $data['murl'] = $this->murl;
            $this->load->view('json/vjson_columndata',$data);
        }
        
        public function right(){
            echo "Welcome to the right place"."<br />";
        }
        
        public function Complete(){
            $data['murl'] = $this->murl;
            $this->load->view('json/vjson_complete',$data);			
        }
        
         public function Complete_json(){ 
            
            $this->load->model('Datatable_Model');
			
            $list = $this->Datatable_Model->get_datatables();
            $data = array();
            $no = 0;
            if(isset($_POST['start'])){ 
                    $no = $_POST['start'];	
            }
            foreach ($list as $val) { 
                        $no++;
                        $row = array();  
                        $row[] = $val->customerNumber;  
                        $row[] = $val->customerName;  
                        $row[] = $val->contactLastName;  
                        $row[] = $val->contactFirstName;  
                        $row[] = $val->phone;  
                        $row[] = $val->addressLine1; 
                        $row[] = $val->addressLine2;  
                        $row[] = $val->city;  
                        $row[] = $val->state;  
                        $row[] = $val->postalCode;  
                        $row[] = $val->country;  
                        $row[] = $val->salesRepEmployeeNumber;  
                        $row[] = $val->creditLimit;  


                        $data[] = $row;
                
            }
            $draw = 0;
            if(isset($_POST['draw'])){ 
                    $draw = $_POST['draw'];	
            }
			
            $output = array(
                    "draw" => $draw,
                    "recordsTotal" => $this->Datatable_Model->count_all(),
                    "recordsFiltered" => $this->Datatable_Model->count_filtered(),
                    "data" => $data,
            );
            //output to json format
            echo json_encode($output);
             
        }  
}
