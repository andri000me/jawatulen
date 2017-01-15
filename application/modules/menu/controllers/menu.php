<?php
/**
* 
*/
class Menu extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_menu');
		$this->load->helper('url', 'form_validation','form');
	}


	function simpan(){
		$data['content_view'] = 'menu/inputbarang_v';
		$this->template->admin_template($data);
	}

	function inputbarang(){

		$data['content_view'] = 'menu/inputbarang_v';
		$this->template->admin_template($data);
	}
	
	function prosesinput()
	{
		
		$namabarang = $this->input->post('namabarang');
		$gambar = $this->input->post('gambar');
		$kategori = $this->input->post('kategori');
		$brand = $this->input->post('brand');
		$deskripsibarang = $this->input->post('deskripsibarang');
		$syaratsewa = $this->input->post('syaratsewa');
		$hargasewa = $this->input->post('hargasewa');
		


		$data = array(
			'namabarang' => $namabarang,
			'gambar' => $gambar,
			'kategori' => $kategori,
			'brand' => $brand,
			'deskripsibarang' => $deskripsibarang,
			'syaratsewa' => $syaratsewa,
			'hargasewa' => $hargasewa,
			);


		$this->m_menu->input_data($data);
		redirect('menu/daftarbarang');
		
	}

	function daftarbarang()
	{
		$data['inputbarang'] = $this->m_menu->tampil_data()->result();
		$data['content_view'] = 'menu/daftarbarang_v';
		$this->template->admin_template($data);
	}

	function edit($idbarang){
		$where = array('idbarang' => $idbarang);
		$data['edit'] = $this->m_menu->edit_data($where, 'inputbarang')->result();
		$data['content_view'] = 'menu/edit_v';
		$this->load->view('template/admin_template_v', $data);
		

	}

	function update(){
		$namabarang = $this->input->post('namabarang');
		$gambar = $this->input->post('gambar');
		$kategori = $this->input->post('kategori');
		$brand = $this->input->post('brand');
		$deskripsibarang = $this->input->post('deskripsibarang');
		$syaratsewa = $this->input->post('syaratsewa');
		$hargasewa = $this->input->post('hargasewa');
		


		$data = array(
			'namabarang' => $namabarang,
			'gambar' => $gambar,
			'kategori' => $kategori,
			'brand' => $brand,
			'deskripsibarang' => $deskripsibarang,
			'syaratsewa' => $syaratsewa,
			'hargasewa' => $hargasewa,
			);


		$where = array(
				'idbarang' => $idbarang
			);

		$this->m_menu->update_data($where,$data,'inputbarang');
		redirect('menu/daftarbarang');
	}

	function hapus($idbarang){
		$where = array('idbarang' => $idbarang);
		$this->m_menu->hapus_data($where,'inputbarang');
		redirect('menu/daftarbarang');
	}

	function daftarsewa()
	{
		$data['content_view'] = 'kategori/daftarsewa_v';
		$this->template->admin_template($data);
	}

	function cekdurasi()
	{
		$data['content_view'] = 'kategori/cekdurasi_v';
		$this->template->admin_template($data);
	}

	
}