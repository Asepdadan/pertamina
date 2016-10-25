<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index()
	{
            $data['murl'] = $this->murl;
            $this->load->view('sign-in',$data);
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
            if(!$rem)echo "Method unknown"; 
        }
        
        public function right(){
            echo "Welcome to the right place"."<br />";
        }
        
        public function Main(){
            $data['murl'] = $this->murl;
            $this->load->view('index',$data);
        }
        
        public function Grid(){
            $data['murl'] = $this->murl;
            $this->load->view('grids',$data);
        }
        
        public function Widgets(){
            $data['murl'] = $this->murl;
            $this->load->view('widgets',$data);
        }
}
