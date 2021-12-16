<?php
  class Bensin extends Exception{
    public function pesanError(){
      //pesan error
      $error = 'Anda Tidak Mendapatkan Bensin';
      return $error ;
    }
  }

  $nominal= 10000;

  try{
    //check if
    if($nominal > 10000){
      throw new Bensin($nominal);
    }
    else{
      throw new Exception("Anda Mendapatkan Bensin");
    }
  }
  catch(Bensin $e){
    echo $e-> pesanError();
  }
  catch(Exception $e){
    echo $e-> getMessage();
  }
?>