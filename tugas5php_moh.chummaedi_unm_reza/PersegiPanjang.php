<?php 
    require_once "kumpulanBidang.php";

    class PersegiPanjang extends kumpulanBidang{
        public $panjang = 0;
        public $lebar = 0;
        
        public function __construct($panjang, $lebar)
        {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }

        public function namaBidang()
        {
           $namaBidang = "Persegi Panjang";
            return $namaBidang;
        }
        public function luasBidang()
        {
           $luasbidang = $this->panjang * $this->lebar;
            return $luasbidang;
        }
        public function KelilingBidang()
        {
            $kelilingBidang = 2 * ($this->panjang + $this->lebar);
            return $kelilingBidang;
        }
        public function keterangan()
        {
            echo "
            Panjang : ".$this->panjang."<br>
            lebar : ". $this->lebar."
            ";
        }
    }
?>