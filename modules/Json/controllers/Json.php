<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index()
	{
            $result = array();
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
            
            $result["data"] = $sample;
            echo json_encode($result);
	}
        
        
        public function modeltest(){
            echo $this->Moap->test();
        }
        
        public function remap($method){
            $rem = FALSE;
            if($method == "right") {$this->right ();$rem=TRUE;}
            if(!$rem)echo "Method unknown"; 
        }
        
        public function right(){
            echo "Welcome to the right place"."<br />";
        }
}
