<?php

  class Kendaraan
  {
      public $induk = " Bisa mengangkut manusia \n";
      public $kecepatan;

      public function __construct($kecepatanInput)
      {
          echo "Constructor dari kelas kendaraan .<br />";
          $this->kecepatan=$kecepatanInput;
      }
      public function getKecepatan()
      {
          return $this->kecepatan;
      }
  }

  class Mobil extends Kendaraan
  {
      public $brand;
      public function __contruct()
      {
          // Untuk memanggil fungsi contruct parentnya
          parent::__contruct(400);
          echo "Contructor dari kelas Mobil. <br />";
      }
  }
  class Pesawat extends Kendaraan
  {
  }

  $ObjectMobil = new Mobil;
  var_dump($ObjectMobil->getKecepatan());
