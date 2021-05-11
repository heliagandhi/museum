<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Data_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getData($tabel,$where)
		{
			return $this->db->get_where($tabel,$where)->row_array();
		}

		public function getAllData($tabel)
		{
			return $this->db->get($tabel)->result_array();
		}

		public function updateData($tabel,$where,$kode)
		{
			$this->db->set($where);
			$this->db->where($kode);
			$this->db->update($tabel);
		}

		public function insertData($table, $data){
			$this->db->insert($table,$data);
		}

		public function getFour($tabel,$where)
		{
			return $this->db->order_by($where, 'desc')->limit(4)->get($tabel)->result_array();
		}

		public function getData_struktur($tabel)
		{
			return $this->db->limit(1)->get($tabel)->row_array();
		}



		public function getLastData($tabel)
		{
			return $this->db->order_by('kode_unit', 'desc')->limit(1)->get($tabel)->row_array();
		}

		public function deleteData($tabel,$data)
		{

			$this->db->delete($tabel,$data);
		}

		public function updateData1($tabel,$where)
		{
			$this->db->set($where);
			$this->db->where('kode_pemimpin', $this->session->userdata('kode_pemimpin'));
			$this->db->update($tabel);
		}

		public function getLastData1($tabel)
		{
			return $this->db->order_by('kode_pemimpin', 'desc')->limit(1)->get($tabel)->row_array();
		}

		public function updateData2($tabel,$where,$kode)
		{
			$this->db->set($where);
			$this->db->where('kode_pengajuan', $kode);
			$this->db->update($tabel);
		}

		public function updateData3($tabel,$where)
		{
			$this->db->set($where);
			$this->db->where('kode_pku', $this->session->userdata('kode_pku'));
			$this->db->update($tabel);
		}

		public function getJoin()
		{
			$this->db->select('tbl_user.nama_lengkap, tbl_pengajuan.*');
			$this->db->from('tbl_pengajuan');
			$this->db->join('tbl_user','tbl_user.kode_user = tbl_pengajuan.kode_user');
			return $this->db->get()->result_array();
		}

		public function getLastData2($tabel)
		{
			return $this->db->order_by('kode_pengajuan', 'desc')->limit(1)->get($tabel)->row_array();
		}

		public function insertDataBatch($tabel,$data)
		{
			$this->db->insert_batch($tabel,$data);
		}

		public function getJoin2()
		{
			$this->db->select('*');
			$this->db->from('tbl_pengajuan');
			$this->db->join('tbl_barang','tbl_barang.kode_pengajuan = tbl_pengajuan.kode_pengajuan');
			return $this->db->get()->result_array();
		}

		public function getJoin2_notnull()
		{
			$this->db->select('*');
			$this->db->from('tbl_pengajuan');
			$this->db->join('tbl_barang','tbl_barang.kode_pengajuan = tbl_pengajuan.kode_pengajuan');
			$this->db->where('status_akhir !=','');
			return $this->db->get()->result_array();
		}

		public function getJoin2_where($kode)
		{
			$this->db->select('*');
			$this->db->from('tbl_pengajuan');
			$this->db->join('tbl_barang','tbl_barang.kode_pengajuan = tbl_pengajuan.kode_pengajuan');
			$this->db->where('kategori',$kode);
			return $this->db->get()->result_array();
		}

		public function updateData_Kegiatan($tabel,$where,$kode)
		{
			$this->db->set($where);
			$this->db->where('kode_kegiatan', $kode);
			$this->db->update($tabel);
		}

		public function getAllData_barang($tabel,$where)
		{
			$this->db->where($where);
			return $this->db->get($tabel)->result_array();
		}

		public function updateData_Barang($tabel,$where,$kode)
		{
			$this->db->set($where);
			$this->db->where('kode_barang', $kode);
			$this->db->update($tabel);
		}

		public function getLastData2_where($tabel,$where)
		{
			$this->db->where('kategori',$where);
			return $this->db->order_by('kode_pengajuan', 'desc')->limit(1)->get($tabel)->row_array();
		}
	}