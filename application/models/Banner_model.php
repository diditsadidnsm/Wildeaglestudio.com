<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends MY_Model 
{

	protected $perPage = 1000;

	public function getDefaultValues()
	{
		return [
		    'position'		=> '',
		    'position1'		=> '',
		    'size'			=> '',
		    'font'			=> '',
		    'color'			=> '',
			'title'			=> '',
			'image'			=> ''
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
		    [
				'field'	=> 'position1',
				'label'	=> 'Position X Title Banner',
				'rules'	=> 'trim|required'
			],
		    [
				'field'	=> 'position',
				'label'	=> 'Position Y Title Banner',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'size',
				'label'	=> 'Size Title Banner',
				'rules'	=> 'trim|required'
			],
		    [
				'field'	=> 'font',
				'label'	=> 'Font Title Banner',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'color',
				'label'	=> 'Color Title Banner',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'title',
				'label'	=> 'Title Banner',
				'rules'	=> 'trim|required'
			],
		];

		return $validationRules;
	}

	public function uploadImage($fieldName, $fileName)
	{
		$config	= [
			'upload_path'		=> './images/banner',
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
		if (file_exists("./images/banner/$fileName")) {
			unlink("./images/banner/$fileName");
		}
	}

}

/* End of file Product_model.php */