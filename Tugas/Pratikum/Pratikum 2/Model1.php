<?php
class Model1 extends CI_Model
{
    //membuat variabel untuk menanmpung nilai
    public $nilai1, $nilai2, $nilai3;

    //method penjumlah
    public function jumlah($nil1=null, $nil2=null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
