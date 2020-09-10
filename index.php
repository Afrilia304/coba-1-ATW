<?php 
 
  class mobil {
      public $merk, $tipe, $mesin, $max_speed;

      public function cetakTipe(){
          return $this->tipe;
      }
      function kecepatanMaksimal(){
          return "kecepatan maksimal dari mobil ini adalah :".$this->max_speed;
      }
      function injekGas(){
          return "Mengalirkan bensin ke ruang bakar, rpm naik, roda berputar";
      }
  }
   
//ini merupakan turunan dari class mobil, bagaimana membuat inhereati di sini dengan cara menuliskan extends,
//artinya class BMW akan memiliki kemamouan yang sama seperti yang dimiliki mobil artinya

  class BMW extends Mobil {

  }

  //tesla mempunyai kelebihan lain misal mempunyai kemampuan parking sendiri
  class Tesla extends Mobil {
      function selfParking(){
          echo "Parkir Sendiri";
      }
      //ada kemampuan overide
      //kemampuan untuk menimpa fungsi dari parent secara umum
      function injekGas(){
        //jika memanggil parent injekGas artinya parent si mobil maka dia akan mengembalikan fungsi dari return bmw tadi
        //return parent::injekGas();  
        return "Mengalirkan listrik ke dinamo, rpm naik, roda berputar";
      }
  }

$bmw = new BMW;
$bmw ->merk ="BMW";
$bmw ->tipe ="320i";
$bmw ->mesin ="2000cc";
$bmw ->max_speed ="280km/h";
 
$tesla = new Tesla;
$tesla->merk = "Tesla";
$tesla->tipe ="Model X";
$tesla->mesin = "Listrik";
$tesla->max_speed = "280km/h";


echo "BMW : ".$bmw->injekGas();
echo "<br>";
echo "<br>";
echo "Tesla : ".$tesla->injekGas();







?>