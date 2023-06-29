<?php
  class Usuario1 extends CI_Model
  {
	function __construct()
	{
  	parent::__construct();
	}

	function obtenerPorEmailPassword($email,$password){
  	$this->db->where("email_usu",$email);
  	$this->db->where("password_usu",$password);
  	$usuario1=$this->db->get("usuario1");
  	if($usuario1->num_rows()>0){
    	return $usuario1->row();
  	}
  	return false;
	}
}
