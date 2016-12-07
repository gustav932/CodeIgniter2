<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
		$this->load->helper('form');
		$this->load->model('codigofacilito_model');
	}

	function index(){
		$data['segmento']=$this->uri->segment(3);
		$this->load->view('codigofacilito/header');

		if (!$data['segmento']) {
			$data['cursos']= $this->codigofacilito_model->obtenerCursos();
		} else {
			$data['cursos']= $this->codigofacilito_model->obtenerCurso($data['segmento']);
		}
		

		$this->load->view('cursos/cursos',$data);
	}

	function nuevo(){
		$this->load->view('cursos/formulario');
	}

	function recibirDatos(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'videos' => $this->input->post('videos')
			);
		$this->codigofacilito_model->creaCurso($data);
		$this->load->view('cursos/formulario');
	}

}?>




