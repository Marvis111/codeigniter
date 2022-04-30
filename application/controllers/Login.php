<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{

        echo "welcome to the login page";
    //   echo json_encode($this->request->body);

		//$this->load->view('login');
	}
    public function find(){
        function filterError($field){
            return $field['msg'] != "";
        }
        $errorArray = [];
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = $_POST['password'];
        $email = $_POST['email'];
        array_push($errorArray,['field'=>"name","msg" => (empty($name) ? "Name is required" :"") ]);
        array_push($errorArray,['field'=>"email","msg" => (!filter_var($email,FILTER_VALIDATE_EMAIL) ? "Email is required" :"") ]);
        array_push($errorArray,['field'=>"password","msg" => (empty($password) ? "Password is required" :"") ]);

        $errrors = array_filter($errorArray,'filterError');
        if(count($errors) == 0){
            // do the get here.. here 
        
        }

        }


    
    }
}
//$value = $this->input->post($fieldName);