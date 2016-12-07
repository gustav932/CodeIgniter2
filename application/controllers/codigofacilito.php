<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
		$this->load->helper('form');
		$this->load->model('codigofacilito_model');
	}

	function index(){

		$this->load->library('menu',array('Inicio','Contacto','Cursos','Acerca de'));
		$data['mi_menu']= $this->menu->construirMenu();
		$this->load->view('codigofacilito/header');
		$this->load->view('codigofacilito/bienvenido',$data);
	}

	function holamundo(){
		$this->load->view('codigofacilito/header');
		$this->load->view('codigofacilito/bienvenido');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */