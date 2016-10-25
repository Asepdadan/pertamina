<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends MX_Controller {

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
        
	public function Basic()
	{
            $data['murl'] = $this->murl;
            $this->load->view('vbasic',$data);
	}
        
	public function Tab1()
	{
            $data['murl'] = $this->murl;
            $this->load->view('vtab1',$data);
	}
        
        public function Json(){
            $data['murl'] = $this->murl;
            $this->load->view('vjson',$data);			
        }	
		
        public function Json_Edit($id){
            $data['murl'] = $this->murl;
            $data['id'] = $id;
            $this->load->view('vjson_edit',$data);		
        }
        
        public function Data_json(){ 
            
            $this->load->model('Table/Table_model','tm');
			
            $list = $this->tm->get_datatables("2017");
            $data = array();
            $no = 0;
            if(isset($_POST['start'])){ 
                    $no = $_POST['start'];	
            }
            foreach ($list as $val) { 
                $no++;
                $row = array();  
                $row[] = '<a href="'.base_url("index.php/Table/Json_Edit/".$val->customerNumber).'">Edit</a></td>';
                $row[] = '<a href="javascript:showModalDelete('.$val->customerNumber.')">Delete</a></td>';
                $row[] = $val->customerNumber;
                $row[] = $val->customerName;  
                $row[] = $val->contactLastName;  
                $row[] = '<b>'.$val->contactFirstName.'</b><br><span style="color:blue">'.$val->contactFirstName.'</span><br>'.$val->contactFirstName; 
                $row[] = $val->phone;  
                $row[] = $val->addressLine1;  
                $row[] = $val->addressLine2;  
                $row[] = $val->city; 
                $row[] = $val->state;  
                $row[] = $val->postalCode;  
                $row[] = $val->country;  
                $row[] = $val->salesRepEmployeeNumber;  
                $row[] = number_format($val->creditLimit/1000000);

                $data[] = $row;
            }
            $draw = 0;
            if(isset($_POST['draw'])){ 
                    $draw = $_POST['draw'];	
            }
			
            $output = array(
                    "draw" => $draw,
                    "recordsTotal" => $this->tm->count_all(),
                    "recordsFiltered" => $this->tm->count_filtered(),
                    "data" => $data,
            );
            //output to json format
            echo json_encode($output);   
        }
        
        public function json_delete($id){
            //$this->Moap->delete('customers','customerNumber',$id);
            redirect("Table/Json");
        }
}
