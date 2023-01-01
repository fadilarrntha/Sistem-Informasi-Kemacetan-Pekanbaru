<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jalan extends CI_Controller
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
        $data['judul'] = "Table Jalan | Macet Pekanbaru";
        $data['page'] = "Table Jalan";
        $data['navi'] = "active";
        $data['nav'] = "";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        //$data['macet'] = $this->Sembako_model->tsembako();
        $data['tb_jalan'] = $this->Macet_model->get();
        $this->load->view("layout/header_admin", $data);
        $this->load->view("dashboard/jalan", $data);
        $this->load->view("layout/footer_admin");
    }
    public function tambah()
	{
		$data['judul'] = "Halaman Tambah Jalan | Macet Pekanbaru";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['tb_jalan'] = $this->Macet_model->get();
		$this->form_validation->set_rules('latitude', 'Latitude', 'required', ['required' => 'Latitude Wajib di isi']);
		$this->form_validation->set_rules('longitude', 'Longitude', 'required', ['required' => 'Longitude prodi Wajib di isi']);
		$this->form_validation->set_rules('nama_jalan', 'Nama Jalan', 'required', ['required' => 'Nama Jalan Wajib di isi']);
		$this->form_validation->set_rules('kondisi_jalan', 'Kondisi Jalan', 'required', ['required' => 'Kondisi Jalan Wajib di isi']);
		$this->form_validation->set_rules('volume_kendaraan', 'Volume Kendaraan', 'required|integer', ['required' => 'Volume Kendaraan Wajib di isi', 'integer' => 'Volume Kendaraan Harus angka']);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header_data", $data);
			$this->load->view("jalan/tambah_jalan", $data);
			$this->load->view("layout/footer_data");
		} else {
			$data = [
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'nama_jalan' => $this->input->post('nama_jalan'),
				'kondisi_jalan' => $this->input->post('kondisi_jalan'),
				'volume_kendaraan' => $this->input->post('volume_kendaraan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/jalan/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Macet_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jalan Berhasil Ditambah!</div>');
			redirect('Jalan');
		}
	}
	function edit($id)
	{
		$data['judul'] = "Halaman Edit Jalan | Macet Pekanbaru";
		$data['tb_jalan'] = $this->Macet_model->getById($id);
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('latitude', 'Latitude', 'required', ['required' => 'Latitude Wajib di isi']);
		$this->form_validation->set_rules('longitude', 'Longitude', 'required', ['required' => 'Longitude prodi Wajib di isi']);
		$this->form_validation->set_rules('nama_jalan', 'Nama Jalan', 'required', ['required' => 'Nama Jalan Wajib di isi']);
		$this->form_validation->set_rules('kondisi_jalan', 'Kondisi Jalan', 'required', ['required' => 'Kondisi Jalan Wajib di isi']);
		$this->form_validation->set_rules('volume_kendaraan', 'Volume Kendaraan', 'required|integer', ['required' => 'Volume Kendaraan Wajib di isi', 'integer' => 'Volume Kendaraan Harus angka']);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header_data", $data);
			$this->load->view("jalan/edit_jalan", $data);
			$this->load->view("layout/footer_data");
		} else {
			$data = [
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'nama_jalan' => $this->input->post('nama_jalan'),
				'kondisi_jalan' => $this->input->post('kondisi_jalan'),
				'volume_kendaraan' => $this->input->post('volume_kendaraan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/jalan/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id_jalan');
			$this->Prodi_model->update(['id_jalan' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jalan Berhasil Di Ubah !</div>');
			redirect('Jalan');
		}
	}
    public function hapus($id)
	{
		$this->Macet_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-white font-weight-bold" role="alert"><i class="ni ni-books"></i>Data Jalan tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success text-white font-weight-bold" role="alert"><i
			class="ni ni-like-2"></i>Data Jalan Berhasil Dihapus!</div>');
		}
		redirect('Jalan');
	}
}