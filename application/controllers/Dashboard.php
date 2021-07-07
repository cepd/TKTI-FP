<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    function __construct() {

		parent::__construct();

	
		$this->load->model('Dashboard_model');



		if($this->session->userdata('login') != true)

		{

			 $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Login terlebih dahulu !!</div>');

			redirect('Auth','refresh');



		}

	

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
            $this->load->view('dashboard/sidebar');
           $this->load->view('dashboard/kategori_kuisioner',$data);
           $this->load->view('dashboard/footer');
		
	}
    public function kategori_kuisioner()
    {
        $data['kategori'] = $this->Dashboard_model->ambil('kategori');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/kategori_kuisioner',$data);
        $this->load->view('dashboard/footer');
    }
    public function tambah_kategori()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        if ($this->form_validation->run() ==  FALSE) 
        {	
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/tambah_kategori');
            $this->load->view('dashboard/footer');
            }else
            {
                $data = ['nama' => htmlspecialchars($this->input->post('kategori')),
                         'slug' => strtolower(url_title($this->input->post('kategori')))
                ];
               $this->Dashboard_model->insert('kategori',$data);
               $this->session->set_flashdata('pesan', 'Berhasil Tambah data !!');
               redirect('Dashboard/kategori_kuisioner','refresh');
               
            }
    }
    public function hapus_kategori($id)
    {
        $this->session->set_flashdata('pesan', 'Berhasil Hapus data !!');
        $this->Dashboard_model->delete($id,'kategori');
        redirect('Dashboard/kategori_kuisioner','refresh'); 
    }
    public function edit_kategori($id)
    {
       $data['kategori'] = $this->Dashboard_model->getid($id,'kategori');
       $this->load->view('dashboard/sidebar');
       $this->load->view('dashboard/edit_kategori',$data);
       $this->load->view('dashboard/footer');
    }
    public function update_kategori($id)
    {
        $data = ['nama' => htmlspecialchars($this->input->post('kategori')),
                 'slug' => strtolower(url_title($this->input->post('kategori')))
                 ];
        $this->Dashboard_model->update($data,$id,'kategori');
        $this->session->set_flashdata('pesan', 'Berhasil edit data !!');
         redirect('Dashboard/kategori_kuisioner','refresh');

    }
    public function subkategori_kuisioner()
    {
        $select = "*,sub_kategori.nama as nama_kategori , sub_kategori.id as id_sub";
        $table = "sub_kategori";
        $table2 = "kategori";
        $join ="kategori.id = sub_kategori.id_kategori";
        $data['kategori'] = $this->Dashboard_model->join($select,$table,$table2,$join)->result();
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/subkategori_kuisioner',$data);
        $this->load->view('dashboard/footer');
    }
    public function tambah_subkategori()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('subkategori', 'Sub Kategori', 'trim|required');
        if ($this->form_validation->run() ==  FALSE) 
        {	
            $data['kategori'] = $this->Dashboard_model->ambil('kategori');
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/tambah_subkategori',$data);
            $this->load->view('dashboard/footer');
            }else
            {
                $data = ['id_kategori' => htmlspecialchars($this->input->post('kategori')),
                         'nama' => htmlspecialchars($this->input->post('subkategori'))
                ];
               $this->Dashboard_model->insert('sub_kategori',$data);
               $this->session->set_flashdata('pesan', 'Berhasil Tambah data !!');
               redirect('Dashboard/subkategori_kuisioner','refresh');
               
            }
    }
    public function hapus_subkategori($id)
    {
        $this->session->set_flashdata('pesan', 'Berhasil Hapus data !!');
        $this->Dashboard_model->delete($id,'sub_kategori');
        redirect('Dashboard/subkategori_kuisioner','refresh'); 
    }




    public function kuisioner()
    {
        $select = "*,kuisioner.id as id_kuisioner,sub_kategori.id_kategori as kategori";
        $table = "kuisioner";
        $table2 = "sub_kategori";
        $join ="sub_kategori.id = kuisioner.id_kategori";
        $data['kuisioner'] = $this->Dashboard_model->join($select,$table,$table2,$join)->result();
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/kuisioner',$data);
        $this->load->view('dashboard/footer');
    }
    public function tambah_kuisioner()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'trim|required');
        $this->form_validation->set_rules('level', 'Level', 'trim|required');
        if ($this->form_validation->run() ==  FALSE) 
        {	
        $select = "*,sub_kategori.nama as nama_subkategori,sub_kategori.id as id_subkategori";
        $table = "sub_kategori";
        $table2 = "kategori";
        $join ="kategori.id = sub_kategori.id_kategori";
        $data['kategori'] = $this->Dashboard_model->join($select,$table,$table2,$join)->result();
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/tambah_kuisioner',$data);
        $this->load->view('dashboard/footer');
        }else
        {
            $data = ['id_kategori' => htmlspecialchars($this->input->post('kategori')),
                     'pertanyaan' => htmlspecialchars($this->input->post('pertanyaan')),
                     'level' => htmlspecialchars($this->input->post('level')),
                    ];
            $this->Dashboard_model->insert('kuisioner',$data);
            $this->session->set_flashdata('pesan', 'Berhasil Tambah data !!');
            redirect('Dashboard/kuisioner','refresh');
        }
    }
    public function hapus_kuisioner($id)
    {
        $this->session->set_flashdata('pesan', 'Berhasil Hapus data !!');
        $this->Dashboard_model->delete($id,'kuisioner');
        redirect('Dashboard/kuisioner','refresh'); 
    }
    public function logout()
    {
        $session = ['login'];
		$this->session->unset_userdata($session);
        $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Berhasil Logout !!</div>');

        redirect('Auth','refresh');

    }
}
