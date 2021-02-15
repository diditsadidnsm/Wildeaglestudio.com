<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Logo extends MY_Controller
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
		$data['title']		= 'Admin Page: Manage Logo Website';
		$data['content']	= $this->logo->select(
			[
				'logo.id', 'logo.title', 'logo.site', 'logo.description', 'logo.local', 'logo.type', 'logo.url', 'logo.keyword', 'logo.font', 'logo.color', 'logo.image'
			]
		)
			->orderBy('logo.id', 'desc')
			->paginate($page)
			->get();
		$data['total_rows']	= $this->logo->count();
		$data['pagination']	= $this->logo->makePagination(
			base_url('administrator/logo'),
			2,
			$data['total_rows']
		);
		
		
		$this->load->view('administrator/material/nsm_header', $data);
		$this->load->view('administrator/material/nsm_navbar', $data);
		$this->load->view('administrator/material/nsm_layout');
		$this->load->view('administrator/material/nsm_sidebar');
		$this->load->view('administrator/nsm_logo');
		$this->load->view('administrator/material/nsm_footer');
	}

	public function create()
	{
		if (!$_POST) {
			$input	= (object) $this->logo->getDefaultValues();
		} else {
			$input	= (object) $this->input->post(null, true);
		}

		if (!empty($_FILES) && $_FILES['image']['name'] !== '') {
			$imageName	= url_title($input->title, '-', true) . '-' . date('YmdHis');
			$upload		= $this->logo->uploadImage('image', $imageName);
			if ($upload) {
				$input->image	= $upload['file_name'];
			} else {
				redirect(base_url('administrator/logo/create'));
			}
		}

		if (!$this->logo->validate()) {
			$data['title']			= 'Admin Page: Create Logo Website';
			$data['input']			= $input;
			$data['form_action']	= base_url('administrator/logo/create');

			$this->load->view('administrator/material/nsm_header', $data);
		    $this->load->view('administrator/material/nsm_navbar', $data);
		    $this->load->view('administrator/material/nsm_layout');
		    $this->load->view('administrator/material/nsm_sidebar');
		    $this->load->view('administrator/form/f_logo');
		    $this->load->view('administrator/material/nsm_footer');
			return;
		}

		if ($this->logo->create($input)) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan');
		}

		redirect(base_url('administrator/logo'));
	}

	public function edit($id)
	{
		$data['content'] = $this->logo->where('id', $id)->first();

		if (!$data['content']) {
			$this->session->set_flashdata('warning', 'Maaf, data tidak dapat ditemukan');
			redirect(base_url('administrator/logo'));
		}

		if (!$_POST) {
			$data['input']	= $data['content'];
		} else {
			$data['input']	= (object) $this->input->post(null, true);
		}

		if (!empty($_FILES) && $_FILES['image']['name'] !== '') {
			$imageName	= url_title($data['input']->title, '-', true) . '-' . date('YmdHis');
			$upload		= $this->logo->uploadImage('image', $imageName);
			if ($upload) {
				if ($data['content']->image !== '') {
					$this->logo->deleteImage($data['content']->image);
				}
				$data['input']->image	= $upload['file_name'];
			} else {
				redirect(base_url("administrator/logo/edit/$id"));
			}
		}

		if (!$this->logo->validate()) {
			$data['title']			= 'Admin Page: Edit Primary Produk';
			$data['form_action']	= base_url("administrator/logo/edit/$id");

			$this->load->view('administrator/material/nsm_header', $data);
		    $this->load->view('administrator/material/nsm_navbar', $data);
		    $this->load->view('administrator/material/nsm_layout');
		    $this->load->view('administrator/material/nsm_sidebar');
		    $this->load->view('administrator/form/f_logo');
		    $this->load->view('administrator/material/nsm_footer');
			return;
		}


		if ($this->logo->where('id', $id)->update($data['input'])) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan');
		}

		redirect(base_url('administrator/logo'));
	}

	public function delete($id)
	{
		if (!$_POST) {
			redirect(base_url('administrator/logo'));
		}

		$logo = $this->logo->where('id', $id)->first();

		if (!$logo) {
			$this->session->set_flashdata('warning', 'Maaf, data tidak dapat ditemukan');
			redirect(base_url('administrator/logo'));
		}

		if ($this->logo->where('id', $id)->delete()) {
			$this->logo->deleteImage($logo->image);
			$this->session->set_flashdata('success', 'Data sudah berhasil dihapus!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan!');
		}

		redirect(base_url('administrator/logo'));
	}
}

/* End of file Logo.php */