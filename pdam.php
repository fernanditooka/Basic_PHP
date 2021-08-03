<?php
class PDAM{
    public $id, $nama, $jumlah_penggunaan, $biayaAdmin = 10000;
    public function __construct($id, $nama, $jumlah_penggunaan)
    {
        $this->id = $id;
        $this->nama = $nama;
        if ($jumlah_penggunaan < 10) {
            $this->jumlah_penggunaan = 10;    
        }
        else {
            $this->jumlah_penggunaan = $jumlah_penggunaan;
        }
        
    }
    public function getBiaya(){
        $biaya=0;
        if ($this->jumlah_penggunaan <= 10) {
            $biaya = 2000;
        }
        elseif ($this->jumlah_penggunaan > 10 && $this->jumlah_penggunaan <= 20) {
            $biaya = 3000;
        }
        elseif ($this->jumlah_penggunaan > 20 && $this->jumlah_penggunaan <=30) {
            $biaya = 4000;
        }
        elseif ($this->jumlah_penggunaan > 30) {
            $biaya = 5000;
        }
        $hasil = $this->jumlah_penggunaan * $biaya + $this->biayaAdmin;
        return $hasil; 
    }
}
$pelanggan = [
    new PDAM(1, "Ali", 9),
    new PDAM(2, "Budi", 40),
    new PDAM(3, "Dani", 60),
    new PDAM(4, "Edi", 25),
    new PDAM(5, "Umar", 14)
];

for ($i=0; $i < count($pelanggan); $i++) { 
    echo nl2br("Pelanggan: ".$pelanggan[$i]->nama ."| Biaya: ".$pelanggan[$i]->getBiaya()."\n");
}
?>
