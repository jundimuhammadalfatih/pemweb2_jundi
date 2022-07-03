<?php

require_once "./class_account.php";

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);
        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$jundi = new AccountBank('ACC001', 'Jundi', 965000000);
$alfa = new AccountBank('ACC002', 'Alfa', 672000000);
$fatih = new AccountBank('ACC003', 'Fatih', 814000000);

$jundi->deposit(1000000);
$jundi->cetak();
$jundi->doTransfer($alfa, 1000000);
$jundi->cetak();
$jundi->doTransfer($fatih, 5000000);
$jundi->cetak();
$alfa->cetak();
$fatih->cetak();
?>