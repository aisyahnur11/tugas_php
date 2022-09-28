<!-- bagaimana membuat -->
<!-- a. Constructor -->

<?php
class klinik_gigi {
  
   public $dokter = "Andi";
   public $pasien = "faro";
   
   public function __construct(){
     echo "pasien dipangiil dokter";
   }
  
   public function pasien_bernama(){
     return "pasien bernama $this->pasien dipanggil dokter $this->dokter";
  
   }

   //b. Destructor
   public function __destruct(){
     echo "pasien sedang berkonsultasi";
   }
}
  
$pasien_faro= new klinik_gigi();
  
echo "<br />";
echo $pasien_faro->pasien_bernama();
echo "<br />";
  
unset($pasien_faro);
  
echo "<br />";
echo "pasien berikutnya";
?>