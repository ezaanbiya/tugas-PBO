<?php
   class EP{
    public $m;
    public $g;
    public $h;
    public function __construct($m, $g, $h){
      $this->m = $m;
      $this->g = $g;
      $this->h = $h;
      
    }
  }
  final class hitung extends EP{
    public function hitung_EP(){
      $x = $this->m * $this->g * $this->h;
      return $x;
    }
    final public function __destruct(){
      echo "Keterangan :<br><br>
            Ep adalah Energi potensial (J) <br>
            m adalah massa benda (kg) <br>
            g adalah percepatan gravitasi (m/s2) <br>
            h adalah tinggi benda dari permukaan tanah (meter)";
    }
  }  
  $EP_benda= new hitung(13, 10, 6); 
  echo "Energi potensial benda tersebut  = " . $EP_benda->hitung_EP() . "<hr>";
?>