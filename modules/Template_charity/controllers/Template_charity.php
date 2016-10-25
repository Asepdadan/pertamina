<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_charity extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index()
	{
            $data['murl'] = $this->murl;
            $this->load->view('index',$data);
	}
        
        public function remap($method){
            $rem = FALSE;
            if($method == "main") {$this->main ();$rem=TRUE;}
            if($method == "detail") {$this->Detail ();$rem=TRUE;}
            if(!$rem)echo "Method unknown"; 
        }
        
        public function main(){
            $data['murl'] = $this->murl;
            $this->load->view('index',$data);
        }
        
        public function Detail(){
            $data['murl'] = $this->murl;
            $this->load->view('about',$data);
        }
}
