<?php

  abstract class lapangan
  {
      public $panjang;
      private $lebar;
      public function __contruct($panjangInput)
      {
          echo "Ini Constructor induk";
          $this->panjang=$panjangInput;
      }
      private function tampilkanLebar($lebar1)
      {
          return "Lebar dari lapangan sepak bola : ". $this->lebar=$lebar1;
      }
      public function getPanjang()
      {
          return $this->panjang;
      }
  }

  $TampilLebar=new lapangan;

  echo $TampilLebar->tampilkanLebar(60);
