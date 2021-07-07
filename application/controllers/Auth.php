<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
     
           $this->load->view('login');
		
	}
    public function p_login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() ==  FALSE) 
		{	
            $this->session->set_flashdata('pesan', 'Email dan password wajib di isi !!');
            $this->load->view('login');
		} else 
		{
            $email = htmlspecialchars($this->input->post('email'));
            $password = htmlspecialchars($this->input->post('password'));
            if($email == "admin@admin.com" and $password == "admin123"){
                $data = ['login' => true,

					];
                  $this->session->set_userdata($data);
                  
                  redirect('Dashboard','refresh');
                  
            }else{
                $this->session->set_flashdata('pesan', 'Email dan password salah');
                 $this->load->view('login');
            }
             
            
		}
		
    }
}
