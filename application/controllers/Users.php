<?php
Class Users extends CI_Controller{

	 function index(){
		/*$this->load->model("model_data");*/
		$data = array();
		$this->load->view("data_Users",$data);
	}
		$ function add
		die("ini tampilan dari fungsi add sebelum dilempar ke vew add");
	/*public function add(){
		$this->load->model("model_data");
		$data['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_data->simpan($_POST);
			redirect("data");
		}

		$this->load->view("add_anggota_tni",$data);
	}

	

	public function edit($id){
		$this->load->model("model_data");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_data->get_default($id);

		if(isset($_POST['tombol_submit'])){
			$this->model_data->update($_POST, $id);
			redirect("data");
		}

		$this->load->view("form_karyawan",$data);
	}


	public function delete($id){
		$this->load->model("model_data");
		$this->model_data->hapus($id);
		redirect("data");
	}*/



}