<?php 
 
  class mobil {
      public $merk, $tipe, $mesin, $max_speed;
      function cetakTipe(){
          return $this->tipe;
      }
      function kecepatanMaksimal(){
          return "kecepatan maksimal dari mobil ini adalah :".$this->max_speed;
      }
  }

$bmw = new mobil;
$bmw ->merk ="BMW";
$bmw ->tipe ="320i";
$bmw ->mesin ="2000cc";
$bmw ->max_speed ="280km/h";
 
$bmw2 = new mobil;
$bmw2->merk ="BMW";
$bmw2->tipe ="320i";
$bmw2->mesin ="2000cc";
$bmw2->max_speed ="280km/h";

echo "$bmw2->tipe";
echo "<br>";
echo "$bmw->tipe";

if($bmw === $bmw2) {
    echo "sama";
}else{
    echo "tidak";
}

?>