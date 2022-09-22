<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Model
{
    public function fetch_all_categories()
    {
        return $this->db->query("SELECT product_categories.id, product_categories.name, COUNT(*) AS products_per_category FROM product_categories INNER JOIN products ON product_categories.id = products.product_category_id GROUP BY product_category_id")->result_array();
    }
    public function fetch_all_products($limit)
    {
        $query = "SELECT * FROM products LIMIT ?,10";  
        $values = array($limit);
        return $this->db->query($query, $values)->result_array();
    }
    public function query_builder($category,$sort,$name)
    {
        $query = "SELECT products.*, product_categories.name AS category_name FROM product_categories INNER JOIN products ON product_categories.id = products.product_category_id";  
        $values = array();
        if($name != null || $name != "")
        {
            $query .= " WHERE products.name LIKE ?";
            $values[] = "%$name%";
        }
        elseif($category != "all")
        {
            $query .= " WHERE product_category_id = ? ";
            $values[] = $category;
        }

        if($sort == "popular")
        {
            $query .= " ORDER BY products.quantity_sold DESC";
        }
        else if($sort == "price")
        {
            $query .= " ORDER BY products.price DESC";
        }
        
        return array('query' => $query, 'values' => $values);
    }

    public function query_limit($category,$offset,$sort="",$name = "")
	{
        $query_builder = $this->query_builder($category,$sort,$name,);
        $query = $query_builder['query'];
        $values = $query_builder['values'];
        $query .= " LIMIT ?,10";
        $values[] = $offset;
        return $this->db->query($query,$values)->result_array();
    }

    public function get_pages($category,$name = "")
    {
        $query_builder = $this->query_builder($category,"",$name);
        $query = $query_builder['query'];
        $values = $query_builder['values'];
        return ceil(count($this->db->query($query,$values)->result_array())/10);
    }

    public function get_product_by_id($id)
    {
        return $this->db->query("SELECT * FROM Products WHERE id = ?",array($id))->row_array();
    }
    public function get_products_by_category($category_id,$product_id)
    {
        return $this->db->query("SELECT * FROM Products WHERE product_category_id = ? AND id != ? LIMIT 4",array($category_id,$product_id))->result_array();
    }

}