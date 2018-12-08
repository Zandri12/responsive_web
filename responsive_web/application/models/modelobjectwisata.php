<?php
class Modelobjectwisata extends CI_model{
	public function tampilkan(){
		$data_object=$this->db->get('objeck_wisata');//mengambil table
		return $data_object;

}
public function tampilkan_gallery(){
		$data_gallery=$this->db->get('gallery');//mengambil table
		return $data_gallery;
}
public function tampilkan_artikel(){
		$data_artikel=$this->db->get('artikel');//mengambil table
		return $data_artikel;
}
	public function modelsimpanobject(){
		$config['upload_path']='./images/';
        $config['max_size']=10240;
        $config['allowed_types']='jpg|jpeg|gif|png';
        $this->upload->initialize($config);
        if($this->upload->do_upload('gambar')){

	 	$foto=$this->upload->data();
	 	$data=$foto['file_name'];

	 	$objectwisata=array(
						'nama' =>$this->input->post('nama'),
						'alamat' =>$this->input->post('alamat'),
						'jam_buka' =>$this->input->post('jambuka'),
						'jam_tutup' =>$this->input->post('jamtutup'),
						'keterangan' =>$this->input->post('keterangan'),
						'gambar' =>$data);

		$this->db->insert('objeck_wisata',$objectwisata);
		}
	}

	public function ambil_data($id_objek){

		$this->db->where('id_objek',$id_objek);
	$data=$this->db->get('objeck_wisata');
	return $data;
	}
	public function ambil_data_object($id_objek){
	 	$this->db->where('id_objek',$id_objek);
	 	$data=$this->db->get('objeck_wisata');
	 	return $data;
	}
	public function delete_object($id_objek){
	 	$this->db->where('id_objek',$id_objek);
	 	$this->db->delete('objeck_wisata');
}
 	public function simpan_update_data(){
	 	$id_objek=$this->input->post('id_objek');
		 $data=$this->input->post('foto_lama');
		 if(empty($_files['gambar']['name'])){
	 	$objectwisata=array(
						'nama' =>$this->input->post('nama'),
						'alamat' =>$this->input->post('alamat'),
						'jam_buka' =>$this->input->post('jambuka'),
						'jam_tutup' =>$this->input->post('jamtutup'),
						'keterangan' =>$this->input->post('keterangan'),
						'gambar' =>$data
	);

	}else{
		$config['upload_path']='./images/';
        $config['max_size']=10240;
        $config['allowed_types']='jpg|jpeg|gif|png';
        $this->upload->initialize($config);
        if($this->upload->do_upload('gambar')){

	 	$foto=$this->upload->data();
	 	$data=$foto['file_name'];

	 	$objectwisata=array(
						'nama' =>$this->input->post('nama'),
						'alamat' =>$this->input->post('alamat'),
						'jam_buka' =>$this->input->post('jambuka'),
						'jam_tutup' =>$this->input->post('jamtutup'),
						'keterangan' =>$this->input->post('keterangan'),
						'gambar' =>$data);
			}
		}
		$this->db->where('id_objek',$id_objek);
	 	$this->db->update('objeck_wisata',$objectwisata);
	}

	//gallery
public function modelsimpangallery(){
		$config['upload_path']='./images/';
        $config['max_size']=10240;
        $config['allowed_types']='jpg|jpeg|gif|png';
        $this->upload->initialize($config);
        if($this->upload->do_upload('gambar')){

	 	$fot=$this->upload->data();
	 	$data=$fot['file_name'];

	 	$objectgallery=array(
						'judul' =>$this->input->post('judul'),
						'keterangan' =>$this->input->post('keterangan'),
						'gambar' =>$data);

		$this->db->insert('gallery',$objectgallery);
		}
	}
	public function delete_gallery($id_gallery){
	 	$this->db->where('id_gallery',$id_gallery);
	 	$this->db->delete('gallery');
}
public function ambil_gallery($id_gallery){

		$this->db->where('id_gallery',$id_gallery);
	$geel=$this->db->get('gallery');
	return $geel;
	}
	public function simpan_update_gallery(){
	 	$id_gallery=$this->input->post('id_gallery');
		 $data=$this->input->post('foto_lama');
		 if(empty($_files['gambar']['name'])){
	 	$cobagal=array(
						'judul' =>$this->input->post('judul'),
						'keterangan' =>$this->input->post('keterangan'),
						'gambar' =>$data);

	}else{
		$config['upload_path']='./images/';
        $config['max_size']=10240;
        $config['allowed_types']='jpg|jpeg|gif|png';
        $this->upload->initialize($config);
        if($this->upload->do_upload('gambar')){

	 	$foto=$this->upload->data();
	 	$data=$foto['file_name'];

	 	$cobagal=array(
						'judul' =>$this->input->post('judul'),
						'keterangan' =>$this->input->post('keterangan'),
						'gambar' =>$data);
			}
		}
		$this->db->where('id_gallery',$id_gallery);
	 	$this->db->update('gallery',$cobagal);
	}












	//artikel

	public function modelsimpanartikel(){
		$config['upload_path']='./images/';
        $config['max_size']=10240;
        $config['allowed_types']='jpg|jpeg|gif|png';
        $this->upload->initialize($config);
        if($this->upload->do_upload('gambar')){

	 	$fot=$this->upload->data();
	 	$data=$fot['file_name'];

	 	$objectartikel=array(
						'judul' =>$this->input->post('judul'),
	 					'isi' =>$this->input->post('isi'),
	 					'penulis' =>$this->input->post('penulis'),
						'gambar' =>$data);
						

		$this->db->insert('artikel',$objectartikel);
		}
	}
	public function delete_artikel($id_artikel){
	 	$this->db->where('id_artikel',$id_artikel);
	 	$this->db->delete('artikel');
}
public function ambil_artikel($id_artikel){

		$this->db->where('id_artikel',$id_artikel);
	$arti=$this->db->get('artikel');
	return $arti;
	}
public function simpan_update_artikel(){
	 	$id_artikel=$this->input->post('id_artikel');
		 $data=$this->input->post('foto_lama');
		 if(empty($_files['gambar']['name'])){
	 	$cobaart=array(
						'judul' =>$this->input->post('judul'),
	 					'isi' =>$this->input->post('isi'),
	 					'penulis' =>$this->input->post('penulis'),
						'gambar' =>$data);

	}else{
		$config['upload_path']='./images/';
        $config['max_size']=10240;
        $config['allowed_types']='jpg|jpeg|gif|png';
        $this->upload->initialize($config);
        if($this->upload->do_upload('gambar')){

	 	$foto=$this->upload->data();
	 	$data=$foto['file_name'];

	 	$cobaart=array(
						'judul' =>$this->input->post('judul'),
	 					'isi' =>$this->input->post('isi'),
	 					'penulis' =>$this->input->post('penulis'),
						'gambar' =>$data);

			}
		}
		$this->db->where('id_artikel',$id_artikel);
	 	$this->db->update('artikel',$cobaart);
	}









	//register


	public function modelsimpandaftar(){
		$register=array(
						'user' =>$this->input->post('user'),
						'password' =>$this->input->post('password'),
						'level' =>$this->input->post('level'));


		$this->db->insert('login',$register);
		$this->load->view('login');
	}

	//login

	public function cek_login($User,$Password)
{
	$this->db->where('user',$User);
	$this->db->where('password',$Password);
	$data = $this->db->get('login');
	return $data;
		}
	
}
?>