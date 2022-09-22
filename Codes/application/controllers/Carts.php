<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller 
{

    /*  DOCU: This function is triggered by when the cart button in the header is pressed. This will display the cart page.
        Owner: Clement
    */
    public function index()
    {
        $data['title'] = "(Carts Page) Shopping Cart | BrighTech";
        $data['cart_quantity'] = $this->session->userdata('cart_quantity');
        $data['items'] = $this->Cart->get_all_cart_items();
        $data['total_price'] = 0;
        foreach($data['items'] as $item)
		{
			$data['total_price'] += $item['price'] * $item['quantity'];
		}
        $this->load->view('templates/user_header',$data);
		$this->load->view('carts/cart',$data);
    }

    /*  DOCU: This function is triggered when the buy button in the show page is pressed. This will add an item to cart.
        Owner: Clement
    */
    public function add_to_cart()
    {
        $item = array(
			'product_id' => $this->input->post('product_id',TRUE),
			'quantity' => $this->input->post('quantity',TRUE)
		); 
		$this->Cart->add_cart_item($item);
		$this->session->set_userdata('cart_quantity',$this->Cart->count_items()['quantity']);
        $data['cart_quantity'] = $this->session->userdata('cart_quantity');
        $this->load->view('partials/cart_quantity',$data);
    }

    /*  DOCU: This function is triggered when the delete button is pressed. This will delete an item in the cart items.
        Owner: Clement
    */
    public function delete_cart_item($product_id)
	{
		$this->Cart->delete_item($product_id);
        $this->session->set_userdata('cart_quantity',$this->Cart->count_items()['quantity']);
		redirect('/carts');
	}


    /*  DOCU: This function is when the pay button is pressed. This will store the user information except for the card details
        Stipre API will handle the card details.
        Owner: Clement
    */
    public function add_order()
    {
        $data['info'] = $this->input->post(NULL,TRUE);
        $data['items'] = $this->Cart->get_all_cart_items();
        $data['total_price'] = 0;
        foreach($data['items'] as $item)
		{
			$data['total_price'] += $item['price'] * $item['quantity'];
		}
        $data_json = json_encode($data,TRUE);
        if($this->Order->validate_order() == "valid")
        {
            // Stripe API
            require_once('application/libraries/stripe-php/init.php');
            \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
            \Stripe\Charge::create ([
                    "amount" => $data['total_price'] * 100,
                    "currency" => "usd",
                    "source" => $this->input->post('stripeToken'),
                    "description" => "Dummy stripe payment." 
            ]);
            //End of Stripe API
            $this->Order->create_order($data_json);
            $this->Cart->delete_all_items();
            $this->session->set_flashdata('success','<p class="success">Payment Success</p>');
            $this->session->set_userdata('cart_quantity',$this->Cart->count_items()['quantity']);
        }
        else
        {
            $this->session->set_flashdata('errors',$this->Order->validate_order());
        }
        redirect('/carts');
    }
}
