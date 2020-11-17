<?php
class Webgis extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_info');
  }

  public function index()
  {
    $data['head'] = 'Pemerintah Kabupaten Bantul';
    $this->load->view('templates/header', $data);
    $this->load->view('website/index');
    $this->load->view('templates/footer');
  }
  public function sejarah()
  {
    $data['head'] = 'Sejarah Kabupaten Bantul';
    $this->load->view('templates/header2', $data);
    $this->load->view('website/sejarah');
    $this->load->view('templates/footer');
  }
  public function visimisi()
  {
    $data['head'] = 'Visi Misi Kabupaten Bantul';
    $this->load->view('templates/header2', $data);
    $this->load->view('website/visimisi');
    $this->load->view('templates/footer');
  }
  public function struktur()
  {
    $data['head'] = 'Struktur Pemerintahan Kabupaten Bantul';
    $this->load->view('templates/header2', $data);
    $this->load->view('website/struktur');
    $this->load->view('templates/footer');
  }
  public function info()
  {

    $data['data_dbd'] = $this->m_info->data();
    $data['data_faskes'] = $this->db->get('data_faskes')->result_array();
    $data['head'] = 'Informasi Statistik Kabupaten Bantul';
    $this->load->view('templates/header2', $data);
    $this->load->view('website/data', $data);
    $this->load->view('templates/footer');

    // return $this->db->get('uts_gis');
  }
}
