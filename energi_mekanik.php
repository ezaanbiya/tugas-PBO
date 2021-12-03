<?php
   abstract class energi_mekanik{
      abstract public function hitung_rumus();
   }

   interface rumus{
      public function rumus_1();
      public function rumus_2();
   }
   
   class energi_potensial extends energi_mekanik implements rumus{
      public function hitung_rumus(){
         return "<b>Rumus Energi Potensial</b>";
      }
      public function rumus_1(){
         $m = 1;
         $g = 2;
         $h = 3;
         $EP = $m * $g * $h;
         return "Hasil energi potensial gravitasi = $EP";
      }
      public function rumus_2(){
         $k = 1;
         $Q = 2;
         $q = 3;
         $r = 4;
         $EP = $k * ($Q * $q / $r);
         return "Hasil energi potensial listrik = $EP";
      }
   }

   class energi_kinetik extends energi_mekanik implements rumus{
      public function hitung_rumus(){
         return "<b>Rumus Energi Kinetik</b>";
      }
      public function rumus_1(){
         $massa = 1;
         $v = 2;
         $EK = 0.5 * $massa * $v**2;
         return "Hasil energi kinetik translasi = $EK";
      }
      public function rumus_2(){
         $y = 1;
         $m = 2;
         $c = 3;
         $EK = ($y - 1) * $m * $c**2;
         return "Hasil energi kinetik relativistik = $EK";
      }
   }

   $energi_potensial = new energi_potensial();
   $energi_kinetik = new energi_kinetik();

   function hitung_rumus_energi_potensial($objek_energi_potensial){
      return $objek_energi_potensial->hitung_rumus();
   }
   function hitung_rumus_1_EP($objek_energi_potensial){
      return $objek_energi_potensial->rumus_1();
   }
   function hitung_rumus_2_EP($objek_energi_potensial){
      return $objek_energi_potensial->rumus_2();
   }

   function hitung_rumus_energi_kinetik($objek_energi_kinetik){
      return $objek_energi_kinetik->hitung_rumus();
   }
   function hitung_rumus_1_EK($objek_energi_kinetik){
      return $objek_energi_kinetik->rumus_1();
   }
   function hitung_rumus_2_EK($objek_energi_kinetik){
      return $objek_energi_kinetik->rumus_2();
   }
   
   echo hitung_rumus_energi_potensial($energi_potensial);
   echo "<br>";
   echo hitung_rumus_1_EP($energi_potensial);
   echo "<br>";
   echo hitung_rumus_2_EP($energi_potensial);
   echo "<hr>";

   echo hitung_rumus_energi_kinetik($energi_kinetik);
   echo "<br>";
   echo hitung_rumus_1_EK($energi_kinetik);
   echo "<br>";
   echo hitung_rumus_2_EK($energi_kinetik);
?>