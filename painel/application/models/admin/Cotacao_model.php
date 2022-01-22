<?php
	class Cotacao_model extends CI_Model{


		//---------------------------------------------------
		// get all users for server-side datatable processing (ajax based)
		public function get_all_cotacao(){

			$this->db->select('*');
			return $this->db->get('ci_cotacao')->result_array();
			
		}

		//---------------------------------------------------
		// Get user detial by ID
		public function get_cotacao_by_id($id){
			$query = $this->db->get_where('ci_cotacao', array('id' => $id));
			return $result = $query->row_array();
		}




	}

?>