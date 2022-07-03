<?php
require_once './class_persegi_panjang.php';

$persegi_panjang1 = new PersegiPanjang(5, 10);
$persegi_panjang2 = new PersegiPanjang(4, 8);

echo "<br> Luas dari linkaran I adalah " . $persegi_panjang1->getLuas();
echo "<br> Keliling dari linkaran I adalah " . $persegi_panjang1->getKeliling();

echo "<br/>";

echo "<br> Luas dari linkaran II adalah " . $persegi_panjang2->getLuas();
echo "<br> Keliling dari linkaran II adalah " . $persegi_panjang2->getKeliling();
