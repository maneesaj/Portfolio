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
         echo"hello";
        
                         $this->load->library('email');

       $firstname = $this->input->post('fname');
    $lastname = $this->input->post('lname');
        $phone_number = $this->input->post('phone');
       $website = $this->input->post('website');
       $mail = $this->input->post('email');
       $message = $this->input->post('usermessage');
         
        
        var_dump( $firstname, $lastname);

        
         echo"blah";
        $this->email->to('maneesajemployment@gmail.com'); 
        $this->email->from(set_value($mail));
        $this->email->subject('Email Test');
         $this->email->set_newline("\r\n");
        $this->email->message($message); 
         var_dump($message,$mail);
         
         $this->email->send();

        if($this->email->send()){
               // redirect("index.php");

            $errormessage = "message has been sent"; 
                        echo $this->email->print_debugger();


                
        } else {
                     //   redirect("index.php");

            
            $errormessage = "it didnt send";    
 
            echo $this->email->print_debugger();

            
        }
         
         }
    
    
}




/*           
        
      */
/* Location: ./application/controllers/welcome.php */