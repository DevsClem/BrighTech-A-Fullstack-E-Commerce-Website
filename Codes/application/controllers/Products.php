<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller 
{
	public function category($category = "all", $page = 1)
	{
		$data['sort'] = $this->input->get('sort',TRUE);
		$multiplyer = $page == 1 ? 1 : 10;
		$offset = ($page - 1) * $multiplyer;
		$data['products'] = $this->Product->query_limit($category,$offset,$data['sort']);
		$data['page_name']  = $category == "all" ? "All Products" : $data['products'][0]['category_name'];
		$data['filter'] =  $category == "all" ? "/products/category/all/" : "/products/category/".$data['products'][0]['product_category_id']."/";
		$data['pages'] = $this->Product->get_pages($category);
		$data['page'] = $page;
		$data['title'] = "(Products Page) {$data['page_name']} | BrighTech";
		$data['cart_quantity'] = $this->session->userdata('cart_quantity');
		$data['categories'] = $this->Product->fetch_all_categories();
		$this->load->view('templates/user_header', $data);
		$this->load->view('products/catalog', $data);
	}

	public function search($name = "", $page = 1)
	{
		$multiplyer = $page == 1 ? 1 : 10;
		$offset = ($page - 1) * $multiplyer;
		$name = $name == "" ? $this->input->post('name',TRUE) : $name;
		$data['sort'] = $this->input->get('sort',TRUE);
		$data['products'] = $this->Product->query_limit("all", $offset, $data['sort'], $name);
		$data['page_name']  = $name;
		$data['filter'] =  "/products/search/$name/";
		$data['pages'] = $this->Product->get_pages("all", $name);
		$data['page'] = $page;
		$data['title'] = "(Products Page) $name | BrighTech";
		$data['cart_quantity'] = $this->session->userdata('cart_quantity');
		$data['categories'] = $this->Product->fetch_all_categories();
		$this->load->view('templates/user_header', $data);
		$this->load->view('products/catalog', $data);
	}

	public function show($product_id)
	{
		$data['title'] = "Product | BrighTech";
		$data['cart_quantity'] = $this->session->userdata('cart_quantity');
		$data['product'] = $this->Product->get_product_by_id($product_id);
		$data['products'] = $this->Product->get_products_by_category($data['product']['product_category_id'],$product_id);
		$this->load->view('templates/user_header',$data);
		$this->load->view('products/show',$data);
	}

}
