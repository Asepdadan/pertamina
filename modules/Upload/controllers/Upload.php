<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MX_Controller {

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
        
        public function Ajax(){
            $data['murl'] = $this->murl;
            $this->load->view('vupload_ajax',$data);
	}
        
        public function AjaxUpload() {
            $status = "";
            $msg = "";
            $file_element_name = 'userfile';

            $status = "error";
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = '*';
            $config['max_size']	= '9000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            } else {
                $upl = $this->upload->data();
                $insert = array(
                    'filename' => $upl['file_name'],
                );
                $this->Moap->insert('files',$insert);
                $msg = "Please enter a title 222 =";
            }
            @unlink($_FILES[$file_element_name]);
            
            echo json_encode(array('status' => $status, 'msg' => $msg));
        }
        
	public function Basic(){
		$this->load->view('vupload_file', array('error' => ' ' ));
	}
        
        function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '9000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('vupload_file', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	}
        
	public function Post(){
		$this->load->view('vupload_post', array('error' => ' ' ));
	}
        
        function do_upload_post()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '9000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('vupload_file', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
                        $data['username'] = $this->input->post('username');
			$this->load->view('upload_success_post', $data);
		}
	}
        
        public function Excel(){
            $data['murl'] = $this->murl;
            $data['test'] = $this->Moap->getRow("select customerNumber from test");
            $this->load->view('vexcel',$data);
//            $this->load->view('upload_excel/upload',$data);
        }
        
        public function UploadExcel(){
                $config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '9000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('vexcel', $error);
		}
		else
		{
                    $this->load->view('upload_excel/PHPExcel/IOFactory.php');
                    $data = array('upload_data' => $this->upload->data());
                    $upload_data = $this->upload->data();
                    try {
                            $objPHPExcel = PHPExcel_IOFactory::load($upload_data['full_path']);
                    } catch(Exception $e) {
                            die('Error loading file "'.pathinfo($upload_data['file_name'],PATHINFO_BASENAME).'": '.$e->getMessage());
                    }
                    
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                    $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
                    
                    for($i=1;$i<=$arrayCount;$i++){
                        $customerName = trim($allDataInSheet[$i]["A"]);
                        $contactLastName = trim($allDataInSheet[$i]["B"]);
                        $contactFirstName = trim($allDataInSheet[$i]["C"]); 
                        $insert= array(
                            "customerName" => trim($allDataInSheet[$i]["A"]),
                            "contactLastName" => trim($allDataInSheet[$i]["B"]),
                            "contactFirstName" => trim($allDataInSheet[$i]["C"]),
                        );
//                        $query = "insert into test (customerName, contactLastName, contactFirstName) 
//                                               values('".$customerName."','".$contactLastName."','".$contactFirstName."');";
//                        $insertTable= mysql_query($query);
                        $this->Moap->insert('test',$insert);
                        //$msg = $query.'Record has been added. <div style="Padding:20px 0 0 0;"></div>';
                    }
                    //echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
                    $this->load->view('upload_success', $data);
		}
        }
                
        
}
