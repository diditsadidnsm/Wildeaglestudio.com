<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends MY_Model 
{

	protected $perPage = 1000;

	public function getDefaultValues()
	{
		return [
		    'name'		    => '',
		    'title'		    => '',
		    'description'	=> '',
		    'url'			=> '',
			'image'			=> ''
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
		    [
				'field'	=> 'name',
				'label'	=> 'Name Author',
				'rules'	=> 'trim|required'
			],
		    [
				'field'	=> 'title',
				'label'	=> 'Title Author',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'description',
				'label'	=> 'Testimonial Author',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'url',
				'label'	=> 'URL Autor',
				'rules'	=> 'trim|required'
			],
		];

		return $validationRules;
	}

	public function uploadImage($fieldName, $fileName)
	{
		$config	= [
			'upload_path'		=> './images/client',
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
		if (file_exists("./images/client/$fileName")) {
			unlink("./images/client/$fileName");
		}
	}

}

/* End of file Client_model.php */