<?php
defined('BASEPATH') or exit('No direct script access allowes');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modellayanan');
        $this->load->helper('url');
        $this->load->model('modelupload');
        $this->load->model('modelresponden');
        $this->load->library('form_validation');
    }

    public function form1()
    {
        $id['idpemohon1'] = $this->modellayanan->get_id1();

        $this->load->view('formzero', $id);
    }
    public function form2()

    {
        $id['idpemohon1'] = $this->modellayanan->get_id1();
        $this->load->view('formzero1', $id);
    }
    public function test()
    {
        $this->load->view('test');
    }
    //data berbayar

    public function tambah_responden()
    {


        $email = $this->input->post('Email');
        $umur = $this->input->post('Umur');
        $jeniskelamin = $this->input->post('Jenis_kelamin');
        $pendidikan = $this->input->post('Pendidikan');
        $pekerjaan = $this->input->post('Pekerjaan');
        $pelayanan = $this->input->post('Pelayanan');
        $data = array(
            'Pelayanan' => implode(",", $pelayanan),
            'Pekerjaan' => $pekerjaan,
            'Pendidikan' => $pendidikan,
            'Jenis_kelamin' => $jeniskelamin,
            'Umur' => $umur,
            'Email' => $email,
        );
        $this->modelresponden->insert_data($data, 'data_responden');

        $jopsi1a = $this->input->post('Jopsi1a');
        $jopsi2a = $this->input->post('Jopsi2a');
        $jopsi3a = $this->input->post('Jopsi3a');
        $jopsi4a = $this->input->post('Jopsi4a');
        $jopsi5a = $this->input->post('Jopsi5a');
        $jopsi6a = $this->input->post('Jopsi6a');
        $jopsi7a = $this->input->post('Jopsi7a');
        $jopsi8 = $this->input->post('Jopsi8');
        $jopsi9 = $this->input->post('Jopsi9');
        $jopsi10a = $this->input->post('Jopsi10a');
        $jopsi11a = $this->input->post('Jopsi11a');
        $jopsi12a = $this->input->post('Jopsi12a');
        $jopsi13a = $this->input->post('Jopsi13a');
        $jopsi14a = $this->input->post('Jopsi14a');
        $jopsi15a = $this->input->post('Jopsi15a');
        $jopsi16a = $this->input->post('Jopsi16a');
        $jopsi17a = $this->input->post('Jopsi17a');
        $jopsi18a = $this->input->post('Jopsi18a');
        $jopsi19a = $this->input->post('Jopsi19a');
        $jopsi20a = $this->input->post('Jopsi20a');
        $jopsi1b = $this->input->post('Jopsi1b');
        $jopsi2b = $this->input->post('Jopsi2b');
        $jopsi3b = $this->input->post('Jopsi3b');
        $jopsi4b = $this->input->post('Jopsi4b');
        $jopsi5b = $this->input->post('Jopsi5b');
        $jopsi6b = $this->input->post('Jopsi6b');
        $jopsi7b = $this->input->post('Jopsi7b');
        $jopsi10b = $this->input->post('Jopsi10b');
        $jopsi11b = $this->input->post('Jopsi11b');
        $jopsi12b = $this->input->post('Jopsi12b');
        $jopsi13b = $this->input->post('Jopsi13b');
        $jopsi14b = $this->input->post('Jopsi14b');
        $jopsi15b = $this->input->post('Jopsi15b');
        $jopsi16b = $this->input->post('Jopsi16b');
        $jopsi17b = $this->input->post('Jopsi17b');
        $jopsi18b = $this->input->post('Jopsi18b');
        $jopsi19b = $this->input->post('Jopsi19b');
        $jopsi20b = $this->input->post('Jopsi20b');
        $jawaban = array(
            'Jopsi1a' => $jopsi1a,
            'Jopsi2a' => $jopsi2a,
            'Jopsi3a' => $jopsi3a,
            'Jopsi4a' => $jopsi4a,
            'Jopsi5a' => $jopsi5a,
            'Jopsi6a' => $jopsi6a,
            'Jopsi7a' => $jopsi7a,
            'Jopsi8' => $jopsi8,
            'Jopsi9' => $jopsi9,
            'Jopsi10a' => $jopsi10a,
            'Jopsi11a' => $jopsi11a,
            'Jopsi12a' => $jopsi12a,
            'Jopsi13a' => $jopsi13a,
            'Jopsi14a' => $jopsi14a,
            'Jopsi15a' => $jopsi15a,
            'Jopsi16a' => $jopsi16a,
            'Jopsi17a' => $jopsi17a,
            'Jopsi18a' => $jopsi18a,
            'Jopsi19a' => $jopsi19a,
            'Jopsi20a' => $jopsi20a,
            'Jopsi1b' => $jopsi1b,
            'Jopsi2b' => $jopsi2b,
            'Jopsi3b' => $jopsi3b,
            'Jopsi4b' => $jopsi4b,
            'Jopsi5b' => $jopsi5b,
            'Jopsi6b' => $jopsi6b,
            'Jopsi7b' => $jopsi7b,
            'Jopsi10b' => $jopsi10b,
            'Jopsi11b' => $jopsi11b,
            'Jopsi12b' => $jopsi12b,
            'Jopsi13b' => $jopsi13b,
            'Jopsi14b' => $jopsi14b,
            'Jopsi15b' => $jopsi15b,
            'Jopsi16b' => $jopsi16b,
            'Jopsi17b' => $jopsi17b,
            'Jopsi18b' => $jopsi18b,
            'Jopsi19b' => $jopsi19b,
            'Jopsi20b' => $jopsi20b,


        );
        $this->modelresponden->insert_data($jawaban, 'jawaban');

        redirect(base_url());
        // $this->load->view('skm');
    }

    public function form()
    {

        $id['idpemohon'] = $this->modellayanan->get_id();
        $this->load->view('formberbayar', $id);



        // $this->form_validation->set_rules('nama', 'Nama', 'required|regex_match[/^[a-zA-Z ]+$/]|min_length[4]|max_length[30]|trim');
        // $this->form_validation->set_rules('nohp', 'Nomor HP', 'required|numeric|min_length[8]|trim');
        // $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[8]|trim');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        // $this->form_validation->set_rules('instansi', 'Instansi', 'required|trim');
        // $this->form_validation->set_rules('informasi', 'Informasi', 'required|min_length[8]|trim');


        // $id = html_escape($this->input->post('idpemohon'));
        // $nama = html_escape($this->input->post('nama'));
        // $alamat = html_escape($this->input->post('alamat'));
        // $nohp = html_escape($this->input->post('nohp'));
        // $instansi = html_escape($this->input->post('instansi'));
        // $email = html_escape($this->input->post('email'));
        // $informasi = html_escape($this->input->post('informasi'));

        // $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

        // $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('formberbayar', $id);
        // } else {
        //     $data = array(
        //         'idpemohon' => $id,
        //         'nama' => $nama,
        //         'alamat' => $alamat,
        //         'nohp' => $nohp,
        //         'instansi' => $instansi,
        //         'email' => $email,
        //         'informasi' => $informasi,
        //         'status' => 'no'
        //     );

        //     $this->modellayanan->insert_data($data, 'pemohon');

        //     //input ke data pemohon admin lama
        //     $data1 = array(
        //         'idpemohon' => $id,
        //         'nama' => $nama,
        //         'alamat' => $alamat,
        //         'nohp' => $nohp,
        //         'instansi' => $instansi,
        //         'email' => $email
        //     );
        //     $this->modellayanan->insert_data($data1, 'pemohon2');

        //     redirect(base_url());
        // }
    }

    public function kritik()
    {
        $data = array();
        // $data['kritik'] = $this->modelupload->getRows();
        if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
            // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
            $upload = $this->modelupload->upload();

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                $this->modelupload->save($upload);

                redirect(base_url()); // Redirect kembali ke halaman awal / halaman view data
            } else { // Jika proses upload gagal
                $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }
        $this->load->view('kritik', $data);
    }

    public function skm()
    {
        $data['jawaban'] = $this->db->query('select * from jawaban')->result();
        $data['data_responden'] = $this->db->query('select * from data_responden')->result();

        $this->load->view('skm');
    }
    public function tambah()
    {
        $id['idpemohon'] = $this->modellayanan->get_id();
        $simpan = $this->modellayanan;
        $validation = $this->form_validation;
        $validation->set_rules('nama', 'Nama', 'required|regex_match[/^[a-zA-Z ]+$/]|min_length[4]|max_length[30]|trim');
        $validation->set_rules('nohp', 'Nomor HP', 'required|numeric|min_length[8]|trim');
        $validation->set_rules('alamat', 'Alamat', 'required|min_length[8]|trim');
        $validation->set_rules('email', 'Email', 'trim');
        // $validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $validation->set_rules('instansi', 'Instansi', 'required|trim');
        $validation->set_rules('informasi', 'Informasi', 'required|min_length[8]|trim');
        $validation->set_rules($simpan->rules());
        $validation->set_message('required', '%s masih kosong, silahkan isi');
        $validation->set_error_delimiters('<span class="help-block">', '</span>');
        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('danger', 'Data Gagal ditambahkan');
            $this->load->view("formberbayar", $id);
        } else {
            $simpan->tambah();
            $this->load->view("formberbayar");
            $this->session->set_flashdata('flash', 'Informasi lebih lanjut akan dikonfirmasikan oleh Admin:)');
            redirect(base_url());
        }
    }
    public function upload_data()
    {
        $id['idpemohon1'] = $this->modellayanan->get_id1();
        $dataPDF = $this->modellayanan;
        $validation = $this->form_validation;
        $validation->set_rules('nama', 'Nama', 'required|regex_match[/^[a-zA-Z ]+$/]|min_length[4]|max_length[30]|trim');
        $validation->set_rules('nohp', 'Nomor HP', 'required|numeric|min_length[8]|trim');
        $validation->set_rules('alamat', 'Alamat', 'required|min_length[8]|trim');
        // $validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $validation->set_rules('email', 'Email', 'trim');

        $validation->set_rules('instansi', 'Instansi', 'required|trim');
        $validation->set_rules('informasi', 'Informasi', 'required|min_length[8]|trim');
        $validation->set_rules($dataPDF->rules());
        $validation->set_message('required', '%s masih kosong, silahkan isi');
        if (empty($_FILES['PDF']['name']))
        {
            $validation->set_rules('PDF', 'File pdf', 'required');
        }
        $validation->set_error_delimiters('<span class="help-block">', '</span>');
        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('danger', 'Data Gagal ditambahkan');
            $this->load->view("formzero", $id);
            // $this->session->set_flashdata('success', 'Berhasil disimpan');
        } else {
            $dataPDF->save();
            $this->load->view("formzero");
            $this->session->set_flashdata('flash', 'Informasi lebih lanjut akan dikonfirmasikan oleh Admin:)');
            redirect(base_url());
        }
    }

    public function upload_data1()
    {
        $id['idpemohon1'] = $this->modellayanan->get_id1();
        $dataPDF = $this->modellayanan;
        $validation = $this->form_validation;
        $validation->set_rules('nama', 'Nama', 'required|regex_match[/^[a-zA-Z ]+$/]|min_length[4]|max_length[30]|trim');
        $validation->set_rules('nohp', 'Nomor HP', 'required|numeric|min_length[8]|trim');
        $validation->set_rules('alamat', 'Alamat', 'required|min_length[8]|trim');
        // $validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $validation->set_rules('email', 'Email', 'trim');

        $validation->set_rules('instansi', 'Instansi', 'required|trim');
        $validation->set_rules('informasi', 'Informasi', 'required|min_length[8]|trim');
        $validation->set_rules($dataPDF->rules());

        $validation->set_message('required', '%s masih kosong, silahkan isi');

        $validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('danger', 'Data Gagal ditambahkan');
            $this->load->view("formzero1", $id);

            // $this->session->set_flashdata('success', 'Berhasil disimpan');
        } else {
            $dataPDF->save1();
            $this->load->view("formzero1");
            $this->session->set_flashdata('flash', 'Informasi lebih lanjut akan dikonfirmasikan oleh Admin:)');
            redirect(base_url());
        }
    }







    // data 0 rupiah
    // public function tambah_pemohon1(){
    //     $id = $this->input->post('idpemohon');
    //     $nama = $this->input->post('nama');
    //     $alamat = $this->input->post('alamat');
    //     $nohp = $this->input->post('nohp');
    //     $instansi = $this->input->post('instansi');
    //     $email = $this->input->post('email');
    //     $informasi = $this->input->post('informasi' );
    //     $dataPDF = $this->modellayanan->_uploadPDF();


    //     $data = array(
    //         'idpemohon'=> $id,
    //         'nama' => $nama,
    //         'alamat'=> $alamat,
    //         'nohp'=> $nohp,
    //         'instansi'=> $instansi,
    //         'email'=> $email,
    //         'informasi' => $informasi,
    //         'PDF'=> $dataPDF
    //     );
    //     $this->modellayanan->insert_data($data, 'pemohon1');
    //     redirect(base_url(). 'page/formzero');


    // }

    public function syarat()
    {
        $this->load->view('syarat');
    }
    public function informasi()
    {
        $this->load->view('informasi');
    }

    public function search()
    {
        $validation = $this->form_validation;
        $validation->set_rules('keyword', 'Keyword', 'required|numeric|trim');
        $keyword = $this->input->post('keyword');
        $validation->set_message('required', '%s masih kosong, silahkan isi');
        $validation->set_error_delimiters('<span class="help-block">', '</span>');

        
        if ($validation->run() == FALSE) {
            // redirect(base_url('Page/tracking'));
            $this->load->view("tracking");

        } else {
        $data['pencarian'] = $this->modellayanan->get_pencarian($keyword);
        $this->load->view('search', $data);
        }
    }
    public function tracking()
    {

        $this->load->view('tracking');
    }
    public function redirect()
    {
        $this->load->view('dataonline');
    }

    public function index()
    {
        $data['data_pemohon'] = $this->db->query('select idpemohon as id,COUNT(idpemohon) as count from pemohonbmkg1')->result();
        $data['data_pemohon1'] = $this->db->query('select idpemohon as id,COUNT(idpemohon) as count from pemohon1')->result();


        $this->load->view('landingpage/index', $data);
    }
    public function bantuan()
    {
        $this->load->view('bantuan');
    }
    public function header()
    {
    }
    public function footer()
    {
    }
}
