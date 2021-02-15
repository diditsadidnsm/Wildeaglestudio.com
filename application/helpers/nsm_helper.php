<?php

	function getDropdownList($table, $columns)
	{
		$CI		=& get_instance();
		$query	= $CI->db->select($columns)->from($table)->get();

		if ($query->num_rows() >= 1) {
			$option1	= ['' => '- Select -'];
			$option2	= array_column($query->result_array(), $columns[1], $columns[0]);
			$options	= $option1 + $option2;

			return $options;
		}

		return $options	= ['' => '- Select -'];
	}
	
	function getProductDashboard()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('product', 5)->result();
		return $query;
	}
	
	function getLogo()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('logo', 1)->result();
		return $query;
	}
	
	function getAbout()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('about', 1)->result();
		return $query;
	}
	
	function getVideo()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('video', 100)->result();
		return $query;
	}
	
	function getClient()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('client', 100)->result();
		return $query;
	}
	
	function getNavbar()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('navbar', 6)->result();
		return $query;
	}
	
	function getBanner()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('banner', 10)->result();
		return $query;
	}
	
	function getPricing()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('pricing', 12)->result();
		return $query;
	}
	
	function getServices()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('services', 8)->result();
		return $query;
	}

	function getProduct()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('product', 5)->result();
		return $query;
	}

	function getHome()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('product', 100)->result();
		return $query;
	}

	function getCategories()
	{
		$CI		=& get_instance();
		$query	= $CI->db->get('category')->result();
		return $query;
	}

	function hashEncrypt($input)
	{
		$hash	= password_hash($input, PASSWORD_DEFAULT);
		return $hash;
	}

	function hashEncryptVerify($input, $hash)
	{
		if (password_verify($input, $hash)) {
			return true;
		} else {
			return false;
		}
	}