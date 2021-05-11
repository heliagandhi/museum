<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class dashboard extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('Data_model','dm');
		}

		public function index()
		{
			if (!$this->session->userdata('id')) {
            	$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Silahkan Login Terlebih Dahulu</div>');
            	redirect('masuk');
        	}
			$data['active_dashboard'] = "active";
			$where['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where);
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/topbar');
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/index');
			$this->load->view('dashboard/footer');
			$this->load->view('dashboard/foot');
		}

		public function berita()
		{
			$data['active_berita'] = "active";
			$data['berita'] = $this->dm->getAllData('tbl_berita');
			$where['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where);
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/topbar');
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/berita');
			$this->load->view('dashboard/footer');
			$this->load->view('dashboard/foot');
		}

		public function hapus_berita($kode)
		{
			$data['id_berita'] = $kode;
			$this->dm->deleteData('tbl_berita',$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
			redirect('dashboard/berita');
		}

		public function tambah_berita()
		{	
			$data['active_berita'] = "active";
			$this->form_validation->set_rules('jb', 'Judul Berita', 'trim|required');
			$this->form_validation->set_rules('tgl', 'Tanggal', 'trim|required');
			$where['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where);
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/topbar');
				$this->load->view('dashboard/sidebar');
				$this->load->view('dashboard/tambah_berita');
				$this->load->view('dashboard/footer');
				$this->load->view('dashboard/foot');
			}else{
				$foto = $_FILES['nfp']['name'];
				if ($foto) {
		        	$pecah = explode('.', $foto);
		        	$nama_foto = $this->input->post('jb').".".$pecah[1];

	                $config['upload_path'] = './assets/gambars/berita/';
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
					'jdl_berita' => $this->input->post('jb'), 
					'tgl_berita' => $this->input->post('tgl'), 
					'isi_berita' => $this->input->post('isi'), 
					'gambar' => $new_image
				);
				$this->dm->insertData('tbl_berita',$data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita Berhasil ditambahkan </div>');
           		redirect('dashboard/berita');
			}
			
		}

		public function ubah_berita($kode)
		{
			$data['active_berita'] = "active";
			$this->form_validation->set_rules('jb', 'Judul Berita', 'trim|required');
			$this->form_validation->set_rules('tgl', 'Tanggal', 'trim|required');
			$where1['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where1);
			$where['id_berita'] = $kode;
			$data['berita'] = $this->dm->getData('tbl_berita',$where);
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/topbar');
				$this->load->view('dashboard/sidebar');
				$this->load->view('dashboard/ubah_berita');
				$this->load->view('dashboard/footer');
				$this->load->view('dashboard/foot');
			}else{
				$foto = $_FILES['nfp']['name'];
				if ($foto) {
		        	$pecah = explode('.', $foto);
		        	$nama_foto = $this->input->post('jb').".".$pecah[1];

	                $config['upload_path'] = './assets/gambars/berita/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = 10000;
					$config['max_width'] = 3024;
					$config['max_height'] = 3024;
					$config['file_name'] = $nama_foto;
					$old_image = $data['berita']['gambar'];

					if ($old_image != 'default.jpg') {
	                        unlink(FCPATH . 'assets/gambars/berita/' . $old_image);
	                }
	                $this->load->library('upload', $config);

	                if ($this->upload->do_upload('nfp')) {
	                    $new_image = $this->upload->data('file_name');
	                    $data_gambar['gambar'] = $new_image;
	                    $where['id_berita'] = $kode;
	                    $this->dm->updateData('tbl_berita',$data_gambar,$where);
	                } else {
	                    echo $this->upload->dispay_errors();
	                }
	           	}
	           	$data_berita = array(
					'jdl_berita' => $this->input->post('jb'),  
					'tgl_berita' => $this->input->post('tgl'),
					'isi_berita' => $this->input->post('isi')
				);
				$where['id_berita'] = $kode;
	           	$this->dm->updateData('tbl_berita',$data_berita,$where);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
           		redirect('dashboard/berita');
			}
			
		}



		public function event()
		{
			$data['active_event'] = "active";
			$data['event'] = $this->dm->getAllData('tbl_event');
			$where['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where);
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/topbar');
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/event');
			$this->load->view('dashboard/footer');
			$this->load->view('dashboard/foot');
		}

		public function hapus_event($kode)
		{
			$data['id'] = $kode;
			$this->dm->deleteData('tbl_event',$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
			redirect('dashboard/event');
		}

		public function tambah_event()
		{	
			$data['active_event'] = "active";
			$this->form_validation->set_rules('jb', 'Judul Berita', 'trim|required');
			$this->form_validation->set_rules('tgl', 'Tanggal', 'trim|required');
			$where['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where);
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/topbar');
				$this->load->view('dashboard/sidebar');
				$this->load->view('dashboard/tambah_event');
				$this->load->view('dashboard/footer');
				$this->load->view('dashboard/foot');
			}else{
				$foto = $_FILES['nfp']['name'];
				if ($foto) {
		        	$pecah = explode('.', $foto);
		        	$nama_foto = $this->input->post('jb').".".$pecah[1];

	                $config['upload_path'] = './assets/gambars/events/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = 10000;
					$config['max_width'] = 3024;
					$config['max_height'] = 3024;
					$config['file_name'] = $nama_foto;
					
	                $this->load->library('upload', $config);

	                if ($this->upload->do_upload('nfp')) {
	                    $new_image = $this->upload->data('file_name');
	                } else {
	                    echo $this->upload->dispay_errors();
	                }
	           	}
				$data = array(
					'nama_event' => $this->input->post('jb'), 
					'tanggal' => $this->input->post('tgl'), 
					'isi_event' => $this->input->post('isi'), 
					'gambar' => $new_image
				);
				$this->dm->insertData('tbl_event',$data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita Berhasil ditambahkan </div>');
           		redirect('dashboard/event');
			}
			
		}

		public function ubah_event($kode)
		{
			$data['active_event'] = "active";
			$this->form_validation->set_rules('jb', 'Judul Event', 'trim|required');
			$this->form_validation->set_rules('tgl', 'Tanggal', 'trim|required');
			$where1['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where1);
			$where['id'] = $kode;
			$data['event'] = $this->dm->getData('tbl_event',$where);
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/topbar');
				$this->load->view('dashboard/sidebar');
				$this->load->view('dashboard/ubah_event');
				$this->load->view('dashboard/footer');
				$this->load->view('dashboard/foot');
			}else{
				$foto = $_FILES['nfp']['name'];
				if ($foto) {
		        	$pecah = explode('.', $foto);
		        	$nama_foto = $this->input->post('jb').".".$pecah[1];

	                $config['upload_path'] = './assets/gambars/events/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = 10000;
					$config['max_width'] = 3024;
					$config['max_height'] = 3024;
					$config['file_name'] = $nama_foto;
					$old_image = $data['event']['gambar'];

					if ($old_image != 'default.jpg') {
	                        unlink(FCPATH . 'assets/gambars/events/' . $old_image);
	                }
	                $this->load->library('upload', $config);

	                if ($this->upload->do_upload('nfp')) {
	                    $new_image = $this->upload->data('file_name');
	                    $data_gambar['gambar'] = $new_image;
	                    $where['id'] = $kode;
	                    $this->dm->updateData('tbl_event',$data_gambar,$where);
	                } else {
	                    echo $this->upload->dispay_errors();
	                }
	           	}
	           	$data_event = array(
					'nama_event' => $this->input->post('jb'),  
					'tanggal' => $this->input->post('tgl'),
					'isi_event' => $this->input->post('isi')
				);
				$where['id'] = $kode;
	           	$this->dm->updateData('tbl_event',$data_event,$where);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
           		redirect('dashboard/event');
			}
			
		}



		public function fasilitas()
		{
			$data['active_fasilitas'] = "active";
			$data['fasilitas'] = $this->dm->getAllData('fasilitas');
			$where['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where);
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/topbar');
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/fasilitas');
			$this->load->view('dashboard/footer');
			$this->load->view('dashboard/foot');
		}

		public function hapus_fasilitas($kode)
		{
			$data['id_fasilitas'] = $kode;
			$this->dm->deleteData('fasilitas',$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
			redirect('dashboard/fasilitas');
		}

		public function tambah_fasilitas()
		{	
			$data['active_fasilitas'] = "active";
			$this->form_validation->set_rules('nf', 'Nama Fasilitas', 'trim|required');
			$this->form_validation->set_rules('if', 'Isi Fasilitas', 'trim|required');
			$where['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where);
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/topbar');
				$this->load->view('dashboard/sidebar');
				$this->load->view('dashboard/tambah_fasilitas');
				$this->load->view('dashboard/footer');
				$this->load->view('dashboard/foot');
			}else{
				$foto = $_FILES['nfp']['name'];
				if ($foto) {
		        	$pecah = explode('.', $foto);
		        	$nama_foto = $this->input->post('nf').".".$pecah[1];

	                $config['upload_path'] = './assets/gambars/fasilitas/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = 10000;
					$config['max_width'] = 3024;
					$config['max_height'] = 3024;
					$config['file_name'] = $nama_foto;
					
	                $this->load->library('upload', $config);

	                if ($this->upload->do_upload('nfp')) {
	                    $new_image = $this->upload->data('file_name');
	                } else {
	                    echo $this->upload->dispay_errors();
	                }
	           	}
				$data = array(
					'nama_fasilitas' => $this->input->post('nf'),  
					'isi_fasilitas' => $this->input->post('if'), 
					'gambar' => $new_image
				);
				$this->dm->insertData('fasilitas',$data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita Berhasil ditambahkan </div>');
           		redirect('dashboard/fasilitas');
			}
			
		}

		public function ubah_fasilitas($kode)
		{
			$data['active_fasilitas'] = "active";
			$this->form_validation->set_rules('nf', 'Nama fasilitas', 'trim|required');
			$this->form_validation->set_rules('if', 'Isi Fasilitas', 'trim|required');
			$where1['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where1);
			$where['id_fasilitas'] = $kode;
			$data['fasilitas'] = $this->dm->getData('fasilitas',$where);
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/topbar');
				$this->load->view('dashboard/sidebar');
				$this->load->view('dashboard/ubah_fasilitas');
				$this->load->view('dashboard/footer');
				$this->load->view('dashboard/foot');
			}else{
				$foto = $_FILES['nfp']['name'];
				if ($foto) {
		        	$pecah = explode('.', $foto);
		        	$nama_foto = $this->input->post('nf').".".$pecah[1];

	                $config['upload_path'] = './assets/gambars/fasilitas/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = 10000;
					$config['max_width'] = 3024;
					$config['max_height'] = 3024;
					$config['file_name'] = $nama_foto;
					$old_image = $data['fasilitas']['gambar'];

					if ($old_image != 'default.jpg') {
	                        unlink(FCPATH . 'assets/gambars/fasilitas/' . $old_image);
	                }
	                $this->load->library('upload', $config);

	                if ($this->upload->do_upload('nfp')) {
	                    $new_image = $this->upload->data('file_name');
	                    $data_gambar['gambar'] = $new_image;
	                    $where['id_fasilitas'] = $kode;
	                    $this->dm->updateData('fasilitas',$data_gambar,$where);
	                } else {
	                    echo $this->upload->dispay_errors();
	                }
	           	}
	           	$data_event = array(
					'nama_fasilitas' => $this->input->post('nf'),  
					'isi_fasilitas' => $this->input->post('if')
				);
				$where['id_fasilitas'] = $kode;
	           	$this->dm->updateData('fasilitas',$data_event,$where);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
           		redirect('dashboard/fasilitas');
			}
			
		}



		public function struktur()
		{
			$data['active_struktur'] = "active";
			$data['struktur'] = $this->dm->getAllData('strukturorganisasi');
			$where['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where);
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/topbar');
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/struktur');
			$this->load->view('dashboard/footer');
			$this->load->view('dashboard/foot');
		}

		public function hapus_struktur($kode)
		{
			$data['id_gambar'] = $kode;
			$this->dm->deleteData('strukturorganisasi',$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
			redirect('dashboard/struktur');
		}

		public function tambah_struktur()
		{	
			$data['active_struktur'] = "active";
			$this->form_validation->set_rules('ng', 'Nama Gambar', 'trim|required');
			$where['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where);
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/topbar');
				$this->load->view('dashboard/sidebar');
				$this->load->view('dashboard/tambah_struktur');
				$this->load->view('dashboard/footer');
				$this->load->view('dashboard/foot');
			}else{
				$foto = $_FILES['nfp']['name'];
				if ($foto) {
		        	$pecah = explode('.', $foto);
		        	$nama_foto = $this->input->post('ng').".".$pecah[1];

	                $config['upload_path'] = './assets/gambars/struktur/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = 10000;
					$config['max_width'] = 3024;
					$config['max_height'] = 3024;
					$config['file_name'] = $nama_foto;
					
	                $this->load->library('upload', $config);

	                if ($this->upload->do_upload('nfp')) {
	                    $new_image = $this->upload->data('file_name');
	                } else {
	                    echo $this->upload->dispay_errors();
	                }
	           	}
				$data = array(
					'gambar' => $new_image
				);
				$this->dm->insertData('strukturorganisasi',$data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita Berhasil ditambahkan </div>');
           		redirect('dashboard/struktur');
			}
			
		}

		public function ubah_struktur($kode)
		{
			$data['active_struktur'] = "active";
			$this->form_validation->set_rules('ig', 'Nama fasilitas', 'trim|required');
			$where1['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where1);
			$where['id_gambar'] = $kode;
			$data['struktur'] = $this->dm->getData('strukturorganisasi',$where);
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/topbar');
				$this->load->view('dashboard/sidebar');
				$this->load->view('dashboard/ubah_struktur');
				$this->load->view('dashboard/footer');
				$this->load->view('dashboard/foot');
			}else{
				$foto = $_FILES['nfp']['name'];
				if ($foto) {
		        	$pecah = explode('.', $foto);
		        	$nama_foto = $this->input->post('ig').".".$pecah[1];

	                $config['upload_path'] = './assets/gambars/struktur/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = 10000;
					$config['max_width'] = 3024;
					$config['max_height'] = 3024;
					$config['file_name'] = $nama_foto;
					$old_image = $data['struktur']['gambar'];

					if ($old_image != 'default.jpg') {
	                        unlink(FCPATH . 'assets/gambars/struktur/' . $old_image);
	                }
	                $this->load->library('upload', $config);

	                if ($this->upload->do_upload('nfp')) {
	                    $new_image = $this->upload->data('file_name');
	                    $data_gambar['gambar'] = $new_image;
	                    $where['id_gambar'] = $kode;
	                    $this->dm->updateData('strukturorganisasi',$data_gambar,$where);
	                } else {
	                    echo $this->upload->dispay_errors();
	                }
	           	}
	   //         	$data_event = array(
				// 	'nama_fasilitas' => $this->input->post('nf'),  
				// 	'isi_fasilitas' => $this->input->post('if')
				// );
				// $where['id_fasilitas'] = $kode;
	   //         	$this->dm->updateData('fasilitas',$data_event,$where);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
           		redirect('dashboard/struktur');
			}
			
		}


		public function pesan()
		{
			$data['active_pesan'] = "active";
			$data['pesan'] = $this->dm->getAllData('pesan');
			$where['id'] = $this->session->userdata('id');
			$data['admin'] = $this->dm->getData('tbl_admin',$where);
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/topbar');
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/pesan');
			$this->load->view('dashboard/footer');
			$this->load->view('dashboard/foot');
		}
	}