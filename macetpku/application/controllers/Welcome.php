<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('Macet_model');
	}

	public function index() {
		//$data['jalan']=$this->Macet_model->get();
		//var_dump($data);
		//$this->load->view('welcome_message');
		$this->load->database();
		$this->load->dbutil();

		if( !$this->dbutil->database_exists('macetpku')) 
			echo 'Not connected to a database, or database not exists';
		else 
			redirect('Auth');


	}
}
