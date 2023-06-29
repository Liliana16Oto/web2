<?php

class Instructor extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor
  function insertar($datos)
  {
    return $this->db->insert("instructor",$datos);
  }
  //Funcion que reenderizala viksta index
  function obtenerTodos(){
    $listadoInstructores=$this->db->get("instructor");

    if($listadoInstructores->num_rows()>0){
      return $listadoInstructores->result();
    }else {
      return false;
    }
  }
   //borrar instructores
    function borrar($id_ins){
      $this->db->where("id_ins",$id_ins);
      return $this->db->delete("instructor");
    }
    //funcion para consultar un instructor especifico
    function obtenerPorId($id_ins)
    {
      $this->db->where("id_ins",$id_ins);
      $instructor=$this->db->get('instructor');
      if($instructor->num_rows()>0){
        return $instructor->row();
      }
      return false;
    }
    //funcion para actualizar un instructore
    function actualizar($id_ins,$datos){
      $this->db->where("id_ins",$id_ins);
      return $this->db->update('instructor',$datos);
    }
}//no borrar cierre de la clase

 ?>
