<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pricing extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$role = $this->session->userdata('role');
		if ($role != 'admin') {
			redirect(base_url('/'));
			return;
		}
	}


	public function index($page = null)
	{
		$data['title']		= 'Admin Page: Manage Pricing Page';
		$data['content']	= $this->pricing->paginate($page)->get();
		$data['total_rows']	= $this->pricing->count();
		$data['pagination']	= $this->pricing->makePagination(
			base_url('administrator/pricing'),
			2,
			$data['total_rows']
		);

		$this->load->view('administrator/material/nsm_header', $data);
		$this->load->view('administrator/material/nsm_navbar', $data);
		$this->load->view('administrator/material/nsm_layout');
		$this->load->view('administrator/material/nsm_sidebar');
		$this->load->view('administrator/nsm_pricing');
		$this->load->view('administrator/material/nsm_footer');
	}

	public function create()
	{
		if (!$_POST) {
			$input	= (object) $this->pricing->getDefaultValues();
		} else {
			$input	= (object) $this->input->post(null, true);
        }

		if (!$this->pricing->validate()) {
			$data['title']			= 'Admin Page: Create Pricing Page';
			$data['input']			= $input;
			$data['form_action']	= base_url('administrator/pricing/create');

			$this->load->view('administrator/material/nsm_header', $data);
		    $this->load->view('administrator/material/nsm_navbar', $data);
		    $this->load->view('administrator/material/nsm_layout');
		    $this->load->view('administrator/material/nsm_sidebar');
		    $this->load->view('administrator/form/f_pricing');
		    $this->load->view('administrator/material/nsm_footer');
			return;
		}

		if ($this->pricing->create($input)) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan');
		}

		redirect(base_url('administrator/pricing'));
	}

	public function edit($id)
	{
		$data['content'] = $this->pricing->where('id', $id)->first();

		if (!$data['content']) {
			$this->session->set_flashdata('warning', 'Maaf! Data tidak ditemukan!');
			redirect(base_url('administrator/pricing'));
		}

		if (!$_POST) {
			$data['input']	= $data['content'];
		} else {
			$data['input']	= (object) $this->input->post(null, true);
        }

		if (!$this->pricing->validate()) {
			$data['title']			= 'Admin Page: Edit Category Service';
			$data['form_action']	= base_url("administrator/pricing/edit/$id");

			$this->load->view('administrator/material/nsm_header', $data);
		    $this->load->view('administrator/material/nsm_navbar', $data);
		    $this->load->view('administrator/material/nsm_layout');
		    $this->load->view('administrator/material/nsm_sidebar');
		    $this->load->view('administrator/form/f_pricing');
		    $this->load->view('administrator/material/nsm_footer');
			return;
		}

		if ($this->pricing->where('id', $id)->update($data['input'])) {
			$this->session->set_flashdata('success', 'Data berhasil diperbaharui!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan.');
		}

		redirect(base_url('administrator/pricing'));
	}

	public function delete($id)
	{
		if (!$_POST) {
			redirect(base_url('administrator/pricing'));
		}

		if (!$this->pricing->where('id', $id)->first()) {
			$this->session->set_flashdata('warning', 'Maaf! Data tidak ditemukan.');
			redirect(base_url('administrator/pricing'));
		}

		if ($this->pricing->where('id', $id)->delete()) {
			$this->session->set_flashdata('success', 'Data sudah berhasil dihapus!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan.');
		}

		redirect(base_url('administrator/pricing'));
	}
}

/* End of file Pricing.php */