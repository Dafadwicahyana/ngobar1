<?php
// menghitung luas persegi panjang
$panjang = 24;
$lebar = 9;

echo"luas persegi panjang adalah=", $panjang * $lebar;
echo "<br>";

// membuat function menghitung luas persegi 
1 reference
function rumus_persegi_panjang ($panjang, $lebar): float|int 
{
    $hasil = $panjang * $lebar;
    return $hasil;
}
$panjang = 20
$lebar = 10
$hasil_penjumlahan = rumus_persegi_panjang(panjang: $panjang, lebar: $lebar);
echo "hasil dari persegi panjang = $panjang = $panjang * $lebar";
echo "<br>";
echo "adalah $hasil_penjumlahan <br>";

// membuat class
1 reference|0 implentations
class rumus_persegi_panjang
{
    1 reference|0 overrides
    public function rumus_persegi_panjang ($panjang, $lebar): float|int
    {
        $jawaban = $panjang * $lebar;
        return $jawaban;
    }

}
$panjang = 30;
$lebar = 10;

$persegipanjang = new rumus_persegi_panjang;  
echo "hasil dari class diatas adalah =",$persegipanjang(panjang: $panjang,lebar: $lebar);
echo "<br>";
echo "<br>";
echo "<br>";

// keliling persegi panjang
echo "Menghitung Keliling Persegi <br>";

// hitung keliling persegi panjang

$p = 30;
$l = 15;
$k = 2;
$keliling = $k * $p * $l;
echo "hasil dari keliling persegi panjang = $keliling";
echo "<br>";

// function keliling persegi panjang
function keliling_persegi_panjang ($panjang,$lebar){
    return 2* ($panjang * $lebar);
}

$panjang = 24;
$luas = 13;

$keliling = keliling_persegi_panjang($panjang, $lebar);
echo "keliling persegi panjang adalah= " .$keliling;
echo "<br>";

// membuat class keliling persegi panjang

class keliling_persegi_panjang{
    private $panjang;
    private $lebar;
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}


$keliling_persegi_panjang = new keliling_persegi_panjang(45, 20);
echo "Keliling persegi panjang Adalah: " . $keliling_persegi_panjang->hitungKeliling();