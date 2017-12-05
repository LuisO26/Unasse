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
   public function SaveImages($data){

      $this->db->insert($data['tabla'],$data['datos'] );
   }
   public function getGalerias(){
      $query[0] = $this->db->get('galeria');
      $this->db->select('*');
      $this->db->from('imagenes');
      $this->db->join('galeria', 'galeria.id = imagenes.id_galeria');
      $query[1] = $this->db->get();
      return $query;

      
   }

}
?>