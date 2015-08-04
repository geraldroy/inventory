<?php

class model_item extends CI_Model {

	function getItems() {
		$this->db->select('*');
		$this->db->from('item_category');
		$this->db->join('item', 'item.category = item_category.id');
		return $this->db->get();
        //return $this->db->get('item');
	}
	
	function addItem() {
        $data = array(
			'code' => $_POST['code'],
			'description' => $_POST['description'],
			'category' => $_POST['category'],
			'amount' => $_POST['amount']
		);
		$this->db->insert('item', $data);
	}
	
	function saveItem() {
        $data = array(
			'code' => $_POST['code'],
			'description' => $_POST['description'],
			'category' => $_POST['category'],
			'amount' => $_POST['amount']
		);
		$this->db->where('id', $_POST['id']);
		$this->db->update('item', $data); 
	}
	
	function deleteItem() {
		$this->db->where('id', $_POST['id']);
		$this->db->delete('item'); 
	}
	
	function getCategories() {
		$category =  $this->db->get('item_category');
		foreach($category->result() as $cat) {
			$this->db->where('category', $cat->id);
			$this->db->from('item');
			$cat->listing = $this->db->count_all_results();
		}
		return $category;
	}
	
	function addCategory() {
        $data = array(
			'name' => $_POST['name'],
			'description' => $_POST['description']
		);
		$this->db->insert('item_category', $data);
	}
	
	function saveCategory() {
		$data = array(
			'name' => $_POST['name'],
			'description' => $_POST['description']
		);
		$this->db->where('id', $_POST['id']);
		$this->db->update('item_category', $data); 
	}
	
	function deleteCategory() {
		$this->db->where('id', $_POST['id']);
		$this->db->delete('item_category'); 
	}
}
