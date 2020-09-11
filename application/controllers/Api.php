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
        $this->load->model(['modelpernyataan', 'ModelPendidikan', 'ModelRiwayatPekerjaan', 'ModelRiwayat', 'Auth/M_Auth']);
        // var_dump($_SERVER);
        // die;
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
        return $data;
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
        $this->PendidikanUmum();
        $this->PendidikanDinas();
        $this->PendidikanLain();
        $this->RiwayatPekerjaan();
        $this->RiwayatPekerjaanDinas();
        $this->RiwayatAlamat();
        $this->RiwayatOrganisasi();
        $this->RiwayatPerjuangan();
        $this->RiwayatPenghargaan();
        $this->SavePernikahan();
        $this->SaveAyahKandung();
        $this->SaveIbuKandung();
        if(!empty($this->data['ibutiri']->ibutirinama)){
            $this->SaveIbuTiri();
        }
        if(!empty($this->data['ayahtiri']->ayahtirinama)){
            $this->SaveAyahTiri();
        }
        if(!empty($this->data['mertualaki']->mertualakinama)){
            $this->SaveMertuaLaki();
        }
        if(!empty($this->data['mertuaperempuan']->mertuaperempuannama)){
            $this->SaveMertuaPerempuan();
        }

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
        $model->is_active = '1';
        $model->save();
        $this->lastId = $model->lastId();
        $personal = new model_personal;
        $personal->id_personil = $this->lastId;
        $personal->kesatuan = $data->kesatuan;
        $personal->pangkat = $data->pangkat;
        $personal->pekerjaan = $data->pekerjaan;
        $personal->nip = $data->nrp;
        $personal->alamat = $data->alamatkantor;
        $personal->save();
        echo json_encode(['id_personil' => encode($this->lastId)]);

    }
    public function upload_photo(){
                $config['upload_path']          = FCPATH.'resources';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|webp';
                $config['max_size']             = 10000;

                $this->load->library('upload');
                $this->upload->initialize($config);
                var_dump($config['upload_path']);
                if ( ! $this->upload->do_upload('userfiles'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       echo json_encode($error, JSON_PRETTY_PRINT);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data(), 'is_success' => true);
                        $id = $_GET['SESSION'];
                        $data_update = [
                            'foto' => $data['upload_data']['file_name']
                        ];
                        $params = [
                            'id' => decode($id)
                        ];
                        var_dump($data_update);
                        print_r($id);
                        $Model = new modelpernyataan;
                        $save = $Model->update($params, $data_update);
                        echo json_encode($data, JSON_PRETTY_PRINT);
                }
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
        
    }
    private function SaveAyahKandung()
    {
        $data = $this->data['ayahkandung'];
        $model = new ModelAyahKandung;
        $model->id_personil = $this->lastId;
        $model->nama_ayahkandung = $data->ayahkandungnama;
        $model->alias_ayahkandung = $data->ayahkandungalias;
        $model->tempat_ayahkandung = $data->ayahkandungtempat;
        $model->tgllahir_ayahkandung = $data->ayahkandungtanggal;
        $model->suku_ayahkandung = $data->ayahkandungsuku;
        $model->kewarganegaraan_ayahkandung = $data->ayahkandungkewarganegaraan;
        $model->caramemperoleh_ayahkandung = $data->ayahkandungcaramemperoleh;
        $model->agama_ayahkandung = $data->ayahkandungagama;
        $model->aliran_ayahkandung = $data->ayahkandungaliran;
        $model->alamatsekarang_ayahkandung = $data->ayahkandungalamat;
        $model->alamatsebelum_ayahkandung = $data->ayahkandungoldalamat;
        $model->pendidikanterakhir_ayahkandung = $data->ayahkandungpendidikan;
        // $model->alamatkantor_ayahkandung = $data->ayahkandungalamatkantor;
        $model->pekerjaan_ayahkandung = $data->ayahkandungoldpekerjaan;
        $model->organisasidiikuti_ayahkandung = $data->ayahkandungorgnownama;
        $model->organisasipernah_ayahkandung = $data->ayahkandungoldorgnama;
        $model->kedudukanorganisasi_ayahkandung = $data->ayahkandungorgnowkedudukan;
        $model->kedudukanpernah_ayahkandung = $data->ayahkandungoldorgkedudukan;
        $model->kapanorganisasi_ayahkandung = $data->ayahkandungorgnowkapan;
        // $model->lamaorganisasi_ayahkandung = $data->ayahkandungoldorglama;
        $model->alasanorganisasi_ayahkandung = $data->ayahkandungorgnowalasan;
        $model->alasanorganisasipernah_ayahkandung = $data->ayahkandungoldorgalasan;
        $model->alasanmeninggal_ayahkandung = $data->ayahkandungalasanmeninggal ? $data->ayahkandungalasanmeninggal : 'Belum Meninggal';
        $model->save();
    }
    private function SaveAyahTiri()
    {
        $data = $this->data['ayahtiri'];
        $model = new ModelAyahTiri;
        $model->id_personil = $this->lastId;
        $model->nama_ayahtiri = $data->ayahtirinama;
        $model->alias_ayahtiri = $data->ayahtirialias;
        $model->tempat_ayahtiri = $data->ayahtiritempat;
        $model->tanggal_ayahtiri = $data->ayahtiritanggal;
        $model->suku_ayahtiri = $data->ayahtirisuku;
        $model->kewarganegaraan_ayahtiri = $data->ayahtirikewarganegaraan;
        $model->caramemperoleh_ayahtiri = $data->ayahtiricaramemperoleh;
        $model->agama_ayahtiri = $data->ayahtiriagama;
        $model->aliran_ayahtiri = $data->ayahtirialiran;
        $model->alamatsekarang_ayahtiri = $data->ayahtirialamat;
        $model->alamatsebelum_ayahtiri = $data->ayahtirioldalamat;
        $model->pendidikanterakhir_ayahtiri = $data->ayahtiripendidikan;
        // $model->alamatkantor_ayahtiri = $data->ayahtirialamatkantor;
        $model->pekerjaanterakhir_ayahtiri = $data->ayahtiripekerjaan;
        $model->pekerjaansebelum_ayahtiri = $data->ayahtirioldpekerjaan;
        $model->organisasidiikuti_ayahtiri = $data->ayahtiriorgnownama;
        $model->organisasipernah_ayahtiri = $data->ayahtirioldorgnama;
        $model->kedudukanorganisasi_ayahtiri = $data->ayahtiriorgnowkedudukan;
        $model->kedudukanpernah_ayahtiri = $data->ayahtirioldorgkedudukan;
        $model->kapanorganisasi_ayahtiri = $data->ayahtiriorgnowkapan;
        // $model->lamapernah_ayahtiri = $data->ayahtirioldorglama;
        $model->alasanorganisasi_ayahtiri = $data->ayahtiriorgnowalasan;
        $model->alasanpernah_ayahtiri = $data->ayahtirioldorgalasan;
        $model->alasanmeninggal_ayahtiri = $data->ayahtirialasanmeninggal ? $data->ayahtirialasanmeninggal : 'Belum Meninggal';
        $model->save();
    }
    private function SaveIbuKandung()
    {
        $data = $this->data['ibukandung'];
        $model = new ModelIbuKandung;
        $model->id_personil = $this->lastId;
        $model->nama_ibukandung = $data->ibukandungnama;
        $model->alias_ibukandung = $data->ibukandungalias;
        $model->tempat_ibukandung = $data->ibukandungtempat;
        $model->tanggal_ibukandung = $data->ibukandungtanggal;
        $model->suku_ibukandung = $data->ibukandungsuku;
        $model->kewarganegaraan_ibukandung = $data->ibukandungkewarganegaraan;
        $model->caramemperoleh_ibukandung = $data->ibukandungcaramemperoleh;
        $model->agama_ibukandung = $data->ibukandungagama;
        $model->aliran_ibukandung = $data->ibukandungaliran;
        $model->alamatsekarang_ibukandung = $data->ibukandungalamat;
        $model->alamatsebelum_ibukandung = $data->ibukandungoldalamat;
        $model->pendidikan_ibukandung = $data->ibukandungpendidikan;
        $model->alamatkantor_ibukandung = $data->ibukandungalamatkantor;
        $model->pekerjaanterakhir_ibukandung = $data->ibukandungpekerjaan;
        // $model->pekerjaansebelum_ibukandung = $data->ibukandungoldpekerjaan;
        $model->organisasidiikuti_ibukandung = $data->ibukandungorgnownama;
        $model->organisasipernah_ibukandung = $data->ibukandungoldorgnama;
        $model->kedudukanorganisasi_ibukandung = $data->ibukandungorgnowkedudukan;
        $model->kedudukanpernah_ibukandung = $data->ibukandungoldorgkedudukan;
        $model->sejakorganisasi_ibukandung = $data->ibukandungorgnowkapan;
        // $model->lamaorganisasi_ibukandung = $data->ibukandungoldorglama;
        $model->alasanorganisasi_ibukandung = $data->ibukandungorgnowalasan;
        $model->alasanpernah_ibukandung = $data->ibukandungoldorgalasan;
        $model->alasanmeninggal_ibukandung = $data->ibukandungalasanmeninggal ? $data->ibukandungalasanmeninggal : 'Belum Meninggal';
        $model->save();
    }
    private function SaveIbuTiri()
    {
        $data = $this->data['ibutiri'];
        $model = new ModelIbuTiri;
        $model->id_personil = $this->lastId;
        $model->nama_ibutiiri = $data->ibutiirinama;
        $model->alias_ibutiiri = $data->ibutiirialias;
        $model->tempat_ibutiiri = $data->ibutiiritempat;
        $model->tanggal_ibutiiri = $data->ibutiiritanggal;
        $model->suku_ibutiiri = $data->ibutiirisuku;
        $model->kewarganegaraan_ibutiiri = $data->ibutiirikewarganegaraan;
        $model->caramemperoleh_ibutiiri = $data->ibutiiricaramemperoleh;
        $model->agama_ibutiiri = $data->ibutiiriagama;
        $model->aliran_ibutiiri = $data->ibutiirialiran;
        $model->alamatsekarang_ibutiiri = $data->ibutiirialamat;
        $model->alamatsebelum_ibutiiri = $data->ibutiirioldalamat;
        $model->pendidikanterakhir_ibutiiri = $data->ibutiiripendidikan;
        $model->kantor_ibutiiri = $data->ibutiirialamatkantor;
        $model->pekerjaanterakhir_ibutiiri = $data->ibutiiripekerjaan;
        $model->pekerjaansebelum_ibutiiri = $data->ibutiirioldpekerjaan;
        $model->organisasidiikuti_ibutiiri = $data->ibutiiriorgnownama;
        $model->organisasipernah_ibutiiri = $data->ibutiirioldorgnama;
        $model->kedudukanorganisasi_ibutiiri = $data->ibutiiriorgnowkedudukan;
        $model->kedudukanpernah_ibutiiri = $data->ibutiirioldorgkedudukan;
        $model->kapanorganisasi_ibutiiri = $data->ibutiiriorgnowkapan;
        $model->lamapernah_ibutiiri = $data->ibutiirioldorglama;
        $model->alasanorganisasi_ibutiiri = $data->ibutiiriorgnowalasan;
        $model->alasanpernah_ibutiiri = $data->ibutiirioldorgalasan;
        $model->alasanmeninggal_ibutiiri = $data->ibutiirialasanmeninggal ? $data->ibutiirialasanmeninggal : 'Belum Meninggal';
        $model->save();
    }
    private function SaveMertuaLaki()
    {
        $data = $this->data['mertualaki'];
        $model = new ModelMertuaLaki;
        $model->id_personil = $this->lastId;
        $model->nama_mertualaki = $data->mertualakinama;
        $model->alias_mertualaki = $data->mertualakialias;
        $model->tempat_mertualaki = $data->mertualakitempat;
        $model->tanggal_mertualaki = $data->mertualakitanggal;
        $model->suku_mertualaki = $data->mertualakisuku;
        $model->kewarganegaraan_mertualaki = $data->mertualakikewarganegaraan;
        $model->caramemperoleh_mertualaki = $data->mertualakicaramemperoleh;
        $model->agama_mertualaki = $data->mertualakiagama;
        $model->aliran_mertualaki = $data->mertualakialiran;
        $model->alamatsekarang_mertualaki = $data->mertualakialamat;
        $model->alamatsebelum_mertualaki = $data->mertualakioldalamat;
        $model->pendidikanterakhir_mertualaki = $data->mertualakipendidikan;
        $model->alamatkantor_mertualaki = $data->mertualakialamatkantor;
        $model->pekerjaanterakhir_mertualaki = $data->mertualakipekerjaan;
        $model->pekerjaansebelum_mertualaki = $data->mertualakioldpekerjaan;
        $model->organisasidiikuti_mertualaki = $data->mertualakiorgnownama;
        $model->organisasipernah_mertualaki = $data->mertualakioldorgnama;
        $model->kedudukanorganisasi_mertualaki = $data->mertualakiorgnowkedudukan;
        $model->kedudukanpernah_mertualaki = $data->mertualakioldorgkedudukan;
        $model->kapanorganisasi_mertualaki = $data->mertualakiorgnowkapan;
        $model->lamapernah_mertualaki = $data->mertualakioldorglama;
        $model->alasanorganisasi_mertualaki = $data->mertualakiorgnowalasan;
        $model->alasanpernah_mertualaki = $data->mertualakioldorgalasan;
        $model->alasanmeninggal_mertualaki = $data->mertualakialasanmeninggal ? $data->mertualakialasanmeninggal : 'Belum Meninggal';
        $model->save();
    }
    private function SaveMertuaPerempuan()
    {
        $data = $this->data['mertuaperempuan'];
        $model = new ModelMertuaPerempuan;
        $model->id_personil = $this->lastId;
        $model->nama_mertuaperempuan = $data->mertuaperempuannama;
        $model->alias_mertuaperempuan = $data->mertuaperempuanalias;
        $model->tempat_mertuaperempuan = $data->mertuaperempuantempat;
        $model->tanggal_mertuaperempuan = $data->mertuaperempuantanggal;
        $model->suku_mertuaperempuan = $data->mertuaperempuansuku;
        $model->kewarganegaraan_mertuaperempuan = $data->mertuaperempuankewarganegaraan;
        $model->caramemperoleh_mertuaperempuan = $data->mertuaperempuancaramemperoleh;
        $model->agama_mertuaperempuan = $data->mertuaperempuanagama;
        $model->aliran_mertuaperempuan = $data->mertuaperempuanaliran;
        $model->alamatsekarang_mertuaperempuan = $data->mertuaperempuanalamat;
        $model->alamatsebelum_mertuaperempuan = $data->mertuaperempuanoldalamat;
        $model->pendidikanterakhir_mertuaperempuan = $data->mertuaperempuanpendidikan;
        $model->alamatkantor_mertuaperempuan = $data->mertuaperempuanalamatkantor;
        $model->pekerjaanterakhir_mertuaperempuan = $data->mertuaperempuanpekerjaan;
        $model->pekerjaansebelum_mertuaperempuan = $data->mertuaperempuanoldpekerjaan;
        $model->organisasidiikuti_mertuaperempuan = $data->mertuaperempuanorgnownama;
        $model->organisasipernah_mertuaperempuan = $data->mertuaperempuanoldorgnama;
        $model->kedudukanorganisasi_mertuaperempuan = $data->mertuaperempuanorgnowkedudukan;
        $model->kedudukanpernah_mertuaperempuan = $data->mertuaperempuanoldorgkedudukan;
        $model->kapanorganisasi_mertuaperempuan = $data->mertuaperempuanorgnowkapan;
        $model->lamapernah_mertuaperempuan = $data->mertuaperempuanoldorglama;
        $model->alasanorganisasi_mertuaperempuan = $data->mertuaperempuanorgnowalasan;
        $model->alasanpernah_mertuaperempuan = $data->mertuaperempuanoldorgalasan;
        $model->alasanmeninggal_mertuaperempuan = $data->mertuaperempuanalasanmeninggal ? $data->mertuaperempuanalasanmeninggal : 'Belum Meninggal';
        $model->save();
    }
    public function Login_api()
    {
        $repo = new M_Auth();
        $data = [
            'uname' => $this->input->post('username', true),
            'pwd' => $this->input->post('pwd', true)
        ];
        if($item = $repo->Process($data)):
            $session = [
                'login_stat' => 1, 
                'id' => $item[0]->id, 
                'nama' => $item[0]->uname, 
                'hakakses' => $item[0]->hak_akses];
            $this->session->set_userdata($session);
            echo json_encode($this->statuscode(1, $item), JSON_PRETTY_PRINT);
        else:
            echo json_encode($this->statuscode(2, $item), JSON_PRETTY_PRINT);
        endif;
        
    }
}
?>