<?php
class Buah
{
    //properrty
    public $nama, $warna, $rasa;

    //method
    public function __construct($n, $w, $p)
    {
        $this->nama = $n;
        $this->warna = $w;
        $this->rasa = $p;
    }
    function tumbuh()
    {
        return "$this->nama bisa tumbuh besar";
    }
}

$objekBuah = new Buah("Jeruk", "Oren", "Manis");
echo $objectBuah->tumbuh();