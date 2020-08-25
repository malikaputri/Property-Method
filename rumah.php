<?php
class rumah{
   public $ukuran, $pagar, $tanaman, $lampu;
 
   public function tipeA()
   {
     return "rumah memiliki halaman";
   }
  public function tipeB()
   {
     return "rumah memiliki dapur";
   }
   public function tipeC()
   {
     return "rumah memiliki jendela";
   }
   public function tipeD()
   {
     return "rumah memiliki pintu";
   }
}
$rumah_lala = new rumah();
$rumah_lala->ukuran = "9000meter";
$rumah_lala->pagar = "kayu";
$rumah_lala->tanaman = "bunga anggrek";
$rumah_lala->lampu = "philips";
echo $rumah_lala->tipeA();
echo "<br/>";
echo $rumah_lala->tipeB();
echo "<br/>";
echo $rumah_lala->tipeC();
echo "<br/>";
echo $rumah_lala->tipeD();
?>