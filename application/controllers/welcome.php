<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
      
        
      

	public function index()
        
	{
        // loads view welcome page
        $this->load->view('welcome_message');

        
       
    } 
    
     function contact(){
         
          $firstname = $this->input->post('fname');
        $lastname = $this->input->post('lname');
        $phone_number = $this->input->post('phone');
        $website = $this->input->post('website');
        $mail = $this->input->post('email');
        $message = $this->input->post('usermessage');
        
        $configs = array(
        'protocol'=>'smtp',
        'smtp_host'=>'ssl://smtp.gmail.com',
        'smtp_user'=>'maneesajemployment@gmail.com',
        'smtp_pass'=>"love2525",
        'smtp_port'=>'465'
        );
        
        $this->load->library('email',$configs);
        $this->email->set_newline("\r\n");
        $this->email->to('maneesajemployment@gmail.com'); 
        $this->email->from($email);
        $this->email->subject('Email Test');
        $this->email->message($message);  

        if($this->email->send()){
                
            echo"It want sent";
            redirect("index.php");

                
        } else {
            echo"it didnt send";
            redirect("index.php");
 
            echo $this->email->print_debugger();

            
        }
         
         }
    
    
}




/*           
        
      */
/* Location: ./application/controllers/welcome.php */