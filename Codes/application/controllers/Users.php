<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{
    public function admin()
    {
        if($this->session->userdata('user_id') == null)
        {
            $this->load->view('admin/login');
        }
        else
        {
            redirect('dashboard/orders');
        }
    }

    public function process_signin() 
    {
        $result = $this->User->validate_signin_form();
        if($result != 'success') {
            $this->session->set_flashdata('errors', $result);
            redirect("/admin");
        } 
        else 
        {
            $email = $this->input->post('email',TRUE);
            $user = $this->User->get_user_by_email($email);
            
            $result = $this->User->validate_signin_match($user, $this->input->post('password',TRUE));
            
            if($result == "success") 
            {
                $this->session->set_userdata('user_id', $user['id']);            
                redirect("/dashboard/orders");
            }
            else 
            {
                $this->session->set_flashdata('errors', $result);
                redirect("/admin");
            }
        }
    }

	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/products/category/all');
	}
}