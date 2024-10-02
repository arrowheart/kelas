<form action="" method="get">
    <input type="number" name="bulan" placeholder="Masukkan Bulan">
    <input type="number" name="tanggal" placeholder="Masukkan tanggal">
    <input type="submit" value="Kirim" name="tombol">
</form>

<?php
    if (isset($_GET["tombol"])) {
        $bulan = $_GET["bulan"];
        $tanggal = $_GET["tanggal"];

        // echo $bulan;
        // echo "<br>";
        // echo $tanggal;
        $keterangan = "SALAH";

        if ($bulan > 0 && $bulan < 13 && $tanggal > 0 && $tanggal < 32) {
            // $keterangan = "BENAR";
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
        
        echo $keterangan;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="kalkulator.php">tes</a></h1>
</body>
</html>