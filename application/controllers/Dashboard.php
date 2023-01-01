<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
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
        
            $data['judul'] = "Dashboard | Macet Pekanbaru";
            $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $data['macet'] = $this->Macet_model->get();
            $data['jumlah_macet'] = $this->Macet_model->count_macet();
            $data['termacet'] = $this->Macet_model->palingmacet();
            $data['us'] = $this->User_model->tuser();
            $this->load->view("layout/header", $data);
            $this->load->view("dashboard/dashboard", $data);
            $this->load->view("layout/footer");
	

       
    }
    public function search(){
        
        $jalan = $this->input->post('jalan');
        
        if($this->Macet_model->getById($jalan)){
            $detail['macetdetail'] = $this->Macet_model->getById($jalan);
            $data['judul'] = "Dashboard | Macet Pekanbaru";
            $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $data['macet'] = $this->Macet_model->get();
            $data['jumlah_macet'] = $this->Macet_model->count_macet();
            $data['termacet'] = $this->Macet_model->palingmacet();
            $data['us'] = $this->User_model->tuser();
            $this->load->view("layout/header", $data);
            $this->load->view("dashboard/detail_jalan",$detail);
            $this->load->view("layout/footer");

        }else{
            echo "<script>
            window.location.href='".base_url('dashboard');
            echo "';alert('Maaf Nama Jalan Yang Anda Cari Belum Tersedia');
            </script>";
            require('dashboard');
            
        }
     
    }
    public function detaildata($coba){
        
       
       
        $detail2['macetdetail'] = $this->Macet_model->getByIdjalan($coba);
     
        $data['judul'] = "Dashboard | Macet Pekanbaru";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['macet'] = $this->Macet_model->get();
        $data['jumlah_macet'] = $this->Macet_model->count_macet();
        $data['termacet'] = $this->Macet_model->palingmacet();
        $data['us'] = $this->User_model->tuser();
        $this->load->view("layout/header", $data);
        $this->load->view("dashboard/detail_jalan",$detail2);
        $this->load->view("layout/footer");
    }
    
     
}
