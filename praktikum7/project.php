<?php

// Class Balok
class Balok {
    public $panjang;
    public $lebar;
    public $tinggi;

    public function hitungVolume() {
        return $this->panjang * $this->tinggi;
    }

    public function hitungLuasPermukaan() {
        return 2 * (($this->panjang * $this->lebar)) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi);
    }

}

// Class Bola
class Bola {
    public $jari;

    public function hitungVolume() {
        return (4/3) * pi() * pow($this->jari, 3);
    }

    public function hitungLuasPermukaan() {
        return 4 * pi() * pow($this->jari, 2);
    }

}

// Object Balok
$balok = new Balok();
$balok->panjang = 5;
$balok->lebar = 3;
$balok->tinggi = 2;

echo "Balok : ";
echo"<br>";
echo "Volume : " . $balok->hitungVolume();
echo"<br>";
echo "Luas Permukaan : " . $balok->hitungLuasPermukaan();
echo"<br>";

// Object Bola
$bola = new Bola();
$bola->jari = 4;

echo"<br>";
echo "Bola : ";
echo"<br>";
echo "Volume : " . $bola->hitungVolume();
echo"<br>";
echo "Luas Permukaan : " . $bola->hitungLuasPermukaan();

?>