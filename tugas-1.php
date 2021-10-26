<?php                                                               //Diawali dengan
    class laptop{                                                   //Buat class laptop
        private $jenis_processor = "Intel Core i5 Inside™";         //Property dengan hak akses private
        public function tampilkan_processor(){                      //Pendeklarasian function dalam class
            return $this->jenis_processor;                          //Eksekusi fungsi berhenti dan nilai dikembalikan ke pemanggil fungsi
        }
    }
    class komputer extends laptop{                                  //Buat class komputer
        public function tampilkan_processor(){                      //Pendeklarasian function dalam class
            return $this->jenis_processor;                          //Eksekusi fungsi berhenti dan nilai dikembalikan ke pemanggil fungsi
        }
    }
    class jenis{                                                    //Buat class jenis
        protected $nama = "ASUS Vivobook X512JA TOUCH ";            //Menentukan property dengan protected    
        protected function nama(){                                  //Method protected
            return "Saya membeli laptop " .$this->nama;             //Eksekusi fungsi berhenti dan nilai dikembalikan ke pemanggil fungsi
        }
    
        public function tampilkan_nama(){                           //Pendeklarasian function dalam class
            return $this->nama();                                   //Eksekusi fungsi berhenti dan nilai dikembalikan ke pemanggil fungsi
        } 
    }
    $jenis_baru = new jenis();                                      //Buat objek dari class jenis (instansiasi)
    $laptop_baru = new laptop();                                    //Buat objek dari class laptop (instansiasi)
    $komputer_baru = new komputer();                                //Buat objek dari class komputer (instansiasi)\
    
    echo $jenis_baru->tampilkan_nama();                             //Jalankan method dari class jenis
    echo $laptop_baru->tampilkan_processor();                       //Jalankan method dari class laptop
    echo $komputer_baru->tampilkan_processor();                     //Jalankan method dari class komputer (error)
    
                                                                    // Notice: Undefined property: komputer::$jenis_processor
                                                                    //Diakhiri dengan
?>