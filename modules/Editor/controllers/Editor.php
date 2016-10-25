<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends MX_Controller {

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
        
        public function NicEditor(){
            $data['murl'] = $this->murl;
            $this->load->view('vnic_editor',$data);
        }
        
        public function NicEditorAction(){
            echo "Masuk sini";
        }
        
        public function TinyMCE(){
            $data['murl'] = $this->murl;
            $this->load->view('vtiny_mce',$data);
        }
        
        public function TinyMCEAction(){
            $insert = array(
                    'detail' => $this->input->post('mytext'),
            );
            $id = $this->Moap->insert("test",$insert);
            redirect("Editor/HasilTinyMCE/".$id);
        }
        
        public function HasilTinyMCE($id){
            $data['mydata'] = $this->Moap->getColumn("select detail from test where customerNumber = '$id'","detail");
            $this->load->view('vhasiltiny_mce',$data);
        }
        
}
