<?php 
class dosen extends CI_Controller{
    // Membuat method index
    public function index(){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        // render data dan kirim data ke dalam view
        $this->load->view('dosen/index',$data);
    }
    public function detail($id){
        // akses model dosen
        $this->load->model('dosen_model');
        $dsn = $this->dosen_model->getById($id);
        $data['dsn'] = $dsn;
        $this->load->view('dosen/detail',$data);
    }
}
?>