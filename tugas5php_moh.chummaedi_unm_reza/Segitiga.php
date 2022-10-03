<?php 
    require_once "kumpulanBidang.php";
    
    class Segitiga extends kumpulanBidang{
        public $alas = 0;
        public $tinggi = 0;
        public $sisi = 0;

        public function __construct($alas,$tinggi,$sisi)
        {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
        }
        public function namaBidang()
        {
            $namaBidang = "Segitiga";
            return $namaBidang;
        }
        public function luasBidang()
        {
            $luasBidang = 0.5 * $this->alas * $this->tinggi;
            return $luasBidang;
        }
        public function kelilingBidang()
        {
            $kelilingBidang = $this->sisi * 3;
            return $kelilingBidang;
        }
        public function keterangan()
        {
            echo "
            Alas : ".$this->alas."<br>
            Tinggi : ". $this->tinggi."<br>
            Sisi : ". $this->sisi."<br>
            ";
        }
    }