<?php
class usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        //para llamar al modelo
        $this->load->model('usuario_model');
        //el helper siempre se usa apra manejar las rutas de las paginas
        $this->load->helper('url');
    }
    public function index(){
        $data["usuario"]=$this->usuario_model->list_all();
        //echo "Hola Mundo";
        //llamamos a la vista index
        $this->load->view('usuario_index',$data);  
    }
    
    public function nuevo(){
        $this->load->view('usuario_nuevo');
    }
    
    public function save(){
        $nombre=$this->input->post('nombre');
        $apepat=$this->input->post('apepat');
        $this->usuario_model->save($nombre,$apepat);
        redirect('usuario');
    }
    public function delete($usuario_id){
        $this->usuario_model->delete($usuario_id);
        redirect('usuario');
    }
    public function detail($usuario_id) {
          $data["usuario"]= $this->usuario_model->find_by_id($usuario_id);
          $this->load->view('usuario_detail',$data);
        }
}

