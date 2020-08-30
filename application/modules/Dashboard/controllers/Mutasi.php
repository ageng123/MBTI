<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Mutasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->model('M_Mutasi');
    }

    private function Csrf() {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        return $csrf;
    }

    private function Dec($enc) {
        $encrypt = str_replace(['-', '_', '~'], ['+', '/', '='], $enc);
        $dec = $this->encryption->decrypt($encrypt);
        return $dec;
    }
    private function Decrypter($encrypt){
        $dec = $this->encryption->decrypt($encrypt);
        return $dec;
    }

    private function Nosurat() {
        $model = new No_Surat;
        $params = [
            'jenis_surat' => 'Mutasi'
        ];
        $process = $model->getLastNoSurat($params);
        $nosurat = $process->nomor_terakhir + 1;
        $format_nomor = $process->format_nomor;
        $model->nomor_terakhir = $nosurat;
        $format_nomor = str_replace(['[nomor]', '[tahun]', '[jenis_surat]'], [$nosurat, date('Y'), 'MTS'], $format_nomor);
        $model->saveNoSurat($params);
        return $format_nomor;


    }

    public function index() {
        $data = [
            'title' => 'Dashboard Mutasi',
            'logo' => '',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Mutasi->index(),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_mutasi', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }

    public function Usulan($id) {
        $dec = $this->Dec($id);
        $data = [
            'title' => 'Dashboard Mutasi',
            'logo' => '',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Mutasi->Usulan($dec),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_mutasiusul', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }
    public function getHistoryMutasi(){
        $id = $_GET['id'];
        $model = new M_Mutasi;
        $process = $model->find(['id_personil' => $id]);
        $rows = array();
        foreach($process as $key => $value){
            $row = array();
            $row[] = $key+1;
            $row[] = $value->tanggal_mutasi;
            $row[] = $value->keterangan.'<p data-type="mutasi" data-id="'.encode($value->id_mutasi).'"></p>';
            $row[] = $value->created_date;
            $rows[] = $row;
            
        }
        echo json_encode(['data' => $rows]);
    }
//    public function Save() {
//        $input = [
//            'no_surat' => $this->Nosurat(),
//            'nama' => $this->input->post('nama', true),
//            'pekerjaan' => $this->input->post('pekerjaan', true),
//            'pangkat' => $this->input->post('pangkat', true),
//            'usulan' => $this->input->post('usulan', true),
//            'berlaku' => $this->input->post('berlaku', true),
//            'n_pangkat' => $this->input->post('n_pangkat', true),
//            'jabatan' => $this->input->post('jabatan', true),
//        ];
//        $data = [
//            'title' => 'Dashboard Mutasi',
//            'logo' => '',
//            'username' => $this->session->userdata('nama'),
//            'peserta' => $input,
//            'csrf' => $this->Csrf()
//        ];
//        $data['content'] = $this->parser->parse('V_mutasiprint', $data, true);
//        return $this->parser->parse('Templates/Template', $data);
//    }

    public function Save() {

        // $input = [
        //     'no_surat' => $this->Nosurat(),
        //     'nama' => 'PRIYAMBODO',
        //     'pekerjaan' => 'Perwira Pertama',
        //     'pangkat' => 'Letnan Satu',
        //     'usulan' => date('Y-m-d'),
        //     'berlaku' => date('Y-m-d'),
        //     'n_pangkat' => 'Perwira Pertama',
        //     'jabatan' => 'KAPTEN',
        // ];
        $model = new M_Mutasi;
        $model->no_mutasi = $this->Nosurat();
        $model->keterangan = $this->input->post('keterangan');
        $model->id_personil = $this->input->post('personil_number');
        $model->tanggal_mutasi = $this->input->post('berlaku');
        $model->pangkat_jabatan = $this->input->post('n_pangkat').'/'.$this->input->post('jabatan');
        if($model->save()){
            return redirect(site_url('Dashboard/Mutasi/Index'));
        };
        $data = [
            'title' => 'Dashboard Mutasi',
            'logo' => '',
            'username' => $this->session->userdata('nama'),
            'peserta' => $input,
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_mutasiprint', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }
    public function GetMutasiDetail(){
        $id = decode($_GET['SESSION_ID']);
        $model = new M_Mutasi;
        $data = [
            'mutasi' => $model->getMutasi($id)
        ];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
    public function print(){
        $id_anggota = decode($_GET['SESSION_ID']);
        $model = new M_Mutasi;
        $data = [
            'id_anggota' => $id_anggota,
            'anggota' =>  $model->getMutasi($id_anggota)
        ];
        // require_once('tcpdf/config/lang/eng.php');
        // require_once('tcpdf/tcpdf.php');
        // require_once('tcpdf_include.php');
        // require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
        $this->load->library('Pdf');
        $pdf = new Pdf();
        $pdf->AddPage('p', 'A4');
        ob_start();
    // we can have any view part here like HTML, PHP etc
            $this->load->view('V_mutasiprint', $data);
            $content = ob_get_contents();
            // $content = $this->load->view('V_idprint', $data);
        ob_end_clean();
        // $content = $this->load->view('V_idprint', $data);
        $pdf->writeHTML($content, true, false, true, false, '');
        $pdf->Output('Mutasi-'.date('Ymd').'.pdf', 'I');
    }
}
