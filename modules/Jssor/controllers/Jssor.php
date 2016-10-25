<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jssor extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index()
	{
            $data['murl'] = $this->murl;
            $this->load->view('vslideshow',$data);
	}
        
        public function remap($method){
            $rem = FALSE;
            if($method == "main") {$this->main ();$rem=TRUE;}
            if($method == "slideshow") {$this->slideshow ();$rem=TRUE;}
            if(!$rem)echo "Method unknown"; 
        }
        
        public function main(){
            echo "Welcome to the right place"."<br />";
        }
        
        public function slideshow(){
            $data['murl'] = $this->murl;
            $this->load->view('vslideshow',$data);
//            $this->load->view('vtest',$data);
        }
}
