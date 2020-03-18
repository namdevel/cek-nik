<?php
namespace NAMDEVEL\Ktp;

class Nik
{
    protected $_nik;
    
    public function __construct($nik = null)
    {
        $this->_nik = $nik;
        
    }
    
    protected function Request($url)
    {
        $ch      = curl_init();
        $options = array(
            CURLOPT_URL => $url . '/pemilih/dpt/1/hasil-cari/resultDps.json?nik=' . $this->_nik . '&nama=&namaPropinsi=&namaKabKota=&namaKecamatan=&namaKelurahan=',
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0
        );
        
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    
    public function search()
    {
        $pk17 = $this->Request('https://pilkada2017.kpu.go.id');
        $pk18 = $this->Request('https://infopemilu.kpu.go.id/pilkada2018');
        
        $result = !empty($pk17) ? json_decode($pk17) : json_decode($pk18);
        if ($result->aaData) {
            return json_encode($result->aaData);
            exit();
        } else {
            return "NIK tidak ditemukan";
        }
    }
}
