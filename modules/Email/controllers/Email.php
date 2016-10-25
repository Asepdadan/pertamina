<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

        public function index(){
            $this->load->view('vmain');
        }
        
	public function main()
	{
            echo "MASUK EMAIL =".date('Y-m-d H:i:s');
            $this->load->view('PHPMailer/PHPMailerAutoload');
            $this->load->view('test');
            $m = new PHPMailer;
            $m->isSMTP();
            $m->SMTPAuth = true;
            $m->SMTPDebug = 2;
            $m->Host = 'smtp.gmail.com';
            $m->Username = 'webuppmpolban@gmail.com';
            $m->Password = 'nanaasephandoko';
            $m->SMTPSecure = 'ssl';
            $m->Port = 465;
            $m->From = 'webuppmpolban@gmail';
            $m->FromName = 'Fianti';
            $m->addAddress('hanupas@gmail.com','Handoko');
            $m->Subject = 'Hanif';
            $m->Body = 'Sulaiman';

            var_dump($m->send());
	}
        
	public function html()
	{
            echo "MASUK EMAIL =".date('Y-m-d H:i:s');
            $this->load->view('PHPMailer/PHPMailerAutoload');
            $this->load->view('test');
            $m = new PHPMailer;
            $m->isSMTP();
            $m->isHTML(true);
            $m->SMTPAuth = true;
            $m->SMTPDebug = 2;
            $m->Host = 'smtp.gmail.com';
            $m->Username = 'webuppmpolban@gmail.com';
            $m->Password = 'nanaasephandoko';
            $m->SMTPSecure = 'ssl';
            $m->Port = 465;
            $m->From = 'webuppmpolban@gmail';
            $m->FromName = 'Fianti';
            $m->addAddress('hanupas@gmail.com','Handoko');
            $m->Subject = 'Hanif';
            
            $message = "<h1> HANDOKO SUPENO</h1> <a href='http://google.com'>Klik Disini <a>";
            $m->Body = "<html>\n"; 
            $m->Body .= "<body style=\"font-family:Verdana, Verdana, Geneva, sans-serif; font-size:12px; color:#666666;\">\n"; 
            $m->Body = $message; 
            $m->Body .= "</body>\n"; 
            $m->Body .= "</html>\n"; 
            var_dump($m->send());
	}
       
        
}
