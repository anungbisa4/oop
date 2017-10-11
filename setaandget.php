<?php
   class olimpiade
   {
       public $hadiah;
       public $tempatPerlombaan;

       public function setHadiah($sethadiah)
       {
           $this->hadiah=$sethadiah;
       }
       public function getHadiah()
       {
           return "Hadiah Pertama : ".$this->hadiah;
       }
   }

  $hadiahOlimpiade= new olimpiade;

  $hadiahOlimpiade->setHadiah("Gold");

  echo "Anung Aninditha dalam lomba bulutangkir double putera mendapatkan". $hadiahOlimpiade->getHadiah();
