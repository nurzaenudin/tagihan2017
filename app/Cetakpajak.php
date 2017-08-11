<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cetakpajak extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'v_pajak_spm';
    public $timestamps = false;
    protected $primaryKey = 'nospm';
    protected $appends = array(
        'pph21_rupiah',     
        'pph22_rupiah',
        'pph23_rupiah',
        'pph4ayat2_rupiah',
        'ppn_rupiah',

        'pph21_terbilang_pisah',
        'pph22_terbilang_pisah',
        'pph23_terbilang_pisah',
        'pph4ayat2_terbilang_pisah',
        'ppn_terbilang_pisah'


        );

    

    public function getBrutoAttribute($value)
    {
        return number_format($value,0);
    }

    public function getPotonganAttribute($value)
    {
        return number_format($value,0);
    }



    public function getPph21RupiahAttribute()
    {
        return 'Rp '.number_format($this->PPh21,0,",",".");
    }

        public function getPph22RupiahAttribute()
    {
        return 'Rp '.number_format($this->PPh22,0,",",".");
    }

        public function getPph23RupiahAttribute()
    {
        return 'Rp '.number_format($this->PPh23,0,",",".");
    }

        public function getPph4ayat2RupiahAttribute()
    {
        return 'Rp '.number_format($this->PPh4Ayat2,0,",",".");
    }

        public function getPpnRupiahAttribute()
    {
        return 'Rp '.number_format($this->PPN,0,",",".");
    }


    public function getPph21TerbilangPisahAttribute()
    {
        return $this->terbilangpisah(
            $this->PPh21,
            3);
    }

        public function getPph22TerbilangPisahAttribute()
    {
        return $this->terbilangpisah($this->PPh22);
    }

            public function getPph23TerbilangPisahAttribute()
    {
        return $this->terbilangpisah($this->PPh23);
    }

                public function getPph4ayat2TerbilangPisahAttribute()
    {
        return $this->terbilangpisah($this->PPh4Ayat2);
    }

            public function getPpnTerbilangPisahAttribute()
    {
        return $this->terbilangpisah($this->PPN);
    }





    Public function kekata($x) {
        $x = abs($x);
        $angka = array("", "satu", "dua", "tiga", "empat", "lima",
        "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($x <12) {
            $temp = " ". $angka[$x];
        } else if ($x <20) {
            $temp = Cetakpajak::kekata($x - 10). " belas";
        } else if ($x <100) {
            $temp = Cetakpajak::kekata($x/10)." puluh". Cetakpajak::kekata($x % 10);
        } else if ($x <200) {
            $temp = " seratus" . Cetakpajak::kekata($x - 100);
        } else if ($x <1000) {
            $temp = Cetakpajak::kekata($x/100) . " ratus" . Cetakpajak::kekata($x % 100);
        } else if ($x <2000) {
            $temp = " seribu" . kekata($x - 1000);
        } else if ($x <1000000) {
            $temp = Cetakpajak::kekata($x/1000) . " ribu" . Cetakpajak::kekata($x % 1000);
        } else if ($x <1000000000) {
            $temp = Cetakpajak::kekata($x/1000000) . " juta" . Cetakpajak::kekata($x % 1000000);
        } else if ($x <1000000000000) {
            $temp = Cetakpajak::kekata($x/1000000000) . " milyar" . Cetakpajak::kekata(fmod($x,1000000000));
        } else if ($x <1000000000000000) {
            $temp = Cetakpajak::kekata($x/1000000000000) . " trilyun" . Cetakpajak::kekata(fmod($x,1000000000000));
        }     
            return $temp;
    }
 
 
    public function terbilang($x, $style=3) {
        if($x<0) {
            $hasil = "minus ". trim($this->kekata($x));
        
        }else {
            $hasil = trim($this->kekata($x));
        }     
        switch ($style) {
            case 1:
                $hasil = strtoupper($hasil);
                break;
            case 2:
                $hasil = strtolower($hasil);
                break;
            case 3:
                $hasil = ucwords($hasil);
                break;
            default:
                $hasil = ucfirst($hasil);
                break;
        }     
        return $hasil. " Rupiah";
        
    }

    public function terbilangpisah($x){
        $kata=$this->terbilang($x);
        $str2="";
        $str3="";
        if(strlen($kata)<=98){
            $str1=$this->potongkata($kata, 98);
        } elseif (strlen($kata)<=(strlen($this->potongkata($kata, 98))+114)) {
            $str1=$this->potongkata($kata, 98);
            $str2=$this->potongkata(substr($kata, strlen($str1),(strlen($kata)-strlen($str1))),114);
        } elseif (strlen($kata)>(strlen($this->potongkata($kata, 98))+114-9)) {
            $str1=$this->potongkata($kata, 98);
            $str2=$this->potongkata(substr($kata, strlen($str1),(strlen($kata)-strlen($str1))),114);
            $mulai=strlen($str1)+strlen($str2);
            $str3=substr($kata, $mulai,(strlen($kata)-$mulai));
        } 
        
        return [$str1, $str2,  $str3];
       



    }

    public function potongkata($str,$x){
        if(strlen($str) > $x){
             // Penggal dan reverse
             $str     = strrev(substr($str, 0, $x));
             // Kembalikan string sampai spasi
             $str     = strrev(strstr($str, ' '));
             
        }

      // Kembalikan string, baik setelah dipenggal
      // atau tidak (karena tidak cukup)
      return $str;
    }




}
