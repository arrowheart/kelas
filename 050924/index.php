<?php
    for ($i=1; $i <=10 ; $i++) { 
        echo $i;
    }

    echo "<br>";

    for ($i=10; $i >=1 ; $i--) { 
        echo $i;
    }

    echo "<br>";

    $ganjil =7%2;
    echo $ganjil;

    echo "<br>";

    for ($i=1; $i <100 ; $i++) { 
        $ganjil =$i % 2;
        if ($ganjil==0) {
            echo $i;
        }
    }

    echo "<br>";

    $kkm =80;
    $nilai =89;

    if ($nilai > $kkm) {
        echo "LULUS";
    }
    else {
        echo "TIDAK LULUS";
    }

    echo "<br>";

    $status ="TIDAK LULUS";
    if ($nilai > $kkm) {
        $status = "LULUS";
        echo $status;
    }

    echo "<br>";

    $rapot =0;
    $tugas =1;

    if ($tugas == 1) {
        $rapot = 80;
        echo $rapot;
    }

    echo "<br>";

    $bulan =6;
    $tanggal =28;
    $keterangan ="SALAH";

    if ($bulan > 0 && $bulan < 13) {
        // $keterangan ="BENAR";
        if ($tanggal > 0 && $tanggal < 32) {
            //$keterangan ="BENAR";
            if ($bulan == 1) {
                if ($tanggal <= 19) {
                    $keterangan = "CAPRICORN";
                }
                if ($tanggal >= 20) {
                    $keterangan = "AQUARIUS";
                }
            }
            if ($bulan == 2) {
                if ($tanggal <= 18) {
                    $keterangan = "AQUARIUS";
                }
                if ($tanggal >= 19 && $tanggal < 30) {
                    $keterangan = "PISCES";
                }
            }
            if ($bulan == 3) {
                if ($tanggal <= 20) {
                    $keterangan = "PISCES";
                }
                if ($tanggal >= 21) {
                    $keterangan = "ARIES";
                }
            }
            if ($bulan == 4) {
                if ($tanggal <= 19) {
                    $keterangan = "ARIES";
                }
                if ($tanggal >= 20) {
                    $keterangan = "TAURUS";
                }
            }
            if ($bulan == 5) {
                if ($tanggal <= 20) {
                    $keterangan = "TAURUS";
                }
                if ($tanggal >= 21) {
                    $keterangan = "GEMINI";
                }
            }
            if ($bulan == 6) {
                if ($tanggal <= 20) {
                    $keterangan = "GEMINI";
                }
                if ($tanggal >= 21) {
                    $keterangan = "CANCER";
                }
            }
            if ($bulan == 7) {
                if ($tanggal <= 22) {
                    $keterangan = "CANCER";
                }
                if ($tanggal >= 23) {
                    $keterangan = "LEO";
                }
            }
            if ($bulan == 8) {
                if ($tanggal <= 22) {
                    $keterangan = "LEO";
                }
                if ($tanggal >= 23) {
                    $keterangan = "VIRGO";
                }
            }
            if ($bulan == 9) {
                if ($tanggal <= 22) {
                    $keterangan = "VIRGO";
                }
                if ($tanggal >= 23) {
                    $keterangan = "LIBRA";
                }
            }
            if ($bulan == 10) {
                if ($tanggal <= 23) {
                    $keterangan = "LIBRA";
                }
                if ($tanggal >= 24) {
                    $keterangan = "SCORPIO";
                }
            }
            if ($bulan == 11) {
                if ($tanggal <= 21) {
                    $keterangan = "SCORPIO";
                }
                if ($tanggal >= 22) {
                    $keterangan = "SAGITTARIUS";
                }
            }
            if ($bulan == 12) {
                if ($tanggal <= 21) {
                    $keterangan = "SAGITTARIUS";
                }
                if ($tanggal >= 22) {
                    $keterangan = "CAPRICORN";
                }
            }
        }
    }
    echo $keterangan;
?>