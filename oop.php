

<?php

class Pertamina {
    public $ppn;
    public $liter;
    public $jenis;
    public $harga;

   
    public function __construct($liter = 0, $jenis = '') {
        $this->ppn = 0.1;
        $this->harga = [
            'premium' => 8000,
            'pertalite' => 10000,
            'pertamax' => 12000,
            'turbo' => 14000
        ];
        $this->liter = $liter;
        $this->jenis = $jenis;
    }

    // Method to set liter
    public function setLiter($liter) {
        $this->liter = $liter;
    }

    // Method to set jenis
    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    // Calculate the price before tax
    public function hargaBeli() {
        return $this->liter * $this->harga[$this->jenis];
    }

    // Calculate the tax amount
    public function hargaPPN() {
        return $this->ppn * $this->hargaBeli();
    }

    // Calculate the total amount to be paid
    public function totalBayar() {
        return $this->hargaBeli() + $this->hargaPPN();
    }

    // Display the information on the screen
    public function showScreen() {
        echo "Bahan Bakar : " . $this->jenis . "<br>";
        echo "Jumlah      : " . $this->liter . " liter<br>";
        echo "Harga BBM/L : " . $this->harga[$this->jenis] . "<br>";
        echo "Pajak       : " . number_format($this->hargaPPN(), 0, ',', '.') . "<br>";
        echo "Total Bayar : " . number_format($this->totalBayar(), 0, ',', '.') . "<br>";
    }
}

?>


