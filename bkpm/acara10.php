<?php
// Class induk
class mobiLengkap {
    public function hidupkanMobil() {
        // kode di sini
    
        System.out.println("Mobil dihidupkan.");
    }

    public function matikanMobil() {
        System.out.println("Mobil dimatikan.");
    }

    public function ubahGigi() {
        System.out.println("Gigi diubah.");
    }
}

// Class turunan
class MobilBMW extends mobiLengkap {
    public void nontonTV() {
        System.out.println("TV dihidupkan.");
        System.out.println("TV mencari channel.");
        System.out.println("TV menampilkan gambar.");
    }
}

// Class untuk aksi mobil
class MobilBMWberaksi {
    public void nontonTv() {
        MobilBMW mobil = new MobilBMW();
        mobil.nontonTV();
    }

    public void hidupkanMobil() {
        MobilBMW mobil = new MobilBMW();
        mobil.hidupkanMobil();
    }

    public void matikanMobil() {
        MobilBMW mobil = new MobilBMW();
        mobil.matikanMobil();
    }

    public void ubahGigi() {
        MobilBMW mobil = new MobilBMW();
        mobil.ubahGigi();
    }
}

?>
