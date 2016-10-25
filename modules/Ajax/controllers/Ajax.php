<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends MX_Controller {

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
        
        public function basic(){
            $data['murl'] = $this->murl;
            $this->load->view('vbasic',$data);
        }
        
        public function cari_customers(){
            $data['murl'] = $this->murl;
            $id = $this->input->get('id');

            $data['data'] = $this->db->query("select * from customers where customerNumber = '$id' ")->result_array();
            $this->load->view('vcari_customers',$data);
        }
}
