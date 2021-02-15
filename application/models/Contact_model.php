<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends MY_Model 
{

	protected $perPage = 100;

	public function getDefaultValues()
	{
		return [
			'name'		=> '',
			'email'		=> '',
			'subject'	=> '',
			'message'	=> ''
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field'	=> 'name',
				'label'	=> 'Full Name',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'email',
				'label'	=> 'Your Email',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'subject',
				'label'	=> 'Your Subject',
				'rules'	=> 'trim|required|numeric'
			],
			[
				'field'	=> 'message',
				'label'	=> 'Your Message',
				'rules'	=> 'trim|required'
			],
		];

		return $validationRules;
	}

}

/* End of file Contact_model.php */