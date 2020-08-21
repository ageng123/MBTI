<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class Api extends CI_Controller {
    protected $data = [

    ];
    protected $lastId;
    public function __construct()
    {
        parent::__construct();
        $config['upload_path']          = base_url('uploaded_file');
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->load->model(['modelpernyataan', 'ModelPendidikan', 'ModelRiwayatPekerjaan', 'ModelTempatTinggal', 'ModelRiwayat']);
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
        // $this->saveIdentity();
        // $this->PendidikanUmum();
        // $this->PendidikanDinas();
        // $this->PendidikanLain();
        // $this->RiwayatPekerjaan();
        // $this->RiwayatPekerjaanDinas();
        // $this->RiwayatAlamat();
        // $this->RiwayatOrganisasi();
        // $this->RiwayatPerjuangan();
        // $this->RiwayatPenghargaan();
        $this->SavePernikahan();

        
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
        $model->no_identitas = $data->nomoridentitas;
        $model->alamat_kantor = $data->alamatkantor;
        $model->alamat_ktp = $data->alamatktp;
        $model->tanggal_nikah = $data->tanggalnikah;
        $model->tempat_nikah = $data->tempatnikah;
        $model->total_nikah = $data->jumlahnikah;
        $model->jml_anak = $data->jumlahanak;
        $model->save();
        $this->lastId = $model->lastId();
    }
    private function PendidikanUmum()
    {
        $data = $this->data['pendidikanumum'];
        foreach($data as $key => $value)
        {
            $model = new ModelPendidikanUmum;
            $model->id_personil = $this->lastId;
            $model->nama = $value->namasekolah;
            $model->tahun = $value->tahunsekolah;
            $model->tempat = $value->tempatsekolah;
            $model->biaya = $value->biayasekolah;
            $model->keterangan = $value->keterangansekolah;
            $model->seq = (int)$key + 1;
            $model->save();
        }
    }
    private function PendidikanDinas()
    {
        $data = $this->data['pendidikandinas'];
        foreach($data as $key => $value):
            $model = new ModelPendidikanDinas;
            $model->id_personil = $this->lastId;
            $model->nama = $value->namasekolahdinas;
            $model->tahun = $value->tahunsekolahdinas;
            $model->tempat = $value->kotasekolahdinas;
            $model->rangka = $value->rangkasekolahdinas;
            $model->keterangan = $value->keterangansekolahdinas;
            $model->seq = (int)$key + 1;
            $model->save();
        endforeach;
    }
    private function PendidikanLain()
    {
        $data = $this->data['pendidikanlain'];
        foreach($data as $key => $value):
            $model = new ModelPendidikanLain;
            $model->id_personil = $this->lastId;
            $model->nama = $value->sekolahlainnama;
            $model->tahun = $value->tahunsekolahlain;
            $model->tempat = $value->tempatsekolahlain;
            $model->penyelenggara = $value->penyelenggarasekolahlain;
            $model->keterangan = $value->keterangansekolahlain;
            $model->seq = (int)$key + 1;
            $model->save();
        endforeach;
        var_dump($data);
    }
    private function RiwayatPekerjaan()
    {
        $data = $this->data['riwayatkerja'];
        foreach($data as $key => $value):
            $model = new ModelRiwayatPekerjaan;
            $model->id_personil = $this->lastId;
            $model->instansi = $value->instansikerja;
            $model->jabatan = $value->namapekerjaan;
            $model->pangkat = $value->pangkatpekerjaan;
            $model->tahun = $value->tahunkerja;
            $model->keterangan = $value->keterangankerja;
            $model->seq = (int)$key + 1;
            $model->save();
        endforeach;
        var_dump($data);
    }
    private function RiwayatPekerjaanDinas()
    {
        $data = $this->data['riwayatkerjadinas'];
        foreach($data as $key => $value):
            $model = new ModelRiwayatPekerjaanDinas;
            $model->id_personil = $this->lastId;
            $model->nama = $value->namakerjadinas;
            $model->instansi = $value->instansikerjadinas;
            $model->rangka = $value->rangkakerjadinas;
            $model->tahun = $value->tahunkerjadinas;
            $model->keterangan = $value->keterangankerjadinas;
            $model->seq = (int)$key + 1;
            $model->save();
        endforeach;
        var_dump($data);
    }
    private function RiwayatAlamat()
    {
        $data = $this->data['riwayatalamat'];
        foreach($data as $key => $value):
            $model = new ModelTempatTinggal;
            $model->id_personil = $this->lastId;
            $model->alamat = $value->alamattinggal;
            $model->rangka = $value->rangkatinggal;
            $model->tahun = $value->tahuntinggal;
            $model->keterangan = $value->keterangantinggal;
            $model->seq = (int)$key + 1;
            $model->save();
        endforeach;
        var_dump($data);
    }
    private function RiwayatOrganisasi()
    {
        $data = $this->data['riwayatorganisasi'];
        foreach($data as $key => $value):
            $model = new ModelRiwayatOrganisasi;
            $model->id_personil = $this->lastId;
            $model->nama = $value->namaorganisasi;
            $model->tahun_ikut = $value->tahunikutorganisasi;
            $model->alamat = $value->alamatorganisasi;
            $model->jabatan = $value->kedudukanorganisasi;
            $model->tahun = $value->tahunorganisasi;
            $model->keterangan = $value->keteranganorganisasi;
            $model->seq = (int)$key + 1;
            $model->save();
        endforeach;
        var_dump($data);
    }
    private function RiwayatPerjuangan()
    {
        $data = $this->data['riwayatperjuangan'];
        foreach($data as $key => $value):
            $model = new ModalRiwayatPerjuangan;
            $model->id_personil = $this->lastId;
            $model->peristiwa = $value->peristiwaperjuangan;
            $model->tempat = $value->tempatperjuangan;
            $model->tahun = $value->tahunperjuangan;
            $model->rangka = $value->rangkaperjuangan;
            $model->keterangan = $value->keteranganperjuangan;
            $model->seq = (int)$key + 1;
            $model->save();
        endforeach;
        var_dump($data);
    }
    private function RiwayatPenghargaan()
    {
        $data = $this->data['riwayatpenghargaan'];
        foreach($data as $key => $value):
            $model = new ModelRiwayatPenghargaan;
            $model->id_personil = $this->lastId;
            $model->nama = $value->bintangpenghargaan;
            $model->dari = $value->diterimapenghargaan;
            $model->rangka = $value->rangkapenghargaan;
            $model->kapan = $value->waktupenghargaan;
            $model->keterangan = $value->keteranganpenghargaan;
            $model->seq = (int)$key + 1;
            $model->save();
        endforeach;
        var_dump($data);
    }
    private function SavePernikahan()
    {
        $data = $this->data['pernikahan'];
        $model = new ModelPernikahan;
        $model->id_personil = $this->lastId;
        $model->nama = $data->pernikahannama;
        $model->nick = $data->pernikahanalias;
        $model->tmp_lahir = $data->pernikahantempat;
        $model->tgl_lahir = $data->pernikahantanggal;
        $model->suku = $data->pernikahansuku;
        $model->kewarganegaraan = $data->pernikahankwn;
        // $model->cara_kewarganegaraan = $data->cara_memperoleh;
        $model->agama = $data->pernikahanagamanow;
        $model->agama_sebelumnya = $data->pernikahanagamaold;
        $model->aliran = $data->pernikahanaliran;
        $model->alamat_1 = $data->pernikahannowalamat;
        $model->alamat_2 = $data->pernikahanoldalamat;
        $model->pendidikan = $data->pernikahanpendidikan;
        $model->pasangan_ke = $data->pernikahantotal;
        $model->alamat_kantor = $data->pernikahankantor;
        $model->jabatan_kantor = $data->pernikahanjabatan;
        $model->org1 = $data->pernikahanorgnow;
        $model->org2 = $data->pernikahanorgold;
        $model->kedudukan_org1 = $data->pernikahanorgnowkedudukan;
        $model->kedudukan_org2 = $data->pernikahanorgoldkedudukan;
        $model->kapan_org1 = $data->pernikahanorgnowkapan;
        $model->lama_org2 = $data->pernikahanorgoldkapan;
        $model->alasan_org1 = $data->pernikahanorgnowalasan;
        $model->alasan_org2 = $data->pernikahanorgoldalasan;
        $model->save();
        var_dump($data);
    }
    private function SaveAyahKandung()
    {
        $data = $this->data['ayahkandung'];
        $model = new ModelAyahKandung;
        $model->id_personil = $this->lastId;
        $model->nama = $data->pernikahannama;
        $model->nick = $data->pernikahanalias;
        $model->tmp_lahir = $data->pernikahantempat;
        $model->tgl_lahir = $data->pernikahantanggal;
        $model->suku = $data->pernikahansuku;
        $model->kewarganegaraan = $data->pernikahankwn;
        // $model->cara_kewarganegaraan = $data->cara_memperoleh;
        $model->agama = $data->pernikahanagamanow;
        $model->agama_sebelumnya = $data->pernikahanagamaold;
        $model->aliran = $data->pernikahanaliran;
        $model->alamat_1 = $data->pernikahannowalamat;
        $model->alamat_2 = $data->pernikahanoldalamat;
        $model->pendidikan = $data->pernikahanpendidikan;
        $model->pasangan_ke = $data->pernikahantotal;
        $model->alamat_kantor = $data->pernikahankantor;
        $model->jabatan_kantor = $data->pernikahanjabatan;
        $model->org1 = $data->pernikahanorgnow;
        $model->org2 = $data->pernikahanorgold;
        $model->kedudukan_org1 = $data->pernikahanorgnowkedudukan;
        $model->kedudukan_org2 = $data->pernikahanorgoldkedudukan;
        $model->kapan_org1 = $data->pernikahanorgnowkapan;
        $model->lama_org2 = $data->pernikahanorgoldkapan;
        $model->alasan_org1 = $data->pernikahanorgnowalasan;
        $model->alasan_org2 = $data->pernikahanorgoldalasan;
        $model->save();
        var_dump($data);
    }
}
?>