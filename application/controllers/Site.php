<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Site_model','',TRUE); 
	}

	public function index()
	{
		$this->load->view('site/index');	
	}

	public function contacto()
	{
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
		$this->form_validation->set_rules('telefono', 'Teléfono', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');		
		$this->form_validation->set_rules('mensaje', 'Mensaje', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('site/contacto');	
		}else{
			$data = $this->Site_model->contact_mail();
			$this->load->view('site/contacto',$data);	
		}
	}
}
