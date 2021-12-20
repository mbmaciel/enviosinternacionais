<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Cotacao extends MY_Controller {

	public function __construct(){

		parent::__construct();
		auth_check(); // check login auth
		$this->rbac->check_module_access();

		$this->load->model('admin/admin_model', 'admin');
		$this->load->model('admin/cotacao_model', 'cotacao_model');
	}

	//-----------------------------------------------------------
	public function index(){

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/cotacao/cotacao_list');
		$this->load->view('admin/includes/_footer');
	}
	
	public function datatable_json(){				   					   
		$records['data'] = $this->cotacao_model->get_all_cotacao();
		$data = array();

		$i=0;
		foreach ($records['data']   as $row) 
		{  
			$data[]= array(
				++$i,
				$row['name'],
				$row['email'],
				$row['street1'],
				$row['city'] . ', ' . $row['state'] . ',' . $row['country'],
				$row['zip'],
				$row['d_name'],	
				$row['d_street'],
				$row['d_email'],
				$row['d_city'] . ', ' . $row['d_state'] . ',' . $row['d_country'],
				$row['d_zip'],
				
			);
		}
		$records['data']=$data;
		echo json_encode($records);						   
	}


}



?>