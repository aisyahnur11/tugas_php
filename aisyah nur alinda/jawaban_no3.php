<?php
    class klinik_gigi{
        public $dokter = "zalfa";
        public $pasien = "qya";
        public $gejala = "pasang behel";

    public function __construct(){
        echo "dokter : $this->dokter,pasien : $this->pasien,gejala : $this->gejala";
    }
    }
    $kg = new klinik_gigi;