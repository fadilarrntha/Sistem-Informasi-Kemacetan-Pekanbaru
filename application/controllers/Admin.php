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

    public function edit($id)
	{
        $data['judul'] = "Edit User | Macet Pekanbaru";
		$data['tb_user'] = $this->User_model->getById($id);
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required'=> 'Nama harus di isi']);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'valid_email'=> 'Email Harus Valid',
			'required'=> 'Email Wajib di isi'
			]);
		$this->form_validation->set_rules('password1',
			'Password',
			'required|trim|min_length[5]|matches[password2]',
			[ 'matches'=> 'Password Tidak Sama',
			'min_length'=> 'Password Terlalu Pendek',
			'required'=> 'Password harus di isi'
			]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]',  ['required'=> 'Ulangi Password harus di isi']);

        if ($this->form_validation->run() == false) {
			$this->load->view('layout/header_auth', $data);
			$this->load->view('user/edit_user', $data);
			$this->load->view('layout/footer_auth');;
		} else {
			$data = [
				'nama'=>htmlspecialchars($this->input->post('nama', true)),
			    'email'=>htmlspecialchars($this->input->post('email', true)),
			    'password'=>password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			];
            $id = $this->input->post('id');
			$this->User_model->update(['id' => $id], $data);
			redirect('Admin');
			}
		}
	}