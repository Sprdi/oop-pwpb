<?php

class Product{
    public $warna;

    public function __construct()
    {
        echo "product baru <br/>";
    }

    public function __clone()
    {
        echo "product di clone <br/>";
    }
}

$baju = new Product;
$baju->warna = "Hijau <br/>";

$baju2 = clone $baju;

echo $baju->warna;
echo $baju2->warna;

$baju2->warna = "Kuning <br/>";

echo $baju->warna;
echo $baju2->warna;
?>