<?php defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }

    public function pesan() {
        // $this->form_validation->set_rules('nm_lengkap', 'Nama Lengkap', 'required');

        // if ($this->form_validation->run() == true) {

            $id_negara = "M0124";
            $nm_negara = "Malaysia";
            $jml_peserta = $this->input->post('jml_peserta');
            $tgl_berangkat = $this->input->post('tgl_berangkat');
            $tgl_pulang = $this->input->post('tgl_pulang');
            $nm_lengkap = $this->input->post('nm_lengkap');
            $no_ktp = $this->input->post('no_ktp');
            $no_paspor = $this->input->post('no_paspor');
            $jns_kelamin = $this->input->post('jns_kelamin');
            $no_telepon = $this->input->post('no_telepon');
            $almt_email = $this->input->post('almt_email');
            $pswt_terbang = $this->input->post('pswt_terbang');
            $hotel = $this->input->post('hotel');

            $data = array(
                'id_negara' => $id_negara,
                'nm_negara' => $nm_negara,
                'jml_peserta' => $jml_peserta,
                'tgl_berangkat' => $tgl_berangkat,
                'tgl_pulang' => $tgl_pulang,
                'nm_lengkap' => $nm_lengkap,
                'no_ktp' => $no_ktp,
                'no_paspor' => $no_paspor,
                'jns_kelamin' => $jns_kelamin,
                'no_telepon' => $no_telepon,
                'almt_email' => $almt_email,
                'pswt_terbang' => $pswt_terbang,
                'hotel' => $hotel
            );
            $this->db->insert('tblcustomtrip', $data);

            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $data['judul'] = 'malaysia';

            
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Berhasil</div>');
            $this->load->view('user/_partials/header', $data);
            $this->load->view('user/custom/custom-tour', $data);
            $this->load->view('user/_partials/footer');
        // }
    }
}