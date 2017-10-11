<?php

    class olimpiade
    {
        public $cabangOlahraga;
        public $hadiah;
        public $nama;

        // ini akan dieksekusi otomatis
        public function __construct()
        {
            echo "Perlombaan olimpiade tahun 2050 akan diadakan di indonesia <br/>";
        }
        // $setnama nanti akan menampung data dari luar class dan akan disimpan di properti nama
        public function setNama($setnama)
        {
            $this->nama=$setnama;
        }

        public function getNama()
        {
            return "Nama peserta adalah " .$this->nama;
        }
    }

       class atletik extends olimpiade
       {
           public function __construct()
           {
               // fungsi parent::__construct untuk memanggil otomatis funsi construk diparent
               parent::__construct();
               echo "ini akan juga di panggil otomatis jika class dipanggil";
           }
           // $jenis nanti akan menyimpan data yang datang dari luar
           public function getJenis($jenis)
           {
               return "Jenis perlomabaan atletik adalah ".$jenis;
           }
       }

$olimpiade = new olimpiade;
$atletik = new atletik;

$olimpiade->setNama("Anung Aninditha");

echo $olimpiade->getNama()."<br/>";
echo $atletik->getJenis("Lari");
