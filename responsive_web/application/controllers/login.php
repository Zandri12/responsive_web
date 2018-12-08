<?php 

class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('modelobjectwisata');
		}
		public function login2(){
		$this->load->view('login');
	}

	public function daftar_proses(){
		$data['login']=$this->modelobjectwisata->modelsimpandaftar();
		redirect('login/daftar','refresh');
		}
	public function daftar(){
		$this->load->view('register');
	}
	
	public function login_proses()
 	{
 		$User = $this->input->POST('username');
 		$Password = $this->input->POST('password');

 		$data = $this->modelobjectwisata->cek_login($User, $Password)->row_array();
 		if($User == $data['user'] && $Password == $data['password']){
 			$session = array(
 				'username'=>$User,
 				'status'=>'login'
 			);
 			//if ($data['user'] == 'admin') {
 			
 		
 			$this->session->set_userdata($session);

 			redirect('objectwisata/admin','refresh');
 			//echo 'login';
 		} else {
 			redirect('login/login2', 'refresh');
 			//echo 'gagal';
 		}
 	}
 	public function logout(){
 			$logout = array('user','status');
 			$this->session->unset_userdata($logout);
 			redirect('login/login2','refresh');
 	}
}
 ?>
