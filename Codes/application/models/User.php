<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{
    function get_user_by_email($email)
    { 
        $query = "SELECT * FROM Users WHERE email = ?";
        return $this->db->query($query, array($email))->result_array()[0];
    }

	function validate_signin_form() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if(!$this->form_validation->run()) {
            return validation_errors('<p class="errors">',"</p>");
        } 
        else {
            return "success";
        }
    }
    
    function validate_signin_match($user, $password) 
    {
        $hash_password = md5($password);

        if($user['password'] == $hash_password) {
            return "success";
        }
        else {
            return "Incorrect email/password.";
        }
    }
}