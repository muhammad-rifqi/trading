<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url','file'));
}

public function login_process($user_id,$password)
	{
		$sql = $this->db->query("select * from users where user_id='".$user_id."' and password='".$password."'");
		$data = $sql->result_array();
		return $data;
	}


public function getwarung($limit,$start,$keyword)
{
	
	$sql = $this->db->query("select * from warung where nama_warung like '%".$keyword."%' limit ".$limit.", ".$start."");
	return $sql;

}


public function getwarungdetail($id)
{
	
	$sql = $this->db->query("SELECT * from warung where id = '".$id."'")->result_array();
	return $sql;

}
public function insert_warung(){

	$foto = str_replace(" ", "_", $_FILES['foto']['name']);
	$url = base_url('assets/upload/warung/' . $foto);
	if (!empty($foto)) {
		$tujuan_file = realpath(APPPATH . '../assets/upload/warung/');
		$konfigurasi = array(
			'allowed_types' => 'jpg|jpeg|png|bmp|JPG',
			'upload_path' => $tujuan_file,
			'remove_spaces' => true,
			'file_name' => $foto,
		);

		$this->load->library('upload', $konfigurasi);
		$this->upload->do_upload('foto');
		$this->upload->data();

		$data = array(
			'nama_warung' => $this->input->post('nama_warung'),
			//'pajak_perhari' => $this->input->post('pajak_perhari'),
			//'total_terjual' => $this->input->post('total_terjual'),
			'tanggal' => $this->input->post('tanggal') ,
			'keterangan' => $this->input->post('keterangan'),
			'alamat' => $this->input->post('alamat'),
			'kontak' => $this->input->post('kontak'),
			'foto' => $url,
			'modify' => date('Y-m-d'),
		);
		$query = $this->db->insert('warung', $data);
		if($query){
			$email = strtolower(str_replace(" ","",$this->input->post('nama_warung'))).'@localhost';
			$d = array(
				'id_warung'=> $this->db->insert_id(),
				'username' => $this->input->post('nama_warung'),
				'email' => $email,
				'password' => md5('12345')
			);

			return $this->db->insert('user', $d);
		}


	} else {

	
		$data = array(
			'nama_warung' => $this->input->post('nama_warung'),
			//'pajak_perhari' => $this->input->post('pajak_perhari'),
			//'total_terjual' => $this->input->post('total_terjual'),
			'tanggal' => $this->input->post('tanggal') ,
			'keterangan' => $this->input->post('keterangan'),
			'alamat' => $this->input->post('alamat'),
			'kontak' => $this->input->post('kontak'),
			'modify' => date('Y-m-d'),
		);
		$query = $this->db->insert('warung', $data);

		if($query){
			$email = strtolower(str_replace(" ","",$this->input->post('nama_warung'))).'@localhost';
			$d = array(
				'id_warung'=> $this->db->insert_id(),
				'username' => $this->input->post('nama_warung'),
				'email' => $email,
				'password' => md5('12345')
			);

			return $this->db->insert('user', $d);
		}
	}


}

public function edit_warung($id)
{
	$sql = $this->db->query("select * from warung where id = '".$id."'");
	$data = $sql->result_array();
	return $data;
}
public function hapus_warung($id)
{
  $this->db->where('id',$id);
  $this->db->delete('warung');
}


public function ubah_warung()
{
	$id = $this->input->post('id');
	$foto = str_replace(" ", "_", $_FILES['foto']['name']);
	$url = base_url('assets/upload/warung/' . $foto);
	if (!empty($foto)) {
		$tujuan_file = realpath(APPPATH . '../assets/upload/warung/');
		$konfigurasi = array(
			'allowed_types' => 'jpg|jpeg|png|bmp|JPG',
			'upload_path' => $tujuan_file,
			'remove_spaces' => true,
			'file_name' => $foto,
		);

		$this->load->library('upload', $konfigurasi);
		$this->upload->do_upload('foto');
		$this->upload->data();

		$data = array(
			'nama_warung' => $this->input->post('nama_warung'),
			'pajak_perhari' => $this->input->post('pajak_perhari'),
			'total_terjual' => $this->input->post('total_terjual'),
			'tanggal' => $this->input->post('tanggal') ,
			'keterangan' => $this->input->post('keterangan'),
			'alamat' => $this->input->post('alamat'),
			'kontak' => $this->input->post('kontak'),
			'foto' => $url,
			'modify' => date('Y-m-d'),
		);

		$this->db->where('id',$id);
		$this->db->update('warung', $data);

	} else {

	
		$data = array(
			'nama_warung' => $this->input->post('nama_warung'),
			'pajak_perhari' => $this->input->post('pajak_perhari'),
			'total_terjual' => $this->input->post('total_terjual'),
			'tanggal' => $this->input->post('tanggal') ,
			'keterangan' => $this->input->post('keterangan'),
			'alamat' => $this->input->post('alamat'),
			'kontak' => $this->input->post('kontak'),
			'modify' =>date('Y-m-d'),
		);

		$this->db->where('id',$id);
		$this->db->update('warung', $data);

	}
}

} 

