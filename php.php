<?php
class pegawai{
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    const data = 'Data Pegawai';
    
    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        $this-> GajiPokok();
        $this-> TunjanganJabatan();
        $this-> TunjanganKeluarga();
        $this-> GajiKotor();
        $this-> ZakatProfesi();
        $this-> GajiBersih();
    }
    //setGajiPokok (gunakan switch case : manager=>15jt, asmen=>10jt, kabag=>7jt, staff=>4jt)
    public function GajiPokok(){
        switch ($this->jabatan) {
            case "Manager":
                $this->gapok = "15000000";
                break;
            case "Assisten Manager":
                $this->gapok = "10000000";
                break;
            case "kepala bagian":
                $this->gapok = "7000000";
                break;
            case "Staff":
                $this->gapok = "4000000";
                break;
            default:
                $this->gapok = 0;
                break;
            }
    }
    //setTunjab = 20% dari Gaji Pokok
    public function TunjanganJabatan(){
        $this->tunjab = $this->gapok * 0.2;
    }
    //setTunkel= 10% dari Gaji Pokok untuk sudah menikah (ternary)
    public function TunjanganKeluarga(){
        $this->tunkel = ($this -> status == 'Menikah') ? $this->gapok * 0.1 : 0;
    }
    //setGajiKotor= gapok + tunjab + tunkel
    public function GajiKotor(){
        $this->gator = $this->gapok + $this->tunjab + $this->tunkel;
    }
    //setZakatProfesi= 2,5% dari GajiPokok untuk muslim dan Gaji Kotor minimal 6jt
    public function ZakatProfesi(){
        if ($this->agama == 'Islam' && $this->gator >= 1000) $this->zapro = $this->gapok * 0.25;
        else $this->zapro = 0;
    }
    //setGajiBersih= gator - zapro
    public function GajiBersih(){
        $this->gaber = $this->gator - $this->zapro;
    }
    //mencetak => nip, nama, jabatan, agama, status, Gaji Pokok, Tunj Jab, Tunkel, Zakat, Gaji Bersih
    public function mencetak(){
        echo '<b><u>'.self::data.'</u></b>'; 
        echo '<br/>NIP: '.$this->nip;
        echo '<br/>Nama: '.$this->nama;
        echo '<br/>Nama: '.$this->jabatan;
        echo '<br/>agama: '.$this->agama;
        echo '<br/>Gaji Pokok: Rp. '.number_format($this->gapok, 0, ',', '.');
        echo '<br/>Tunjangan Jabatan: Rp. '.number_format($this->tunjab, 0, ',', '.');
        echo '<br/>Tunjangan Keluarga: Rp. '.number_format($this->tunkel, 0, ',', '.');
        echo '<br/>Zakat Profesi: Rp. '.number_format($this->zapro, 0, ',', '.');
        echo '<br/>Gaji Bersih: Rp. '.number_format($this->gaber, 0, ',', '.');
        echo '<hr/>';
    }
}