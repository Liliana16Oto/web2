<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
	public function login(){
   	 $this->load->view("login");
    }

		public function iniciarSesion()
		{
			$this->load->model("Usuario1");
			$email = $this->input->post("email_usu");
			$password = $this->input->post("password_usu");
			$usuarioConectado = $this->Usuario1->obtenerPorEmailPassword($email, $password);
			if ($usuarioConectado) {
				$this->session->set_userdata("conectado",$usuarioConectado);
				$this->session->set_flashdata("bienvenido","Bienvenido al sistema ".$usuarioConectado->nombre_usu);
				redirect("welcome/index");
			} else {
				redirect("welcome/login");
			}
		}
		// FUCCION PARA SERRAR
		public function cerrarSesion()
		{
			$this->session->sess_destroy();
			redirect("welcome/login");
		}//cierre de la funcion serrar
}//Cierre de la clase
