<?php
   class olimpiade
   {
       public $hadiah;
       public $tempatPerlombaan;

       public function __construct()
       {
           echo "ini construct akan muncul tanpa dipanggil <br/>";
       }

       public function getHadiah()
       {
           return "Hadiahnya adalah gold <br />";
       }

       public function __destruct()
       {
           echo "ini akan dieksekusu terakhir dan otomatis tanpa dipanggil";
       }
   }

  $hadiahOlimpiade= new olimpiade;

  echo $hadiahOlimpiade->getHadiah();
