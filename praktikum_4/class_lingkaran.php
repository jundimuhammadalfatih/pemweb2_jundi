<?php
class Lingkaran
{
    private $jari;
    const PHI = 3.14;

    public function __construct($r)
    {
        $this->jari = $r;
    }
    public function getLuas()
    {
        return self::PHI * $this->jari;
    }
    public function getKeliling()
    {
        return 2 * self::PHI * $this->jari;
    }
}
