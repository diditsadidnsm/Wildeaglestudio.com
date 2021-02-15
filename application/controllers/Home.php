<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    function __construct(){ 
        parent::__construct();
        $this->load->model('home');  
 
    }

	public function index($page = null)
	{
		
		$ip         = $this->input->ip_address(); 
        $date       = date("Y-m-d"); 
        $waktu      = time(); 
        $timeinsert = date("Y-m-d H:i:s");
        $s          = $this->db->query("SELECT * FROM visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
		$ss         = isset($s)?($s):0;
		
            if($ss == 0){
                $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
            }
            else{
                $this->db->query("UPDATE visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
            }
        $pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='".$date."' GROUP BY ip")->num_rows();
        $dbpengunjung       = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row(); 
        $totalpengunjung    = isset($dbpengunjung->hits)?($dbpengunjung->hits):0;
        $bataswaktu         = time() - 300;
		$pengunjungonline   = $this->db->query("SELECT * FROM visitor WHERE online > '".$bataswaktu."'")->num_rows();
		
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung']   = $totalpengunjung;
		$data['pengunjungonline']  = $pengunjungonline;
		$data['totalportfolio']    = $this->home->portfolio();
			
		$data['content']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
			->join('category')
			->join('back')
			->orderBy('product.id', 'desc')
			->where('product.id_category', 12)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 12)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$data['content1']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
			->join('category')
			->join('back')
			->orderBy('product.id', 'asc')
			->where('product.id_category', 12)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 12)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$data['content2']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
			->join('category')
			->join('back')
			->orderBy('product.id', 'desc')
			->where('product.id_category', 10)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 10)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$data['content3']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
			->join('category')
			->join('back')
			->orderBy('product.id', 'asc')
			->where('product.id_category', 10)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 10)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$data['content4']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
			->join('category')
			->join('back')
			->orderBy('product.id', 'desc')
			->where('product.id_category', 11)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 11)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$data['content10']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
			->join('category')
			->join('back')
			->orderBy('product.id', 'asc')
			->where('product.id_category', 11)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 11)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$data['content5']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
			->join('category')
			->join('back')
			->orderBy('product.id', 'asc')
			->where('product.id_category', 13)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 13)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$data['content6']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
			->join('category')
			->join('back')
			->orderBy('product.id', 'desc')
			->where('product.id_category', 19)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 19)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$data['content11']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
			->join('category')
			->join('back')
			->orderBy('product.id', 'asc')
			->where('product.id_category', 19)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 19)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$data['content7']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'back.image AS back_image', 'category.slug AS category_slug'
			]
		)
			->join('category')
			->join('back')
			->where('product.id_category', 20)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 20)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$data['content8']	= $this->home->select(
			[
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
			->join('category')
			->join('back')
			->where('product.id_category', 21)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.id_category', 21)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		
		$this->load->view('layouts/_header', $data);
	    $this->load->view('layouts/_navbar', $data);
	    $this->load->view('pages/home/index', $data);
	    $this->load->view('layouts/_footer');
		return;

	}
	
	public function detail($slug, $page = null)
	{
		$slug = $this->uri->segment(3);
		$data['rows'] = $this->home->select(
		    [
				'product.id', 'product.id_category', 'product.slug AS product_slug', 'product.title AS product_title',
				'product.intro AS product_intro', 'product.description', 'product.image',
				'product.price', 'product.is_available',
			    'category.title AS category_title', 'category.slug AS category_slug', 'back.image AS back_image'
			]
		)
		    ->join('category')
		    ->join('back')
		    ->where('product.slug', $slug)
		    ->get();
		$this->load->view('layouts/_header', $data);
		$this->load->view('pages/home/detail', $data);
		return;
	}
	
	function kirimEmail()
	{
        $nama       = $this->input->post('nama'); 
        $email      = $this->input->post('email');
        $subject    = $this->input->post('subject');
        $message    = $this->input->post('message');
 
        $this->sendEmail($nama,$email,$subject,$message);  
        redirect('home'); 
    }
 
    function sendEmail($nama,$email,$subject,$message)
    {
        $this->load->library('PHPMailer_load'); 
        $mail = $this->phpmailer_load->load(); 
        $mail->isSMTP();  
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true; 
        $mail->Username = 'priokusn@gmail.com';
        $mail->Password = 'kenzirana1315';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('noreply@wildeaglestudio.com', 'Contact for you'); 
        $mail->addAddress($email,'WildEagles'); 
        $mail->Subject = "'$subject'"; 
        $mail->msgHtml("
            <h3>$nama</h3><hr>
                <br>
                $message
            "); 
 
 
        if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    //echo "Message sent!";
                } // Kirim email dengan cek kondisi
    }

}

/* End of file Home.php */