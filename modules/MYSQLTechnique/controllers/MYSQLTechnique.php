<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MYSQLTechnique extends MX_Controller {

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
        
        public function test(){
            $this->load->view('vmain');
        }
        
        public function modeltest(){
            echo $this->Moap->test();
        }
        
        public function remap($method){
            $rem = FALSE;
            if($method == "right") {$this->right ();$rem=TRUE;}
            if($method == "GrabMultiTableJson") {$this->GrabMultiTableJson ();$rem=TRUE;}
            if($method == "GrabMultiTableJsonObject") {$this->GrabMultiTableJsonObject ();$rem=TRUE;}
            if($method == "CreateFormFormDatabase") {$this->CreateFormFormDatabase();$rem=TRUE;}
            if($method == "HandlingForm") {$this->HandlingForm();$rem=TRUE;}
            if($method == "GetColumnFormDatabase") {$this->GetColumnFormDatabase();$rem=TRUE;}
            if($method == "GetColumnFormDatabaseToCSV") {$this->GetColumnFormDatabaseToCSV();$rem=TRUE;}
            if($method == "GetColumnFormDatabaseFilter") {$this->GetColumnFormDatabaseFilter();$rem=TRUE;}
            if($method == "GetColumnFormDatabaseFilterDropDown") {$this->GetColumnFormDatabaseFilterDropDown();$rem=TRUE;}
            if(!$rem)echo "Method unknown"; 
        }
        
        public function GetColumnFormDatabase(){
            $data['data'] = $this->Moap->get("SHOW COLUMNS FROM customers");
            $data['murl'] = $this->murl;
            $this->load->view('vcheckbox',$data);
        }
        
        public function GetColumnFormDatabaseToCSV(){
            $data['data'] = $this->Moap->get("SHOW COLUMNS FROM customers");
            $data['murl'] = $this->murl;
            $this->load->view('vcheckbox_csv',$data);
        }
        
        public function GetColumnFormDatabaseFilter(){
            $data['data'] = $this->Moap->get("SHOW COLUMNS FROM customers");
            $data['murl'] = $this->murl;
            $this->load->view('vcheckbox_filter',$data);
        }
        
        public function GetColumnFormDatabaseFilterDropDown(){
            $data['data'] = $this->Moap->get("SHOW COLUMNS FROM customers");
            $data['murl'] = $this->murl;
            
            $this->load->view('vcheckbox_filter_dropdown',$data);
        }
        
        public function CreateCSV(){
            $ntv = $this->input->post('query');
            if($ntv != '-') {
                $this->Moap->csv($ntv,"Program Arahan");
            }else{
                echo "Anda belum memilih apapun <br /> <a href='".  base_url('MYSQLTechnique/GetColumnFormDatabaseToCSV')."'> <button> <<< KEMBALI</button></a>";
            } 
        }
        
        public function right(){
            echo "Welcome to the right place"."<br />";
        }
        
        public function GrabMultiTableJson(){
            $this->load->model('MMultiTable');
            echo $this->MMultiTable->main();
            echo "Testing masuk grab";
        }
        
         public function GrabMultiTableJsonObject(){
            $this->load->model('MMultiTable');
            echo $this->MMultiTable->object();
        }
        
        public function CreateFormFormDatabase(){
            $this->Moap->CreateForm('test',base_url('MYSQLTechnique/remap/HandlingForm'));
        }
        
        public function HandlingForm(){
            $this->Moap->HandlingForm('test',$_POST, base_url('MYSQLTechnique/remap/CreateFormFormDatabase'));
        }
}
