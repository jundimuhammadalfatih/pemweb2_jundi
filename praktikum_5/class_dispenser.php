<?php
class Dispenser
{
    protected $volume;
    protected $hargaSegelas;
    private static $volumeGelas = 250;
    public $namaMinuman;
    function __construct($vol, $namaMinuman)
    {
        $this->volume = $vol;
        $this->namaMinuman = $namaMinuman;
        echo "<h3>Menu Cafe Bang Jak</h3><ol>";
        echo "<li>Ice Tea</li>";
        echo "<li>Oranga Juice</li>";
        echo "<li>Milk Shake</li>";
        echo "<li>Soda</li>";
        echo "<li>Coffee</li></ol>";
        echo "Berat Minuman : <b>$this->volume mL</b><br/><br/>";
    }
    public function hargaMinuman()
    {
        if ($this->namaMinuman == "Ice Tea") {
            $this->hargaSegelas = 3000;
        } elseif ($this->namaMinuman == "Orange Juice") {
            $this->hargaSegelas = 4000;
        } elseif ($this->namaMinuman == "Milk Shake") {
            $this->hargaSegelas = 5000;
        } elseif ($this->namaMinuman == "Soda") {
            $this->hargaSegelas = 4500;
        } elseif ($this->namaMinuman == "Coffee") {
            $this->hargaSegelas = 3500;
        } else {
            return "Habis";
        }
    }
    
    function isiUlang($isi_lagi)
    {
        echo "<b style=color:green>Dispenser telah di isi</b> <br><br>";
        $this->volume += $isi_lagi;
    }
}
$minum2 = new Dispenser(5000, "Ice Tea");
