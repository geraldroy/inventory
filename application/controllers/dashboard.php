<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
        $this->load->model('model_item');
        $data['items'] = $this->model_item->getItems();
		$this->load->view('header');
		$this->load->view('view_dashboard', $data);
		$this->load->view('footer');
	}
	
	function createItem() {
		$this->load->model('model_item');
        $this->model_item->addItem();
		$this->index();
	}
	
	function editItem() {
		$this->load->model('model_item');
        $this->model_item->saveChanges();
		$this->index();
	}
	
	function deleteItem() {
		$this->load->model('model_item');
        $this->model_item->deleteItem();
		$this->index();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */