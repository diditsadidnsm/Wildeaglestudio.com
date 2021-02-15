<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends MY_Controller
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
		$data['title']		= 'Admin Page: Manage About Page';
		$data['content']	= $this->about->select(
			[
				'about.id', 'about.title', 'about.fb', 'about.ig', 'about.mail', 'about.wa', 'about.position', 'about.message', 'about.description', 'about.image'
			]
		)
			->orderBy('about.id', 'desc')
			->paginate($page)
			->get();
		$data['total_rows']	= $this->about->count();
		$data['pagination']	= $this->about->makePagination(
			base_url('administrator/about'),
			2,
			$data['total_rows']
		);
		
		
		$this->load->view('administrator/material/nsm_header', $data);
		$this->load->view('administrator/material/nsm_navbar', $data);
		$this->load->view('administrator/material/nsm_layout');
		$this->load->view('administrator/material/nsm_sidebar');
		$this->load->view('administrator/nsm_about');
		$this->load->view('administrator/material/nsm_footer');
	}

	public function create()
	{
		if (!$_POST) {
			$input	= (object) $this->about->getDefaultValues();
		} else {
			$input	= (object) $this->input->post(null, true);
		}

		if (!empty($_FILES) && $_FILES['image']['name'] !== '') {
			$imageName	= url_title($input->title, '-', true) . '-' . date('YmdHis');
			$upload		= $this->about->uploadImage('image', $imageName);
			if ($upload) {
				$input->image	= $upload['file_name'];
			} else {
				redirect(base_url('administrator/about/create'));
			}
		}

		if (!$this->about->validate()) {
			$data['title']			= 'Admin Page: Create About Page';
			$data['input']			= $input;
			$data['form_action']	= base_url('administrator/about/create');

			$this->load->view('administrator/material/nsm_header', $data);
		    $this->load->view('administrator/material/nsm_navbar', $data);
		    $this->load->view('administrator/material/nsm_layout');
		    $this->load->view('administrator/material/nsm_sidebar');
		    $this->load->view('administrator/form/f_about');
		    $this->load->view('administrator/material/nsm_footer');
			return;
		}

		if ($this->about->create($input)) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan');
		}

		redirect(base_url('administrator/about'));
	}

	public function edit($id)
	{
		$data['content'] = $this->about->where('id', $id)->first();

		if (!$data['content']) {
			$this->session->set_flashdata('warning', 'Maaf, data tidak dapat ditemukan');
			redirect(base_url('administrator/about'));
		}

		if (!$_POST) {
			$data['input']	= $data['content'];
		} else {
			$data['input']	= (object) $this->input->post(null, true);
		}

		if (!empty($_FILES) && $_FILES['image']['name'] !== '') {
			$imageName	= url_title($data['input']->title, '-', true) . '-' . date('YmdHis');
			$upload		= $this->about->uploadImage('image', $imageName);
			if ($upload) {
				if ($data['content']->image !== '') {
					$this->about->deleteImage($data['content']->image);
				}
				$data['input']->image	= $upload['file_name'];
			} else {
				redirect(base_url("administrator/about/edit/$id"));
			}
		}

		if (!$this->about->validate()) {
			$data['title']			= 'Admin Page: Edit Primary Produk';
			$data['form_action']	= base_url("administrator/about/edit/$id");

			$this->load->view('administrator/material/nsm_header', $data);
		    $this->load->view('administrator/material/nsm_navbar', $data);
		    $this->load->view('administrator/material/nsm_layout');
		    $this->load->view('administrator/material/nsm_sidebar');
		    $this->load->view('administrator/form/f_about');
		    $this->load->view('administrator/material/nsm_footer');
			return;
		}


		if ($this->about->where('id', $id)->update($data['input'])) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan');
		}

		redirect(base_url('administrator/about'));
	}

	public function delete($id)
	{
		if (!$_POST) {
			redirect(base_url('administrator/about'));
		}

		$about = $this->about->where('id', $id)->first();

		if (!$about) {
			$this->session->set_flashdata('warning', 'Maaf, data tidak dapat ditemukan');
			redirect(base_url('administrator/about'));
		}

		if ($this->about->where('id', $id)->delete()) {
			$this->about->deleteImage($about->image);
			$this->session->set_flashdata('success', 'Data sudah berhasil dihapus!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan!');
		}

		redirect(base_url('administrator/about'));
	}
}

/* End of file About.php */