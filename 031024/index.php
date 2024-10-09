Selesaikan perhitungan ini 7 % 5 + 8 * 4 - 9 / 3 menggunakan fungsi!

<?php
    $hasil = tambah(5, kali(3,7));
    $hasil = bagi($hasil, 4);
    $hasil = kurang($hasil, 9);
    $hasil = modulo($hasil, 8);
    echo $hasil;
    echo "<br>";

    $txt = modulo(7, 5);
    $txt = tambah($txt, 8);
    $txt = kali($txt, 4);
    $txt = kurang($txt, 9);
    $txt = bagi($txt, 3);
    echo $txt;

    function kali($a, $b) {
        $c= $a * $b;
        return $c;
    }

    function tambah($a, $b) {
        $c= $a + $b;
        return $c;
    }

    function kurang($a, $b) {
        $c= $a - $b;
        return $c;
    }

    function bagi($a, $b) {
        $c= $a / $b;
        return $c;
    }

    function modulo($a, $b) {
        $c= $a % $b;
        return $c;
    }

?>