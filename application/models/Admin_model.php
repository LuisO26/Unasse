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

      $this->db->insert($data['tabla'],$data['tabla'] );
   }
   public function SaveImages($data){

      $this->db->insert($data['tabla'],array('titulo'=>$data['titulo'], 'descripcion'=>$data['descripcion'], 'fecha'=>date('Y-m-d')));
   }
}
?>