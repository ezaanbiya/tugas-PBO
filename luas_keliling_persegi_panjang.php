<?php
	// buat class persegi panjang
	class persegi_panjang{
	   private $p;
	   private $l;
	   
	   public function __construct($p, $l){
       		$this->p = $p;
            $this->l = $l;
	   }
	  
	   public function hitung_luas(){
	     $x = $this->p * $this->l;
         return $x;
       }
         
       public function hitung_keliling(){
         $y = 2 * ($this->p + $this->l);
         return $y;
       }
	   
       public function __destruct(){
	     echo "Keterangan : Untuk menghitung luas dan keliling persegi panjang berhasil <hr>";
	   }
	}
	// buat objek dari class persegi_panjang (instansiasi)
	$luas_persegi_panjang = new persegi_panjang(3, 4);
    $keliling_persegi_panjang = new persegi_panjang(3, 4);
	  
	echo "Luas persegi panjang tersebut adalah = " .$luas_persegi_panjang->hitung_luas(). "<hr>";
    echo "Keliling persegi panjang tersebut adalah = " .$keliling_persegi_panjang->hitung_keliling(). "<hr>";

?>
