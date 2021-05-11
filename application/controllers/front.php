<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class front extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('Data_model','dm');
		}

		public function index()
		{
			$data['active_dashboard'] = "active";
			$data['fasilitas'] = $this->dm->getAllData('fasilitas');
			$data['terkini'] = $this->dm->getFour('tbl_berita','id_berita');
			
			
			/*$jumlah_data = $this->dm->jumlah_data();
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 10;
			$data['user'] = $this->dm->data($config['per_page'],$from);*/
		
			$this->load->view('front/header',$data);
			$this->load->view('front/topbar');
			$this->load->view('front/index');
			$this->load->view('front/berita_terkini');
			$this->load->view('front/footer');
			$this->load->view('front/foot');
		}

		public function profile()
		{
			$data['active_profile'] = "active";
			$data['terkini'] = $this->dm->getFour('tbl_berita','id_berita');
			$data['struktur'] = $this->dm->getData_struktur('strukturorganisasi');
			$this->load->view('front/header',$data);
			$this->load->view('front/topbar');
			$this->load->view('front/profile');
			$this->load->view('front/berita_terkini');
			$this->load->view('front/footer');
			$this->load->view('front/foot');
		}

		public function berita()
		{
			$data['active_berita'] = "active";
			$data['terkini'] = $this->dm->getFour('tbl_berita','id_berita');
			$this->load->view('front/header',$data);
			$this->load->view('front/topbar');
			$this->load->view('front/berita');
			$this->load->view('front/berita_terkini');
			$this->load->view('front/footer');
			$this->load->view('front/foot');
		}

		public function event()
		{
			$data['active_event'] = "active";
			$data['terkini'] = $this->dm->getFour('tbl_berita','id_berita');
			$data['event'] = $this->dm->getFour('tbl_event','id');
			$this->load->view('front/header',$data);
			$this->load->view('front/topbar');
			$this->load->view('front/event');
			$this->load->view('front/berita_terkini');
			$this->load->view('front/footer');
			$this->load->view('front/foot');
		}

		public function fasilitas()
		{
			$data['active_fasilitas'] = "active";
			$data['fasilitas'] = $this->dm->getAllData('fasilitas');
			$data['terkini'] = $this->dm->getFour('tbl_berita','id_berita');
			$this->load->view('front/header',$data);
			$this->load->view('front/topbar');
			$this->load->view('front/fasilitas');
			$this->load->view('front/berita_terkini');
			$this->load->view('front/footer');
			$this->load->view('front/foot');
		}

		public function pesan()
		{
			$data['active_pesan'] = "active";
			$data['terkini'] = $this->dm->getFour('tbl_berita','id_berita');
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('front/header',$data);
				$this->load->view('front/topbar');
				$this->load->view('front/pesan');
				$this->load->view('front/berita_terkini');
				$this->load->view('front/footer');
				$this->load->view('front/foot');
			}else{
				$data = array(
					'nama' => $this->input->post('nama'), 
					'email' => $this->input->post('email'), 
					'isi' => $this->input->post('pesan')
				);
				$this->dm->insertData('pesan',$data);
				$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Pesan Berhasil Dikirim</div>');
				redirect('front/pesan');
			}
			
		}

		public function isi1($tabel,$kode)
		{
			$data['active_berita'] = "active";
			$tabel1 = "tbl_".$tabel;
			$id['id_berita'] = $kode;
			$data['isi'] = $this->dm->getData($tabel1,$id);
			$data['tabel'] = $tabel;
			$data['terkini'] = $this->dm->getFour('tbl_berita','id_berita');

			$this->load->view('front/header',$data);
			$this->load->view('front/topbar');
			$this->load->view('front/isi');
			$this->load->view('front/berita_terkini');
			$this->load->view('front/footer');
			$this->load->view('front/foot');
		}
		public function isi2($tabel,$kode)
		{
			$data['active_event'] = "active";
			$tabel1 = "tbl_".$tabel;
			$id['id'] = $kode;
			$data['isi'] = $this->dm->getData($tabel1,$id);
			$data['tabel'] = $tabel;
			$data['terkini'] = $this->dm->getFour('tbl_berita','id_berita');

			$this->load->view('front/header',$data);
			$this->load->view('front/topbar');
			$this->load->view('front/isi2');
			$this->load->view('front/berita_terkini');
			$this->load->view('front/footer');
			$this->load->view('front/foot');
		}
	}