<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Pelanggaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->model('M_Mutasi');
    }
    private function Nosurat() {
        $model = new No_Surat;
        $params = [
            'jenis_surat' => 'Pelanggaran'
        ];
        $process = $model->getLastNoSurat($params);
        $nosurat = $process->nomor_terakhir + 1;
        $format_nomor = $process->format_nomor;
        $model->nomor_terakhir = $nosurat;
        $format_nomor = str_replace(['[nomor]', '[tahun]', '[jenis_surat]'], [$nosurat, date('Y'), 'PELANGGARAN'], $format_nomor);
        $model->saveNoSurat($params);
        return $format_nomor;


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

    public function index() {
        $data = [
            'title' => 'Dashboard Pelanggaran',
            'logo' => '',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Mutasi->index(),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_pelanggaran', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }

    public function Usulan() {
        $dec = decode($_GET['id']);
        $data = [
            'title' => 'Dashboard Pelanggaran - Input Pelanggaran Anggota',
            'logo' => '',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Mutasi->Usulan($dec),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_pelanggaranusul', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }
    public function getHistory(){
        $id = $_GET['id'];
        $model = new M_Pelanggaran;
        $process = $model->find(['id_personil' => $id]);
        $rows = array();
        $rowid;
        foreach($process as $key => $value){
            $row = array();
            
            $row[] = $key+1;
            $row[] = $value->keterangan;
            $row[] = $value->tanggal_pelanggaran.'<p data-type="pelanggaran" data-id="'.encode($value->id_pelanggaran).'"></p>';
            $row[] = $value->created_date;
            $rows[] = $row;
            
        }
        echo json_encode(['data' => $rows]);

    }
    public function add()
    {
        $model = new M_Pelanggaran;
        $model->no_pelanggaran = $this->Nosurat();
        $model->id_personil = decode($_GET['id']);
        $model->keterangan = $this->input->post('keterangan');
        $model->proses = $this->input->post('proses');
        $model->tanggal_pelanggaran = $this->input->post('usulan');
        if($model->save()){
            return redirect(site_url('Dashboard/Pelanggaran/index'));
        };
    }
    public function GetPelanggaranDetail(){
        $id = decode($_GET['SESSION_ID']);
        $model = new M_Pelanggaran;
        $data = [
            'pelanggaran' => $model->getPelanggaran($id)
        ];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
    public function print(){
        $id_anggota = decode($_GET['SESSION_ID']);
        $model = new M_Pelanggaran;
        $data = [
            'id_anggota' => $id_anggota,
            'anggota' =>  $model->getPelanggaran($id_anggota)
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
            $this->load->view('V_pelanggaranprint', $data);
            $content = ob_get_contents();
            // $content = $this->load->view('V_idprint', $data);
        ob_end_clean();
        // $content = $this->load->view('V_idprint', $data);
        $pdf->writeHTML($content, true, false, true, false, '');
        $pdf->Output('Mutasi-'.date('Ymd').'.pdf', 'I');
    }

}
