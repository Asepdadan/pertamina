<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jquery extends MX_Controller {

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
        
	public function basic()
	{
            $data['murl'] = $this->murl;
            $this->load->view('vbasic',$data);
	}
        
	public function currency()
	{
            $data['murl'] = $this->murl;
            $this->load->view('vcurrency',$data);
	}
        
	public function dateTimePicker()
	{
            $data['murl'] = $this->murl;
            $this->load->view('vdatetimepicker',$data);
	}
        
	public function modal()
	{
            $data['murl'] = $this->murl;
            $this->load->view('vmodal',$data);
	}
        
        public function nestedSelect()
	{
            $data['murl'] = $this->murl;
            $data['country'] = $this->Moap->get("select DISTINCT(country) from customers");
            $this->load->view('vnested_select',$data);
	}
        
        public function JsonData($country){
            $querystr = "SELECT * FROM `customers` where country='$country'";
            $query = $this->db->query($querystr);
            $result = array();
            $result[] = array("id"=>'00', "text"=>'--- Pilih Nama Customer ---');
            foreach($query->result() as $row){
                $result[] = array("id"=>$row->customerNumber, "text"=>$row->contactLastName);
            }
            echo json_encode($result);
        }
        
}
