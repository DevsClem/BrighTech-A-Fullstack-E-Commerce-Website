<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
    /*  DOCU: This function is triggered by default and will display the orders page
        Owner: Clement
    */
    public function orders()
    {
        if($this->session->userdata('user_id') != null)
        {
            $data['title']= "Dashboard Orders";
            $data['active'] = "orders";
            $this->load->view('templates/admin_header',$data);
            $this->load->view('dashboard/orders',$data);
        }
        else
        {
            redirect('products/category/all');
        }
    }

    /*  DOCU: This function is triggered when clicking products in the header and will display the product management page
        Owner: Clement
    */
    public function products()
    {
        $data['title']= "Dashboard Products";
        $data['active'] = "products";
        $this->load->view('templates/admin_header',$data);
        $this->load->view('dashboard/products',$data);
    }

    

}
