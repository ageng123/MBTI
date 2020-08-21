<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class Api extends CI_Controller {
    protected $data = [

    ];
    public function __construct()
    {
        parent::__construct();
        $config['upload_path']          = base_url('uploaded_file');
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->load->model(['modelpernyataan']);
    }
    private function statuscode($status, $message){
        switch($status){
            case 1:
                $data = [
                    'message' => $message,
                    'kode' => 200,
                    'is_success' => true
                ];
            break;
            case 2:
                $data = [
                    'message' => $message,
                    'kode' => 500,
                    'is_success' => false
                ];
            break;
        }
    }
    public function post_pernyataan()
    {
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $request = json_decode($stream_clean);
        $data = $request->data;
        $this->data['identitasdiri'] = json_decode($data->identitasdiri);
        $this->data['pendidikanumum'] = json_decode($data->pendidikanumum);
        $this->data['pendidikandinas'] = json_decode($data->pendidikandinas);
        $this->data['pendidikanlain'] = json_decode($data->pendidikanlain);
        $this->data['riwayatkerja'] = json_decode($data->riwayatpekerjaan);
        $this->data['riwayatkerjadinas'] = json_decode($data->riwayatkerjadinas);
        $this->data['riwayatalamat'] = json_decode($data->riwayatalamat);
        $this->data['riwayatorganisasi'] = json_decode($data->riwayatorganisasi);
        $this->data['riwayatperjuangan'] = json_decode($data->riwayatperjuangan);
        $this->data['riwayatpenghargaan'] = json_decode($data->penghargaan);
        $this->data['pernikahan'] = json_decode($data->pernikahan);
        $this->data['ayahkandung'] = json_decode($data->ayahkandung);
        $this->data['ayahtiri'] = json_decode($data->ayahtiri);
        $this->data['ibukandung'] = json_decode($data->ibukandung);
        $this->data['ibutiri'] = json_decode($data->ibutiri);
        $this->data['mertualaki'] = json_decode($data->mertualaki);
        $this->data['meruaperempuan'] = json_decode($data->mertuaperempuan);
        $this->saveIdentity();
        
    }
    private function saveIdentity()
    {
        $data = $this->data['identitasdiri'];
        $model = new modelpernyataan;
        $model->nama = $data->nama;
        $model->nick = $data->alias;
        $model->j_k = $data->jk;
        $model->tmp_lahir = $data->tempat;
        $model->tgl_lahir = $data->tanggal;
        $model->suku = $data->suku;
        $model->kewarganegaraan = $data->kewarganegaraan;
        $model->cara_kewarganegaraan = $data->caramemperoleh;
        $model->agama = $data->nowagama;
        $model->agama_sebelumnya = $data->oldagama;
        $model->aliran = $data->aliran;
        $model->alamat = $data->alamatrumah;
        $model->hobi = $data->hobi;
        $model->kebiasaan = $data->kebiasaan;
        $model->bahasa = $data->bahasa;
        $model->stat = $data->status;
        $model->no_identitas = $data->nokmoridentitas;
        // $model->alamatkantor = $data->alamatkantor;
        // $model->alamatktp = $data->alamatktp;
        $model->save();
        $modelpi = new model_personal;
        $modelpi->id_personil = $model->lastId();
        $modelpi->alamat = $data->alamatkantor;
        $modelpi->save();
    }
}
?>