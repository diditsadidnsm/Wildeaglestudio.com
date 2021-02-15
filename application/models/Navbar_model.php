<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Navbar_model extends MY_Model 
{

	protected $perPage = 20;

	public function getDefaultValues()
	{
		return [
			'title'	=> '',
			'url' => ''
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field'	=> 'title',
				'label'	=> 'Title Navbar',
				'rules' => 'trim|required'
			],
			[
				'field'	=> 'url',
				'label'	=> 'URL Navbar',
				'rules' => 'trim|required'
			],
		];

		return $validationRules;
	}

}

/* End of file Navbar_model.php */
