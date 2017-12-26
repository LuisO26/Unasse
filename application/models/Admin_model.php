<?php
   class Admin_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function Logearse($correo, $contrasena){
      $this->db->select('id, nombre');
      $this->db->from('usuarios');
      $this->db->where('correo', $correo);
      $this->db->where('contrasena', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
   public function Save($data){

      $this->db->insert($data['tabla'],$data['datos'] );
      $id = $this->db->insert_id();
      return  $id;
   }
   public function SaveSliders($data){

      $this->db->insert($data['tabla'],$data['datos'] );
      $id = $this->db->insert_id();
      return  $id;
   }
   public function actualizarVideo($titulo,$idVideo){

      $data = array(
        'idVideo' => $idVideo,
        'titulo' => $titulo
        
);
      $this->db->where('id', 1);
      $this->db->update('youtubehome', $data);

      return "modificado";

   }
   public function borrarPdf($data){
      $this->load->helper("file");
      $this->db->select('*');
      $this->db->from('descargas');
      $this->db->where('id', $data);
      $query =  $this->db->get();
      $datas = $query->result();
      foreach ($datas as $row ) {
        # code...
        delete_files('./././'.$row->url);
      }

      $this->db->where('id', $data);
      $this->db->delete('descargas');


      return  'borrado';
   }
   public function borrarGaleria($data){
      $this->load->helper("file");
      $this->db->select('*');
      $this->db->from('imagenes');
      $this->db->where('id_galeria', $data);
      $query =  $this->db->get();
      $datas = $query->result();
      foreach ($datas as $row ) {
        # code...
        delete_files('./././assets/img/galeria/'.$row->nombre);
      }

      $this->db->where('id_galeria', $data);
      $this->db->delete('imagenes');
      $this->db->where('id', $data);
      $this->db->delete('galeria');


      return  'borrado';
   }
   public function borrarSliders(){
      $this->load->helper("file");
      $query =  $this->db->get('home');
      $datas = $query->result();
      foreach ($datas as $row ) {
        # code...
        delete_files('./././'.$row->url);
      }

      $this->db->empty_table('home');


      return  'borrado';
   }
   public function SaveImages($data){

      $this->db->insert($data['tabla'],$data['datos'] );
   }
   public function getData($data){
      $query1 = $this->db->get($data);
      $sql= $query1->result();
      return $sql;

      
   }
   public function getImagesById($data){
      $this->db->select('*');
      $this->db->from('imagenes');
      $this->db->where('id_galeria', $data);
      $query =  $this->db->get();
       if ( $query->num_rows() > 0 )
    {
        $row = $query->row_array();
        return $row;
    }


      
   }
   public function getImagenesById($data){
      $this->db->select('*');
      $this->db->from('imagenes');
      $this->db->where('id_galeria', $data);
      $query =  $this->db->get();
       
        $row = $query->result();
        return $row;


      
   }

}
?>