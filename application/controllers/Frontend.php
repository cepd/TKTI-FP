<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
    
    function __construct() {

		parent::__construct();

	
		$this->load->model('Dashboard_model');



	

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['kategori'] = $this->Dashboard_model->ambil('kategori');
         $this->load->view('frontend/index',$data);
		
	}
   public function daftar_kuisioner($slug)
   {
     $get_kuisioner = $this->db->get_where('kategori',['slug'=>$slug])->row();
     if($get_kuisioner == null)
        {
            echo "Tidak ada";
        }else{
            $data['slug'] = $get_kuisioner->nama;
            $data['kuisioner'] = $this->Dashboard_model->ambil_where('sub_kategori','id_kategori',$get_kuisioner->id);
            
			
			$this->load->view('frontend/daftar_kuisioner',$data);
        }
   }
   public function kuisioner($id)
   {
	   $data['kuisioner'] = $this->db->get_where('sub_kategori',['id'=>$id])->row();
	   $data['kategori'] = $this->db->get_where('kategori',['id'=>$data['kuisioner']->id_kategori])->row();
	   $this->load->view('frontend/mulai_kuisioner',$data);
   }
   public function pertanyaan($id)
   {
	 
	   
		$data['kuisioner'] = $this->Dashboard_model->ambil_where('kuisioner','id_kategori',$id);
	
		$this->load->view('frontend/kuisioner',$data);
   }
   public function p_hasil($id)
   {
		$data['kuisioner'] = $this->Dashboard_model->ambil_where('kuisioner','id_kategori',$id);
		
		foreach ($data['kuisioner'] as $get)
		{
			

			$this->form_validation->set_rules($get->id, $get->pertanyaan, 'trim|required');
			if ($this->form_validation->run() ==  FALSE) 
        	{	
				$this->Dashboard_model->delete_kuisioner(htmlspecialchars($this->input->post('pengisi')),'jawaban');
				$this->session->set_flashdata('pesan', 'Harap isi semua kuisioner !!');
				redirect('Frontend/pertanyaan/'.$id,'refresh');
         
            }else
            {
                $data = ['id_kuisioner' => $get->id,
						 'pengisi' => htmlspecialchars($this->input->post('pengisi')),
						 'jawaban' => htmlspecialchars($this->input->post($get->id)),
				 
                         
                ];
			
               $this->Dashboard_model->insert('jawaban',$data);
                  
            }
		}
		$this->session->set_flashdata('pesan', 'Berhasil isi data !!');

	
		redirect('Frontend/hasil_akhir/'.htmlspecialchars($this->input->post('pengisi')),'refresh');
   }
   public function hasil_akhir($pengisi)
   {
	//$data = $this->db->select('*')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi);

	$jumlah_level0 = $this->db->select('*')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',0)->count_all_results();
	
	$nilai_level0 = $this->db->select_sum('jawaban.jawaban')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',0)->get()->row()->jawaban;
	
	$hasil_level0 = $nilai_level0 / $jumlah_level0;
	
	
	$jumlah_level1 = $this->db->select('*')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',1)->count_all_results();
	$nilai_level1 = $this->db->select_sum('jawaban.jawaban')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',1)->get()->row()->jawaban;
	
	$hasil_level1 = $nilai_level1 / $jumlah_level1;
	

	$jumlah_level2 = $this->db->select('*')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',2)->count_all_results();
	$nilai_level2 = $this->db->select_sum('jawaban.jawaban')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',2)->get()->row()->jawaban;
	
	$hasil_level2 = $nilai_level2 / $jumlah_level2;

	$jumlah_level3 = $this->db->select('*')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',3)->count_all_results();
	$nilai_level3 = $this->db->select_sum('jawaban.jawaban')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',3)->get()->row()->jawaban;
	
	$hasil_level3 = $nilai_level3 / $jumlah_level3;

	$jumlah_level4 = $this->db->select('*')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',4)->count_all_results();
	$nilai_level4 = $this->db->select_sum('jawaban.jawaban')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',4)->get()->row()->jawaban;
	
	$hasil_level4 = $nilai_level4 / $jumlah_level4;

	$jumlah_level5 = $this->db->select('*')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',5)->count_all_results();
	$nilai_level5 = $this->db->select_sum('jawaban.jawaban')->from('jawaban')->join('kuisioner','kuisioner.id = jawaban.id_kuisioner')->where('pengisi',$pengisi)->where('level',5)->get()->row()->jawaban;
	
	$hasil_level5 = $nilai_level5 / $jumlah_level5;


	$jumlah_tingkat_compliance = $hasil_level0 + $hasil_level1 + $hasil_level2 + $hasil_level3+ $hasil_level4 + $hasil_level5;
  
	

	$compliance_termolisasi_0 = ($hasil_level0/$jumlah_tingkat_compliance ) * 0;
	
	$compliance_termolisasi_1 = ($hasil_level1/$jumlah_tingkat_compliance ) * 1;
	$compliance_termolisasi_2 = ($hasil_level2/$jumlah_tingkat_compliance ) * 2;
	$compliance_termolisasi_3 = ($hasil_level3/$jumlah_tingkat_compliance ) * 3;
	$compliance_termolisasi_4 = ($hasil_level4/$jumlah_tingkat_compliance ) * 4;
	$compliance_termolisasi_5= ($hasil_level5/$jumlah_tingkat_compliance ) * 5;
	
	$hasil_akhir = $compliance_termolisasi_0+$compliance_termolisasi_1+$compliance_termolisasi_2+$compliance_termolisasi_3+$compliance_termolisasi_4+$compliance_termolisasi_5;

	if($hasil_akhir == 0){
		$data = ['hasil' => 'level 0',
				 'pengisi' =>$pengisi,
	
		];
	}elseif($hasil_akhir <= 1)
	{
		$data = ['hasil' => 'level 1',
				'pengisi' =>$pengisi,
	];
	}elseif($hasil_akhir <= 2)
	{
		$data = ['hasil' => 'level 2',
				'pengisi' =>$pengisi,
	];
	}elseif($hasil_akhir <= 3){
		$data = ['hasil' => 'level 3',
				'pengisi' =>$pengisi,	
				];
	}elseif($hasil_akhir <= 4){
		$data = ['hasil' => 'level 4',
				'pengisi' =>$pengisi,
			];
	}elseif($hasil_akhir <= 5){
		$data = ['hasil' => 'level 5',
				'pengisi' =>$pengisi,	
		];
	}
	$this->session->set_userdata($data);
	$this->load->view('frontend/hasil',$data);

	
	//level 1 , jumlah pertanyaan berapa , nilai compliment nya berapa  rumus nya nilaicomplement / jumllah

   }
   public function expected()
   {
	   if($this->session->userdata('hasil')){
			$this->load->view('frontend/expected');
	   }else{
		   echo "gagal harap isi kuisioner";
	   }
   }
   public function hasil($pengisi)
   {
	         $data = ['maturity' => htmlspecialchars($this->input->post('maturity')),
						 'maturity_inginkan' => htmlspecialchars($this->input->post('maturity_inginkan')),
						 'pengisi' => htmlspecialchars($this->input->post('pengisi')),
				 
                         
                ];
			
               $this->Dashboard_model->insert('hasil',$data);
			   $session = ['pengisi','hasil'];
			   $this->session->unset_userdata($session);
			   $data['get'] = $this->db->get_where('hasil',['pengisi' =>$pengisi])->row();
			   $this->load->view('frontend/rekomendasi',$data);

   }
}
