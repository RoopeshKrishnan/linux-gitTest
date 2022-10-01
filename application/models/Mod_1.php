<?php 

 class Mod_1 extends CI_Model{

function fetch_country(){

  $select =  $this->db->get('country');
  $select_query = $select->result();
  return $select_query;

}

}

?>