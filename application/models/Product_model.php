<?php
 
 
class Product_model extends CI_Model{

	public function getAllProducts(){
		$products = $this->db->get('products')->result();
		return $products;
	}

	public function storeProduct($data){
		$this->db->insert('products',$data);
	}

	public function getProduct($id){
		return $this->db->where('id',$id)->get('products')->row();
	}

	public function updateProduct($id,$data){
		$this->db->where('id',$id)->update('products',$data);
	}

	public function deleteProduct($id){
		$this->db->where('id',$id)->delete('products');
	}
}
