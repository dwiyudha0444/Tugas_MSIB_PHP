<?php
require_once 'bentuk2D.php';
class Segitiga extends bentuk2D{
    
    public $alas;
    public $tinggi;

    public function  __construct($alas, $tinggi, $sisi){
        $this -> alas = $alas;
        $this -> tinggi = $tinggi;
        $this -> sisi = $sisi;
    }

    public function namaBidang(){
        echo 'Segitiga';
    }

    public function keterangan(){
        echo
        'a : ukuran alas segitiga</br>
        t : ukuran tinggi segitiga</br> 
        <b>Diketahui</b></br>
        Alas = ' . $this -> alas . 
        '<br>Tinggi = ' . $this -> tinggi;
    }

    public function luasBidang(){
        echo 0.5 * ($this -> alas * $this -> tinggi);
    }

    public function kelilingBidang(){
        echo $this -> sisi + $this -> sisi + $this -> sisi;
    }
}