<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model
{	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function creaCurso($data){
		$this->db->insert('cursos',array('nombreCurso'=>$data['nombre'],'videosCurso'=>$data['videos']));
	}

	function obtenerCursos(){
		$query = $this->db->get('cursos');
		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	function obtenerCurso($id){
		$query = $this->db->where('id_curso',$id);
		$query = $this->db->get('cursos');
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
}


?>