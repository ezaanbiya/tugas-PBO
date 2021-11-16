<?php
/* APLIKASI MENGHITUNG ENERGI POTENSIAL PADA FISIKA */
class EP {
   public $m;
   public $g;
   public $h;
  
   public function __construct($m, $g, $h) {
     $this->m = $m;
     $this->g = $g;
     $this->h = $h;
     
   }
}

class hitung extends EP {
   public function hitung_EP() {
		 $x = $this->m * $this->g*$this->h;
     return $x;
   }

	 public function __destruct() {
	   echo "Keterangan:<br>
				Ep adalah Energi potensial (J)
				m adalah massa benda (kg)
				g adalah percepatan gravitasi (m/s2)
				h adalah tinggi benda dari permukaan tanah (meter)";
	 }
}
  
$EP_benda= new hitung(13,10,6);
  
echo "energi potensial benda tersebut  = ".$EP_benda->hitung_EP()."<hr>";
?>
