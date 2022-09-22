<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Model
{
    public function create_order($data)
    {
        $query = "INSERT INTO Orders(status, information, created_at, updated_at) VALUES (?,?,?,?)";
        $values = array(
            1, 
            $data, 
            date("Y-m-d, H:i:s"), 
            date("Y-m-d, H:i:s")
        );
        $this->db->query($query, $values);
    }   

    public function validate_order()
    {
        $this->load->library('form_validation');
        $rules = array(
            array("field" => "shipping_first_name",     "label" => "Shipping First Name",       "rules" => "required|min_length[4]|alpha"),
            array("field" => "shipping_last_name",      "label" => "Shipping Last Name",        "rules" => "required|min_length[4]|alpha"),
            array("field" => "shipping_address",        "label" => "Shipping Address",          "rules" => "required|min_length[4]"),
            array("field" => "shipping_city",           "label" => "Shipping City",             "rules" => "required|min_length[4]"),
            array("field" => "shipping_state",          "label" => "Shipping State",            "rules" => "required|min_length[4]"),
            array("field" => "shipping_zip_code",       "label" => "Shipping Zip Code",         "rules" => "required|min_length[4]"),
            array("field" => "billing_first_name",      "label" => "Billing First Name",        "rules" => "required|min_length[4]|alpha"),
            array("field" => "billing_last_name",       "label" => "Billing Last Name",         "rules" => "required|min_length[4]|alpha"),
            array("field" => "billing_address",         "label" => "Billing Address",           "rules" => "required|min_length[4]"),
            array("field" => "billing_city",            "label" => "Billing City",              "rules" => "required|min_length[4]"),
            array("field" => "billing_state",           "label" => "Billing State",             "rules" => "required|min_length[4]"),
            array("field" => "billing_zip_code",        "label" => "Billing Zip Code",          "rules" => "required|min_length[4]"),
        );

        $this->form_validation->set_rules($rules);
        if($this->form_validation->run() == FALSE)
        {
            return validation_errors('<p class="errors">',"</p>");
        }
        return "valid";
    }
}
