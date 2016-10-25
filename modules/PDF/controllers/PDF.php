<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PDF extends MX_Controller {

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
            $this->load->view('vopen',$data);
	}
        
        public function create_pdf1(){
        $this->load->helper('pdf_helper');
            /*
                ---- ---- ---- ----
                your code here
                ---- ---- ---- ----
            */
           $data['han'] = '1';
            $this->load->view('pdfreport', $data);
        }
        
        public function create_pdf2(){
            $this->load->helper('pdf_helper');
            /*
                ---- ---- ---- ----
                your code here
                ---- ---- ---- ----
            */
           $data['murl'] = $this->murl;
            $this->load->view('vpdf_table', $data);
        }
        
        public function create_pdf3(){
            $this->load->helper('pdf_helper');
            /*
                ---- ---- ---- ----
                your code here
                ---- ---- ---- ----
            */
           $data['murl'] = $this->murl;
            $this->load->view('vcustom', $data);
        }
        
        public function create_pdf4(){
            $this->load->helper('pdf_helper');
            /*
                ---- ---- ---- ----
                your code here
                ---- ---- ---- ----
            */
           $data['murl'] = $this->murl;
            $this->load->view('vhtml', $data);
        }
        
        public function pdf_test(){
            $this->load->helper('pdf_helper');
            
            $data['query'] = $this->db->query("select * from tbl_kwh")->result_array();

            $data['header'] = array('satu','dua','tiga','empat');
           $data['murl'] = $this->murl;
            $this->load->view('vpdf_table', $data);

        }

           public function html_test(){
            $this->load->helper('pdf_helper');
            
           $data['murl'] = $this->murl;
            $this->load->view('html_pdf', $data);
        }

        
}
