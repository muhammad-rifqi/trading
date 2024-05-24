<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url', 'file'));
    }

		public function index()
        {

            if($this->session->userdata('user_id')){
                redirect('admin/dashboard');
            }

			$this->load->view('admin/login');
        }
		
        
        public function login()
        {
                $user_id = $this->input->post('user_id');
                $passwords = $this->input->post('password');
                $password = md5($passwords);
               
                $this->load->model('Admin_model', 'proses_login');
                $data['log'] = $this->proses_login->login_process($user_id, $password);
                $cek = count($data['log']);
               
                if ($cek > 0) {
                    $newdata = array(
                        'id' => $data['log'][0]['id'],
                        'user_id' => $data['log'][0]['user_id'],
                        'password' => $data['log'][0]['password']
                    );
                    $this->session->set_userdata($newdata);
                    redirect(base_url() . 'admin/dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>User-ID atau Password salah !</div></div>');
                    redirect('admin');
                }
            
    
        }

        public function dashboard()
        {
            $t['info'] = $this->session->userdata('user_id');
		    if($t['info'] == TRUE){
            $a['header'] =  $this->load->view('layout/header',null, true);
            $a['footer'] =  $this->load->view('layout/footer',null, true);
            $a['content'] =  $this->load->view('admin/dashboard',$t, true);
            $page = $this->load->view('layout/template',$a);
            return $page;
            }else{
                redirect(base_url().'admin');
            }
        }
	
        // ini landing


		
        public function warung()
        {
            $t['info'] = $this->session->userdata('user_id');
		    if($t['info'] == TRUE){
            $this->load->model('Admin_model', 'gudang');
                $t['gudang'] = $this->gudang->listgudang();
                $a['header'] =  $this->load->view('layout/header',null, true);
                $a['footer'] =  $this->load->view('layout/footer',null, true);
                $a['content'] =  $this->load->view('admin/dashboard',$t, true);
                $page = $this->load->view('layout/template',$a);
            }else{
                redirect(base_url().'admin');
            }
        }

        public function tambah_warung()
        {
            $data['title'] = 'Tambah Warung';
            $data['warung_active'] = 'active';
            $this->load->view('layout/header', $data);
            $this->load->view('admin/tambah_warung', $data);
            $this->load->view('layout/footer');
        }

        public function proses_add_warung() {

            $this->load->model('Admin_model','warung');
            $this->warung->insert_warung();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade"><div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>Warung berhasil ditambahkan !</div></div>');
            redirect('admin/warung');
            
        }

        public function edit_warung($id)
        {
            $data['warung_active'] = 'active';
            $this->load->model('admin_model', 'warung');
            $data['warung'] = $this->warung->edit_warung($id);
            $data['title'] = 'Edit warung';
            $this->load->view('layout/header', $data);
            $this->load->view('admin/edit_warung', $data);
            $this->load->view('layout/footer');
        }

        public function proses_ubah_warung() {
            $this->load->model('Admin_model','warung');
            $this->warung->ubah_warung();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>Warung berhasil diubah !</div></div>');
            redirect('admin/warung');
        }


        public function logout()
        {
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('password');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>Anda Berhasil Logout !</div></div>');
            redirect('admin');
        }


        public function errornotfound(){
            $this->load->view('404');
        }


}