<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Readbean extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index()
	{
//            echo "MASUK READBEAN";
            $this->load->library('rb');
            $this->Insert();
            echo "<br />";
            $this->Retrieve();
//            $post = R::dispense('post');
//            $post->text = 'Hello World';
//
//            $id = R::store($post);       //Create or Update
//            $post = R::load('post',$id); //Retrieve
//            R::trash($post);             //Delete
	}
        
        public function Insert(){
            $post = R::dispense( 'post' );
            $post->title = 'My holiday';
            $id = R::store( $post );
            echo "Data tersimpan pada id =".$id;
        }
        
        public function Retrieve(){
            $post = R::load('post',5); //Retrieve
            echo "Data yang diretrieve =".$post['title'];
        }
        
        public function Search(){
            $posts = R::find( 'post', ' title LIKE ?', [ 'holiday' ] );
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
}
