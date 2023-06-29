<?php

  class Instructores extends CI_Controller
  {

    function __construct()
    {
      // LINEAS DE CODIGO PARA SEGURIDAD
       parent::__construct();
       //cargar modelo
       $this->load->model('Instructor');
       if (!$this->session->userdata("conectado")) {
        redirect("welcome/login");
       }
    }
    //funciones que reenderiza a vista index
    public function index()
    {
      $data['instructores']=$this->Instructor->obtenerTodos();
      $this->load->view('header');
      $this->load->view('instructores/index',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('instructores/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
              $datosNuevoInstructor=array(
                "cedula_ins"=>$this->input->post('cedula_ins'),
                "primer_apellido_ins"=>$this->input->post('primer_apellido_ins'),
                "segundo_apellido_ins"=>$this->input->post('segundo_apellido_ins'),
                "nombre_ins"=>$this->input->post('nombre_ins'),
                "titulo_ins"=>$this->input->post('titulo_ins'),
                "telefono_ins"=>$this->input->post('telefono_ins'),
                "direccion_ins"=>$this->input->post('direccion_ins')
              );
              if($this->Instructor->insertar($datosNuevoInstructor)){
                // crear  FLASHDATA
                // siempre que ponemos $this invocamos a CodeIgniter
                $this->session->set_flashdata("confirmacion","Instructor guardado exitosamente");
            }else {
            $this->session->set_flashdata("error","Error al guardar intente de nuevo");
        }
        // Para que pase lo que pase me redirecione al index
        redirect("instructores/index");
    }//Cierre de la funcion Guardar
      // funcion para eliminar instructores
      public function eliminar($id_ins){
        if ($this->session->userdata("conectado")->perfil_usu="ADMINISTRADOR") {
            $this->session->set_flashdata("error","No tiene permisos de eliminar");
            redirect('instructores/index');
        }
        if ($this->Instructor->borrar($id_ins)){//invocando al modelo
            $this->session->set_flashdata("error","Instructor eliminado exitosamente");
        } else {
        $this->session->set_flashdata("error","Error al eliminar intente otra vez");
        }
        redirect('instructores/index');
      }//Ciere de la funcion eliminar

      //function renderizar vista editar con el instructor
      public function editar($id_ins){
        $data["instructorEditar"]=$this->Instructor->obtenerPorId($id_ins);
        $this->load->view('header');
        $this->load->view('instructores/editar',$data);
        $this->load->view('footer');
      }
      // PROCESO DE ACTUALIZAR
      public function procesarActualizacion(){
        $datosEditados=Array(
          "cedula_ins"=>$this->input->post('cedula_ins'),
          "primer_apellido_ins"=>$this->input->post('primer_apellido_ins'),
          "segundo_apellido_ins"=>$this->input->post('segundo_apellido_ins'),
          "nombre_ins"=>$this->input->post('nombre_ins'),
          "titulo_ins"=>$this->input->post('titulo_ins'),
          "telefono_ins"=>$this->input->post('telefono_ins'),
          "direccion_ins"=>$this->input->post('direccion_ins')
        );
        $id_ins=$this->input->post("id_ins");
        if ($this->Instructor->actualizar($id_ins,$datosEditados)) {
          $this->session->set_flashdata("confirmacion","Instructor actualizado exitosamente");
        } else {
        $this->session->set_flashdata("error","Error al actualizar intente otra vez");
        }
          redirect("instructores/index");
      }
  }//cierre de clase

 ?>
