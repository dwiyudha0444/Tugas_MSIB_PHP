<?php
require_once 'bentuk2D.php';
class PersegiPanjang extends bentuk2D{
    
    public $panjang;
    public $lebar;

    public function  __construct($panjang, $lebar){
        $this -> panjang = $panjang;
        $this -> lebar = $lebar;
    }
    
    public function namaBidang(){
        echo 'Persegi Panjang';
    }

    public function keterangan(){
        echo 
        'L  : luas persegi panjang</br>
        p  : ukuran panjang persegi panjang</br>
        l  : ukuran lebar persegi panjang</br>
        <b>Diketahui</b></br>
        Panjang ='.$this-> panjang .'<br>Lebar ='.$this-> lebar;
    }

    public function luasBidang(){
        echo $this-> panjang * $this -> lebar;
    }

    public function kelilingBidang(){
        echo 2 * ($this -> panjang + $this -> lebar);
    }
}