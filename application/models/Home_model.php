<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends MY_Model
{
	protected $table	= 'product';
	protected $perPage	= 1000;
	
	public function portfolio()
{   
    $query = $this->db->get('product');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

    function get_post_by_slug($slug){ 
        $hsl=$this->db->query("SELECT * FROM product WHERE slug='$slug'");
        return $hsl;
    }

}

/* End of file Home_model.php */