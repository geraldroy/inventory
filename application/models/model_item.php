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
}
