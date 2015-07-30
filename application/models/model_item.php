<?php

class model_item extends CI_Model {

	function getItems() {
        return $this->db->get('item');
	}
	
	function addItem() {
        $data = array(
			'code' => $_POST['code'],
			'description' => $_POST['description'],
			'amount' => $_POST['amount']
		);
		$this->db->insert('item', $data);
	}
	
	function saveChanges() {
        $data = array(
			'code' => $_POST['code'],
			'description' => $_POST['description'],
			'amount' => $_POST['amount']
		);
		$this->db->where('id', $_POST['id']);
		$this->db->update('item', $data); 
	}
	
	function deleteItem() {
		$this->db->where('id', $_POST['id']);
		$this->db->delete('item'); 
	}
}
