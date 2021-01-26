<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Login extends CI_Controller
{

	public function index()
	{
		$data = array(
			'titulo' => 'Login',
		);

			$this->load->view('layout/header', $data);
			$this->load->view('login/index');
			$this->load->view('layout/footer');
		}

	public function auth()
	{
		$identity = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$remenber = FALSE;

		if ($this->ion_auth->login($identity, $password, $remenber)) {

			redirect('/');

		}else{

			$this->session->set_flashdata('error', 'Verifique seu e-mail e/ou senha!');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->ion_auth->logout();
		redirect('login');
	}


}
