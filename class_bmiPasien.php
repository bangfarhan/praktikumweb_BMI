<?php

    class BmiPasien
    {
        public $nama,$umur,$jenis_kelamin,$berat,$tinggi;

        public function __construct($nama,$umur,$jenis_kelamin,$berat,$tinggi)
        {
            $this->nama            = $nama;
            $this->umur            = $umur;
            $this->jenis_kelamin   = $jenis_kelamin;
            $this->berat            = $berat;
            $this->tinggi          = $tinggi;
        }
        public function hasilBmi()
        {
           $tinggi = (int)$this->tinggi / 100;
           $hasil = $tinggi * $tinggi;
           $hasil = (int)$this->berat / $hasil;       
           return number_format($hasil,0,'',''.'');
        }

        public function statusBmi($status)
        {
            
            switch ($status) {
                case $status < 18.5           : 
                    return "Kekurangan berat badan";
                    break;

                case $status < 24.9       : 
                    return "Normal Ideal";
                    break;

                case $status < 29.9   : 
                    return "Kelebihan berat badan";
                    break;

                case $status >= 30.0:
                    return "Kegemukan (Obesitas)";
                    break;
    
                default:
                    # code...
                    break;
            }
            # code...
        }
    }
        
?>