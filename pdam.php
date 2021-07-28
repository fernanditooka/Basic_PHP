<?php
class PDAM{
    public $id, $nama, $jumlah_penggunaan;
    public __construct($id,$nama,$jumlah_penggunaan){
        $this->id=$id;
        $this->nama=$nama;
        $this->jumlah_penggunaan=$jumlah_penggunaan;
        $this->biayaAdmin=10000;
    }
    public function getBiaya(){
        
    }
}
?>
