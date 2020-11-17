<?php
class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['head'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/headerad', $data);
    $this->load->view('templates/sidebarad', $data);
    $this->load->view('templates/topbarad', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footerad');
  }
  public function data_faskes()
  {
    $data['head'] = 'Data Faskes';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['data_faskes'] = $this->db->get('data_faskes')->result_array();
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('longtitude', 'Longtitude', 'required|trim');
    $this->form_validation->set_rules('latitude', 'latitude', 'required|trim');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
    $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
    $this->form_validation->set_rules('kota/kab', 'Kota/Kab', 'required|trim');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/headerad', $data);
      $this->load->view('templates/sidebarad', $data);
      $this->load->view('templates/topbarad', $data);
      $this->load->view('admin/faskes', $data);
      $this->load->view('templates/footerad');
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'longtitude' => $this->input->post('longtitude'),
        'latitude' => $this->input->post('latitude'),
        'alamat' => $this->input->post('alamat'),
        'kecamatan' => $this->input->post('kecamatan'),
        'kota/kab' => $this->input->post('kota/kab'),
        'kategori' => $this->input->post('kategori'),

      ];
      $this->db->insert('data_faskes', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data Faskes telah ditambahkan
    </div>');
      redirect('admin/data_faskes');
    }
  }
  public function hapus_faskes($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('data_faskes');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah dihapus
    </div>');
    redirect('admin/data_faskes');
  }
  public function edit_faskes($id)
  {
    $data['head'] = 'Edit Faskes';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['faskes'] = $this->db->get_where('data_faskes', ['id' => $id])->row_array();

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('longtitude', 'Longtitude', 'required|trim');
    $this->form_validation->set_rules('latitude', 'latitude', 'required|trim');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
    $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
    $this->form_validation->set_rules('kota/kab', 'Kota/Kab', 'required|trim');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/headerad', $data);
      $this->load->view('templates/sidebarad', $data);
      $this->load->view('templates/topbarad', $data);
      $this->load->view('admin/edit_faskes', $data);
      $this->load->view('templates/footerad');
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'longtitude' => $this->input->post('longtitude'),
        'latitude' => $this->input->post('latitude'),
        'alamat' => $this->input->post('alamat'),
        'kecamatan' => $this->input->post('kecamatan'),
        'kota/kab' => $this->input->post('kota/kab'),
        'kategori' => $this->input->post('kategori'),
      ];
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('data_faskes', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah diubah
    </div>');
      redirect('admin/data_faskes');
    }
  }

  public function hapus_dbd($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('data_dbd');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah dihapus
    </div>');
    redirect('admin/data_dbd');
  }
  public function edit_dbd($id_kec)
  {
    $data['head'] = 'Edit Data DBD';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['dbd'] = $this->db->get_where('data_dbd', ['id_kec' => $id_kec])->row_array();

    $this->form_validation->set_rules('kode_kab', 'Kode Kab', 'required|trim');
    $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
    $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim');
    if ($this->form_validation->run() == false) {

      $this->load->view('templates/headerad', $data);
      $this->load->view('templates/sidebarad', $data);
      $this->load->view('templates/topbarad', $data);
      $this->load->view('admin/edit_dbd', $data);
      $this->load->view('templates/footerad');
    } else {
      $data = [
        'kode_kab' => $this->input->post('kode_kab'),
        'kecamatan' => $this->input->post('kecamatan'),
        'jumlah' => $this->input->post('jumlah'),

      ];
      $this->db->where('id_kec', $this->input->post('id_kec'));
      $this->db->update('data_dbd', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah diubah
    </div>');
      redirect('admin/data_dbd');
    }
  }
  public function data_dbd()
  {
    $data['head'] = 'Data DBD';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['data_dbd'] = $this->db->get('data_dbd')->result_array();

    $this->load->view('templates/headerad', $data);
    $this->load->view('templates/sidebarad', $data);
    $this->load->view('templates/topbarad', $data);
    $this->load->view('admin/dbd', $data);
    $this->load->view('templates/footerad');
  }
}
