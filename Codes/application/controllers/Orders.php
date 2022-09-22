<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller 
{
    /*  DOCU: This function is triggered when clicking the order id and will display the order_details page
        Owner: Clement
    */
    public function show()
    {
        if($this->session->userdata('user_id') != null)
        {
            $data['title']= "Orders Details";
            $data['active'] = "";
            $this->load->view('templates/admin_header',$data);
            $this->load->view('dashboard/order_details',$data);
        }
        else
        {
            redirect('products/category/all');
        }
    }
}
