<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Model
{
    /*  DOCU: This function will get all the cart items along with the total quantity of each product added to cart.
        Owner: Clement
    */
    public function get_all_cart_items()
    {
        return $this->db->query("SELECT cart_items.id, cart_items.product_id, products.name, SUM(cart_items.quantity) as quantity, products.price FROM cart_items LEFT JOIN products ON cart_items.product_id = products.id GROUP BY cart_items.product_id")->result_array();
    }

    /*  DOCU: This function will add an item to cart_items.
        Owner: Clement
    */
    function add_cart_item($post)
    {
        $query = "INSERT INTO Cart_Items(product_id, quantity, created_at, updated_at) VALUES (?,?,?,?)";
        $values = array(
            $post['product_id'],
            $post['quantity'],
            date("Y-m-d, H:i:s"),
            date("Y-m-d, H:i:s")
        );
        $this->db->query($query,$values);
    }

    /*  DOCU: This function will count the total quantity of items in cart_items.
        Owner: Clement
    */
    public function count_items()
    {
        return $this->db->query("SELECT SUM(quantity) AS quantity FROM cart_items")->row_array();
    }

    /*  DOCU: This function will count the total quantity of items in cart_items.
        Owner: Clement
    */
    public function delete_item($product_id)
    {
        $this->db->query("DELETE FROM cart_items WHERE product_id = ?",array($product_id));
    }


    /*  DOCU: This function will delete all the items in cart_items.
        Owner: Clement
    */
    public function delete_all_items()
    {
        $this->db->query("DELETE FROM cart_items",);
    }
}
