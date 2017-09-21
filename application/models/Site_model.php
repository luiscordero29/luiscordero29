<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Site_model extends CI_MODEL
{
	public function __construct()
	{
		parent::__construct();
	}

	public function contact_mail()
	{

		$nombre 			= $this->input->post('nombre'); 
 		$telefono 			= $this->input->post('telefono'); 
 		$email 				= $this->input->post('email'); 
 		$mensaje 			= $this->input->post('mensaje'); 


		# ENVIO DE CORREO
		$config['protocol'] 	= 'smtp';
		$config['smtp_host'] 	= 'mail.luiscordero29.com';
		$config['smtp_user'] 	= 'info@luiscordero29.com';
		$config['smtp_pass'] 	= 'cggQfKz2MwmTAJUKT6';
		$config['smtp_port'] 	= '25';
		$config['charset'] 		= 'iso-8859-1';
		$config['mailtype'] 	= 'html';

		$this->email->initialize($config);

		$text  = '<h2>DATOS DE CONTACTO</h2>';
		$text .= '<p><b>Nombre:</b> '.$nombre.'</p>';
		$text .= '<p><b>Teléfono:</b> '.$telefono.'</p>';
		$text .= '<p><b>Email:</b> '.$email.'</p>';
		$text .= '<p><b>Mensaje:</b><br /> '.$mensaje.'</p>';

		# ENVIO 
		
		$this->email->to('info@luiscordero29.com');
		$this->email->from('info@luiscordero29.com');
		$this->email->reply_to($email);
		$this->email->subject('CONTACTO VIA WEBSITE');
		$this->email->message($text);

		if ( ! $this->email->send())
		{
			$data['alert']['danger'] = 
			array( 
				'Error al enviar Email',				
			);
		}else{
			$data['alert']['success'] = 
			array( 
				'Gracias por contactarnos',				
			);
		}
		
		return $data; 
	}

}