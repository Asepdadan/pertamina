<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_Standard extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index()
	{
           redirect('template_standard/main');
	}
        
        public function main(){
            $data['murl'] = $this->murl;
            $this->load->view('vmain',$data);
        }
        
        public function Home(){
            $data['murl'] = $this->murl;
            $this->load->view('vhome',$data);
        }
        
        public function TampilProduk(){
            $data['murl'] = $this->murl;
            $this->load->view('vproduk',$data);
        }
        
        public function DetilProduk(){
            $data['murl'] = $this->murl;
            $this->load->view('vdetil_produk',$data);
        }
}
