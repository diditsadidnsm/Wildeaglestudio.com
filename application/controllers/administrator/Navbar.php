<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Navbar extends MY_Controller
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
		$data['title']		= 'Admin Page: Manage Navigation Bar';
		$data['content']	= $this->navbar->paginate($page)->get();
		$data['total_rows']	= $this->navbar->count();
		$data['pagination']	= $this->navbar->makePagination(
			base_url('administratornavbar'),
			2,
			$data['total_rows']
		);

		$this->load->view('administrator/material/nsm_header', $data);
		$this->load->view('administrator/material/nsm_navbar', $data);
		$this->load->view('administrator/material/nsm_layout');
		$this->load->view('administrator/material/nsm_sidebar');
		$this->load->view('administrator/nsm_navbar');
		$this->load->view('administrator/material/nsm_footer');
	}

	public function create()
	{
		if (!$_POST) {
			$input	= (object) $this->navbar->getDefaultValues();
		} else {
			$input	= (object) $this->input->post(null, true);
        }

		if (!$this->navbar->validate()) {
			$data['title']			= 'Admin Page: Create Navigation Bar';
			$data['input']			= $input;
			$data['form_action']	= base_url('administrator/navbar/create');

			$this->load->view('administrator/material/nsm_header', $data);
		    $this->load->view('administrator/material/nsm_navbar', $data);
		    $this->load->view('administrator/material/nsm_layout');
		    $this->load->view('administrator/material/nsm_sidebar');
		    $this->load->view('administrator/form/f_navbar');
		    $this->load->view('administrator/material/nsm_footer');
			return;
		}

		if ($this->navbar->create($input)) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan');
		}

		redirect(base_url('administrator/navbar'));
	}

	public function edit($id)
	{
		$data['content'] = $this->navbar->where('id', $id)->first();

		if (!$data['content']) {
			$this->session->set_flashdata('warning', 'Maaf! Data tidak ditemukan!');
			redirect(base_url('administrator/navbar'));
		}

		if (!$_POST) {
			$data['input']	= $data['content'];
		} else {
			$data['input']	= (object) $this->input->post(null, true);
        }

		if (!$this->navbar->validate()) {
			$data['title']			= 'Admin Page: Edit Category Service';
			$data['form_action']	= base_url("administrator/navbar/edit/$id");

			$this->load->view('administrator/material/nsm_header', $data);
		    $this->load->view('administrator/material/nsm_navbar', $data);
		    $this->load->view('administrator/material/nsm_layout');
		    $this->load->view('administrator/material/nsm_sidebar');
		    $this->load->view('administrator/form/f_navbar');
		    $this->load->view('administrator/material/nsm_footer');
			return;
		}

		if ($this->navbar->where('id', $id)->update($data['input'])) {
			$this->session->set_flashdata('success', 'Data berhasil diperbaharui!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan.');
		}

		redirect(base_url('administrator/navbar'));
	}

	public function delete($id)
	{
		if (!$_POST) {
			redirect(base_url('administrator/navbar'));
		}

		if (!$this->navbar->where('id', $id)->first()) {
			$this->session->set_flashdata('warning', 'Maaf! Data tidak ditemukan.');
			redirect(base_url('administrator/navbar'));
		}

		if ($this->navbar->where('id', $id)->delete()) {
			$this->session->set_flashdata('success', 'Data sudah berhasil dihapus!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan.');
		}

		redirect(base_url('administrator/navbar'));
	}

	public function unique_slug()
	{
		$slug		= $this->input->post('slug');
		$id			= $this->input->post('id');
		$navbar	    = $this->navbar->where('slug', $slug)->first();

		if ($navbar) {
			if ($id == $navbar->id) {
				return true;
			}
			$this->load->library('form_validation');
			$this->form_validation->set_message('unique_slug', '%s sudah digunakan!');
			return false;
		}

		return true;
	}
}

/* End of file Navbar.php */