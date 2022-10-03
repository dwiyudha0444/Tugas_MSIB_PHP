<?php
require_once 'bentuk2D.php';
class Lingkaran extends Bentuk2D{
    
    public $jari2;
    public $phi;

    public function  __construct($jari2,$phi){
        $this -> jari2 = $jari2;
        $this -> phi = $phi;
    }
    
    public function namaBidang(){
        echo 'Lingkaran';
    }
    
    public function keterangan(){
        echo 'K : keliling lingkaran</br>
        π : phi</br>
        d : diameter lingkaran</br>
        r  : jari-jari lingkaran</br>
        <b>Diketahui</b></br>
        Jari-Jari = '.$this -> jari2.
        '</br>Phi ='.$this -> phi ;
    }

    public function luasBidang(){
        echo $this -> phi * $this -> jari2 * $this -> jari2;
    }

    public function kelilingBidang(){
        echo 2 * $this -> phi * $this -> jari2;
    }
}