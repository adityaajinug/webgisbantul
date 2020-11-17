<?php

class M_info extends CI_Model
{
  public function data()
  {
    return $this->db->get('data_dbd')->result_array();
  }
}
