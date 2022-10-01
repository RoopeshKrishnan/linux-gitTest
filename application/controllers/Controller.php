<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	
	public function index()
	{  

    $data['all_country'] = $this->mod_1->fetch_country();
		$this->load->view('dropview',$data);
	}

public function get_state(){

	$country_id = $_POST['country_id'];

	$select = $this->db->get('state');
	$select_query = $select->result();

	echo'
	
	
	
	';

	foreach($select_query as $row1){


	}

}














}
