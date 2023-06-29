<?php

  class Usuarios extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       //cargar modelo
       $this->load->model('Usuario');
    }
    //funciones que reenderiza a vista index
    public function index()
    {
      $data['usuarios']=$this->Usuario->obtenerTodos();

      $this->load->view('header');
      $this->load->view('usuarios/index',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('usuarios/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
              $datosNuevoUsuario=array(
                "cedula_us"=>$this->input->post('cedula_us'),
                "primer_apellido_us"=>$this->input->post('primer_apellido_us'),
                "segundo_apellido_us"=>$this->input->post('segundo_apellido_us'),
                "nombre_us"=>$this->input->post('nombre_us'),
                "titulo_us"=>$this->input->post('titulo_us'),
                "telefono_us"=>$this->input->post('telefono_us'),
                "direccion_us"=>$this->input->post('direccion_us')
              );
              if($this->Usuario->insertar($datosNuevoUsuario)){
              redirect ('usuarios/index');
            }else {
              "<h1> ERROR AL INSERTAR</h1>";
        }
    }
      // funcion para eliminar instructores
      public function eliminar($id_us){
        if ($this->Usuario->borrar($id_us)){//invocando al modelo
          redirect('usuarios/index');
        } else {
          echo "ERROR AL BORRAR :(";
        }

      }
  }//cierre de clase

 ?>
