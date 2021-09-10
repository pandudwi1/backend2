<?php
// interable
function getIterable():iterable{
  return["Gudang Toko Pertanian Bejo", "<hr>"];
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;

}

//class
class Pupuk{
  // Properties
  public $nama;
  public $harga;

  // construktor
  function __construct($nama, $harga) {
    $this->nama = $nama;
    $this->harga = $harga;
  }
  // destruktor
  function __destruct() {
    echo "Nama : {$this->nama} | Harga : Rp. {$this->harga}";
    echo "<br>";
  }
}

// inheritance
class Benih extends Pupuk {
}

// interface 
interface Produk{
  public function jenis();
}

class Kacang implements Produk{
  public function jenis() {
    echo "Bibit kacang diskon 30%","<br>";
  }
}

// Static Property
class Terjual {
  public static $satu = 250, $dua = 500;
}
// Static Methods
class Stok{
  public static function staticMethod() {
      echo "<hr>";
      echo "Stok Benih = 500 <br> Stok Pupuk = 1000";
      echo "<hr>";
  }
}

// objek
$urea = new Pupuk("Pupuk Urea", "2500/kg");
$za = new Pupuk("Pupuk ZA", "3000/kg");
$inpari = new Benih("Benih Padi Inpari 24", "115000");
$hibrida = new Benih("Benih Kacang Tanah Hibrida", "7500");
$produk = new Kacang();
$produk -> jenis();
Stok::staticMethod();
echo "Benih Terjual Bulan Ini : " . Terjual::$satu;
echo "<br> Pupuk Terjual Bulan Ini : " . Terjual::$dua;
echo "<hr>";
?>