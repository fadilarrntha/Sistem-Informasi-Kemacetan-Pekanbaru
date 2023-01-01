<?php defined('BASEPATH') or exit('No direct script access
allowed');
class Macet_model extends CI_Model {
		public $table='tb_jalan';
		public $id='tb_jalan.id_jalan';
		public $jalan='tb_jalan.nama_jalan';

		public function __construct() {
			parent::__construct();
		}

		public function get() {
			$this->db->from($this->table);
			$query=$this->db->get();
			return $query->result_array();
		}

		public function getById($jalan) {
			$this->db->from($this->table); 
			$this->db->where("nama_jalan", $jalan);
			$query=$this->db->get();
			return $query->result_array();
		}
		public function getByIdjalan($jalan) {
			$this->db->from($this->table); 
			$this->db->where("id_jalan", $jalan);
			$query=$this->db->get();
			return $query->result_array();
		}

		public function update($where, $data) {
			$this->db->update($this->table, $data, $where);
			return $this->db->affected_rows();
		}

		public function insert($data) {
			$this->db->insert($this->table, $data);
			return $this->db->insert_id();
		}

		public function delete($id) {
			$this->db->where($this->id, $id);
			$this->db->delete($this->table);
			return $this->db->affected_rows();
		}
		public function count_macet(){
			$this->db->select('*');
			$this->db->from('tb_jalan');
			return $this->db->count_all_results();
		}
		public function palingmacet(){
			$query=$this->db->query(" SELECT * FROM tb_jalan WHERE volume_kendaraan > 70 LIMIT 4 ");
			
			return $query->result_array();
		}
	}
