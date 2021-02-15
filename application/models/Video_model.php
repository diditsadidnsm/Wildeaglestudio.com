<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends MY_Model 
{

	protected $perPage = 20;

	public function getDefaultValues()
	{
		return [
			'name' 	  => '',
			'title'	  => '',
			'book'    => '',
			'url'     => '',
			'youtube' => ''
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field'	=> 'name',
				'label'	=> 'Name Author',
				'rules' => 'trim|required'
			],
			[
				'field'	=> 'title',
				'label'	=> 'Title Author',
				'rules' => 'trim|required'
			],
			[
				'field'	=> 'book',
				'label'	=> 'Title Book',
				'rules' => 'trim|required'
			],
			[
				'field'	=> 'url',
				'label'	=> 'URL Testimonial',
				'rules' => 'trim|required'
			],
			[
				'field'	=> 'youtube',
				'label'	=> 'URL Youtube',
				'rules' => 'trim|required'
			],
		];

		return $validationRules;
	}

}

/* End of file Video_model.php */
