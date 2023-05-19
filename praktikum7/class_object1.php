<?php
class Mamalia
{
    //property
    public $nama;
    public $warna;
    public $habitat;

    //method
    function menyusui()
    {
        return "$this->nama adalah hewan menyusui";
    }
    function melahirkan()
    {
        return "$this->nama adalah hewan melahirkan";
    }
}

$objek = new Mamalia;
$objek->nama = "Kucing";
$objek->warna = "Coklat";
$objek->habitat = "Sekitar Manusia";
