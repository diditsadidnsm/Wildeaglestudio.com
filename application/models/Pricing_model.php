<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing_model extends MY_Model 
{

	protected $perPage = 20;

	public function getDefaultValues()
	{
		return [
			'title'	        => '',
			'sub'	        => '',
			'description'	=> '',
			'price'         => ''
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field'	=> 'title',
				'label'	=> 'Pricing Title',
				'rules' => 'trim|required'
			],
			[
				'field'	=> 'sub',
				'label'	=> 'Sub Title Pricing',
				'rules' => 'trim|required'
			],
			[
				'field'	=> 'description',
				'label'	=> 'Pricing Description',
				'rules' => 'trim|required'
			],
			[
				'field'	=> 'price',
				'label'	=> 'Price',
				'rules' => 'trim|required'
			],
		];

		return $validationRules;
	}

}

/* End of file Pricing_model.php */
