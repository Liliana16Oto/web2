<?php

class Usuario extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor
  function insertar($datos)
  {
    return $this->db->insert("usuario",$datos);
  }
  //Funcion que reenderizala viksta index
  function obtenerTodos(){
    $listadoUsuarios=$this->db->get("usuario");

    if($listadoUsuarios->num_rows()>0){
      return $listadoUsuarios->result();
    }else {
      return false;
    }
  }
   //borrar instructores
    function borrar($id_us){
      $this->db->where("id_us",$id_us);
      return $this->db->delete("usuario");
    }
}//no borrar cierre de la clase

 ?>
