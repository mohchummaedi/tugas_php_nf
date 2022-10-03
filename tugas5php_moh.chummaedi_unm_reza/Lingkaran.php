<?php 
    require_once "kumpulanBidang.php";

    class Lingkaran extends kumpulanBidang{
        public $jari2 = 2;
        
        public function __construct($jari2)
        {
            $this->jari2 = $jari2;
        }
        public function namaBidang()
        {
            $namaBidang = "Lingkaran";
            return $namaBidang;
        }
        public function luasBidang()
        {
            $luasBidang = 3.14 * $this->jari2 * $this->jari2;
            return $luasBidang;
        }
        public function KelilingBidang()
        {
            $kelilingBidang = 2 * 3.14 * $this->jari2;
            return $kelilingBidang;
        }
        public function keterangan()
        {
            echo "
            Jari - Jari : ".$this->jari2."<br>
           
            ";
        }
    
    }
?>