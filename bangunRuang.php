<?php

abstract class bangunRuang
{
    abstract public function hitungLuas();

    public function tampilLuas()
    {
        echo "Hasil :".$this->hitungLuas()."<br/>";
    }
}

  class persegi extends bangunRuang
  {
      public $sisi;

      public function setSisi($setsisi)
      {
          $this->sisi=$setsisi;
      }
      public function hitungLuas()
      {
          return $this->sisi*$this->sisi;
      }
  }

class lingkaran extends bangunRuang
{
    public $jari;
    public function setJari($setjari)
    {
        $this->jari=$setjari;
    }
    public function hitungLuas()
    {
        return pi()*$this->jari*$this->jari;
    }
}

$persegi= new persegi;
$lingkaran = new lingkaran;
$persegi->setSisi(12);
$lingkaran->setJari(7);
$persegi->hitungLuas();
$persegi->tampilLuas();

$lingkaran->hitungLuas();
$lingkaran->tampilLuas();
