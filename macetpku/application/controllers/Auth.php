<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('User_model', 'userrole');
	}

	function index() {
		if ($this->session->userdata('email')) {
			redirect('Dashboard');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',
			[ 'valid_email'=> 'Email Harus Valid',
			'required'=> 'Email Wajib di isi'
			]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', [ 'required'=> 'Password Wajib di isi'
			]);

		if ($this->form_validation->run()==false) {
			$this->load->view("layout/header_auth");
			$this->load->view("auth/login");
			$this->load->view("layout/footer_auth");
		}

		else {
			$this->cek_login();
		}
	}

	function register() {
		if ($this->session->userdata('email')) {
			redirect('Dashboard');
		}

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required'=> 'Nama harus di isi']);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [ 'is_unique'=> 'Email ini sudah terdaftar!',
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

		if ($this->form_validation->run()==false) {
			$data['title']='Registration';
			$this->load->view('layout/header_auth', $data);
			$this->load->view('auth/register');
			$this->load->view('layout/footer_auth');
		}

		else {
			$data=[ 'nama'=>htmlspecialchars($this->input->post('nama', true)),
			'email'=>htmlspecialchars($this->input->post('email', true)),
			'password'=>password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'role'=>"User",
			'date_created'=>time()];
			$this->userrole->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-white font-weight-bold" role="alert">Selamat! Akunmu telah berhasil terdaftar, Silahkan Login ! </div>');
			redirect('Auth');
		}
	}

	public function cek_login() {
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$user=$this->db->get_where('tb_user', ['email'=> $email])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data=[ 'email'=>$user ['email'],
				'role'=>$user ['role'],
				'id'=>$user['id'],
				];
				$this->session->set_userdata($data);

				if ($user['role']=='Admin') {
					redirect('Admin');
				}

				else {
					redirect('Dashboard');
				}
			}

			else {
				$this->session->set_flashdata('message', '<div class="alert alert-primary text-white font-weight-bold" role="alert"> Password Salah !</div>');
				redirect('Auth');
			}
		}

		else {
			$this->session->set_flashdata('message', '<div class="alert alert-primary text-white font-weight-bold" role="alert"> Email belum terdaftar !</div>');
			redirect('Auth');
		}
	}

	public function logout() {
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('message', '<div class="alert alert-success text-white font-weight-bold" role="alert">Berhasil Logout!</div>');
		redirect('Auth');
	}
}
