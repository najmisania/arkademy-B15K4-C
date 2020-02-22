<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$query = $this->db->select('cashier.id, cashier.name name_cashier,  product.name as name_product, category.name as name_category, product.price')
						  ->join('cashier','product.id_cashier = cashier.id')
						  ->join('category', 'product.id_category = category.id')
						  ->from('product') 
						  ->get()
						  ->result();
		// $query = "SELECT cashier.name, product.name, category.name, product.price From product JOIN cashier ON product.id_cashier = cashier.id JOIN category ON product.id_category = category.id";
		$data['data_join'] = $query;
		// echo "<pre>";
		// print_r($query);
		// exit;
		$this->load->view('template/sidebar',$data);

	}
}
