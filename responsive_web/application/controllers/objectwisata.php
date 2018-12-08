<?php 
/**
 * 
 */
class Objectwisata extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('modelobjectwisata');

	}

	public function index(){
		$this->load->view('include/header');
         $this->load->view('tambahobjectwisata');
         $this->load->view('include/footer');
	}
	public function simpanobjectwisata(){
		$data['objectwisata']=$this->modelobjectwisata->modelsimpanobject();
		redirect('objectwisata/tampil','refresh');
		}
	
	public function editobjectwisata(){
	$data['objeck_wisata'] =$this->modelobjectwisata->ambil_data($id_objek)->row_array();
			$this->load->view('objectwisataadmin',$data);
		}
	public function tampil()
		{
			$data['objectwisataadmin']= $this->modelobjectwisata->tampilkan()->result_array();
			$this->load->view('include/header');
			$this->load->view('objectwisataadmin', $data);
			$this->load->view('include/div');
			$this->load->view('include/footer');

		}
	public function tambah_data_proses(){
			$this->modelobjectwisata->ambil_data();
			redirect ('objectwisata/tampil','refresh');
		}
	public function delete_object($id_objek){
			$this->modelobjectwisata->delete_object($id_objek);
			redirect('objectwisata/tampil','refresh');
		}
	public function editdataobject($id_objek){
			$data['objeck_wisata'] =$this->modelobjectwisata->ambil_data($id_objek)->row_array();
			$this->load->view('editobjectwisata',$data);
		}
	public function update_object($id_objek){
			$data['objeck_wisata']=$this->modelobjectwisata->ambil_data_object($id_objek)->row_array();
			$this->load->view('editobjectwisata',$data);
		}
	public function update_object_proses(){
			$this->modelobjectwisata->simpan_update_data();
			redirect('Objectwisata/tampil','refresh');
		}


		//gallery 
		public function simpangalery(){
		$data['objectwisata']=$this->modelobjectwisata->modelsimpangallery();
		redirect('objectwisata/muncul','refresh');
		}
		public function muncul()
		{
			$gall['isigallery']= $this->modelobjectwisata->tampilkan_gallery()->result_array();
			$this->load->view('include/header');
			$this->load->view('isigallery', $gall);
			$this->load->view('include/div');
			$this->load->view('include/footer');

		}
		public function delete_gallery($id_gallery){
			$this->modelobjectwisata->delete_gallery($id_gallery);
			redirect('objectwisata/muncul','refresh');
		}
		public function edit_gallery($id_gallery){
			$data['gallery'] =$this->modelobjectwisata->ambil_gallery($id_gallery)->row_array();
			$this->load->view('editgallery',$data);
		}
		public function update_gallery_proses(){
			$this->modelobjectwisata->simpan_update_gallery();
			redirect('Objectwisata/muncul','refresh');
		}
		public function inigal(){
		$this->load->view('include/header');
         $this->load->view('galery');
         $this->load->view('include/div');
         $this->load->view('include/footer');
	}







	//artikel

	public function simpanartikel(){
		$data['objectwisata']=$this->modelobjectwisata->modelsimpanartikel();
		redirect('objectwisata/show','refresh');
		}
		public function show()
		{
			$art['isiartikel']= $this->modelobjectwisata->tampilkan_artikel()->result_array();
			$this->load->view('include/header');
			$this->load->view('isiartikel', $art);
			$this->load->view('include/div');
			$this->load->view('include/footer');

		}
		public function iniart(){
		$this->load->view('include/header');
         $this->load->view('tambah_artikel');
         $this->load->view('include/div');
         $this->load->view('include/footer');
	}
	public function delete_artikel($id_artikel){
			$this->modelobjectwisata->delete_artikel($id_artikel);
			redirect('objectwisata/show','refresh');
		}
		public function edit_artikel($id_artikel){
			$data['artikel'] =$this->modelobjectwisata->ambil_artikel($id_artikel)->row_array();
			$this->load->view('editartikel',$data);
		}
		public function update_artikel_proses(){
			$this->modelobjectwisata->simpan_update_artikel();
			redirect('Objectwisata/show','refresh');
		}





		//user

		public function data_user()
		{
			$art['isiartikel']= $this->modelobjectwisata->tampilkan_artikel()->result_array();
			$this->load->view('include/header_user');
			$this->load->view('arti', $art);
			$this->load->view('include/div_user');
			$this->load->view('include/footer_user');

		}

		//gallery
		public function data_jell()
		{
			$gall['isigallery']= $this->modelobjectwisata->tampilkan_gallery()->result_array();
			$this->load->view('include/header_user');
			$this->load->view('gall', $gall);
			$this->load->view('include/div_user');
			$this->load->view('include/footer_user');

		}










		//home_admin


		public function admin(){
			$this->load->view('home_admin');
		}

		//home user

		public function user(){
			$this->load->view('home_user');

		}
	}

?>