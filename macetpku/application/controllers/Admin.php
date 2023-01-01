<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Macet_model');
        $this->load->model('User_model');
    }
    function index()
    {
        $data['judul'] = "Dashboard Admin | Macet Pekanbaru";
        $data['page'] = "Table User";
        $data['nav'] = "active";
        $data['navi'] = "";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        //$data['macet'] = $this->Sembako_model->tsembako();
        $data['tb_user'] = $this->User_model->get();
        $this->load->view("layout/header_admin", $data);
        $this->load->view("dashboard/dashboard_admin", $data);
        $this->load->view("layout/footer_admin");
    }
    public function hapus($id)
	{
		$this->User_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-white font-weight-bold" role="alert"><i class="ni ni-books"></i>Data User tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success text-white font-weight-bold" role="alert"><i
			class="ni ni-like-2"></i>Data User Berhasil Dihapus!</div>');
		}
		redirect('Admin');
	}
}