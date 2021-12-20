<?php
	class Cotacao_model extends CI_Model{


		//---------------------------------------------------
		// get all users for server-side datatable processing (ajax based)
		public function get_all_cotacao(){

			$this->db->select('*');
			return $this->db->get('ci_cotacao')->result_array();
			
		}




	}

?>