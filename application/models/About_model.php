<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About_model extends MY_Model 
{

	protected $perPage = 1;

	public function getDefaultValues()
	{
		return [
			'title'			=> '',
			'fb'			=> '',
			'ig'			=> '',
			'mail'			=> '',
			'wa'			=> '',
			'position'		=> '',
			'message'		=> '',
			'description'	=> '',
			'image'			=> ''
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field'	=> 'title',
				'label'	=> 'About Title',
				'rules'	=> 'trim'
			],
			[
				'field'	=> 'fb',
				'label'	=> 'About Title',
				'rules'	=> 'trim'
			],
			[
				'field'	=> 'ig',
				'label'	=> 'About Title',
				'rules'	=> 'trim'
			],
			[
				'field'	=> 'mail',
				'label'	=> 'About Title',
				'rules'	=> 'trim'
			],
			[
				'field'	=> 'wa',
				'label'	=> 'About Title',
				'rules'	=> 'trim'
			],
			[
				'field'	=> 'position',
				'label'	=> 'Position WA Button',
				'rules'	=> 'trim'
			],
			[
				'field'	=> 'message',
				'label'	=> 'Message WA Button',
				'rules'	=> 'trim'
			],
			[
				'field'	=> 'description',
				'label'	=> 'About Description',
				'rules'	=> 'trim'
			],
		];

		return $validationRules;
	}

	public function uploadImage($fieldName, $fileName)
	{
		$config	= [
			'upload_path'		=> './images/about',
			'file_name'			=> $fileName,
			'allowed_types'		=> 'jpg|gif|png|jpeg|JPG|PNG',
			'max_size'			=> 1024,
			'max_width'			=> 0,
			'max_height'		=> 0,
			'overwrite'			=> true,
			'file_ext_tolower'	=> true
		];

		$this->load->library('upload', $config);

		if ($this->upload->do_upload($fieldName)) {
			return $this->upload->data();
		} else {
			$this->session->set_flashdata('image_error', $this->upload->display_errors('', ''));
			return false;
		}
	}

	public function deleteImage($fileName)
	{
		if (file_exists("./images/about/$fileName")) {
			unlink("./images/about/$fileName");
		}
	}

}

/* End of file About_model.php */