<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class masuk extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('Data_model','dm');
		}

		public function index()
		{
			if ($this->session->userdata('id')) {
				redirect('dashboard');
			}
			$this->form_validation->set_rules('u', 'Username', 'trim|required');
			$this->form_validation->set_rules('p', 'Password', 'trim|required');
			if($this->form_validation->run() == false){
				$this->load->view('header');
				$this->load->view('form_login');
				$this->load->view('footer');
			}else{
				$where = array(
	 			 	'user_name' => $this->input->post('u'),
	 			 	'password' => $this->input->post('p')
	 			);
	 			$user = $this->dm->getData("tbl_admin",$where);

				if ($user) {
					$user_session  = array(
							'user_name' => $user['user_name'],
					 		'id' => $user['id']
						);
					$this->session->set_userdata($user_session);
					redirect('dashboard');
				}else{
					$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Gagal Melakukan Login </div>');
					redirect('masuk');
				}
			}
		}

		public function registrasi()
		{

			$this->form_validation->set_rules('un','Username', 'required');
        	$this->form_validation->set_rules('psw','Password', 'required');
        	if ($this->form_validation->run() == FALSE) {
        		$this->load->view('header');
				$this->load->view('form_add_user');
				$this->load->view('header');
        	}else{
        		
				$foto = $_FILES['nfp']['name'];
				if ($foto) {
		        	$pecah = explode('.', $foto);
		        	$nama_foto = "defalut.".$pecah[1];

	                $config['upload_path'] = './assets/gambars/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = 2000;
					$config['max_width'] = 1024;
					$config['max_height'] = 1024;
					$config['file_name'] = $nama_foto;
					
	                $this->load->library('upload', $config);

	                if ($this->upload->do_upload('nfp')) {
	                    $new_image = $this->upload->data('file_name');
	                } else {
	                    echo $this->upload->dispay_errors();
	                }
	           	}
	           	$data = array(
					'user_name' => $this->input->post('un'),  
					'password' => $this->input->post('psw'),
					'nama_file_photo1' => $new_image
				);
				$this->dm->insertData('tbl_admin',$data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun anda telah terdaftar, Silahkan Login</div>');
           		redirect('masuk');
        	}
				
		}

		public function logout(){
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('user_name');

			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Berhasil Logout</div>');
			redirect('masuk');
		}
	}
