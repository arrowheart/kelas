<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 1 Sidoarjo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png"></a>
            </div>
            <div class="sekolah">
                <h2>SMPN 1 Sidoarjo</h2>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="?menu=home">Home</a></li>
                    <li><a href="?menu=sejarah">Sejarah</a></li>
                    <li><a href="?menu=kegiatan">Kegiatan</a></li>
                    <li><a href="?menu=jadwal">Jadwal</a></li>
                    <li><a href="?menu=galeri">Galeri</a></li>
                    <li><a href="?menu=kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
                if (isset($_GET["menu"])) {
                    $menu = $_GET["menu"];
                    echo $menu;
                    if ($menu=="home") {
                        require_once("pages/Home.php");
                    }
                    if ($menu=="sejarah") {
                        require_once("pages/Sejarah.php");
                    }
                    if ($menu=="kegiatan") {
                        require_once("pages/Kegiatan.php");
                    }
                    if ($menu=="jadwal") {
                        require_once("pages/Jadwal.php");
                    }
                    if ($menu=="galeri") {
                        require_once("pages/Galeri.php");
                    }
                    if ($menu=="kontak") {
                        require_once("pages/Kontak.php");
                    }
                    
                }
                else {
                        require_once("pages/Home.php");
                    }
            ?>
        </div>
        <div class="footer">
            <p>Web ini dibuat oleh Alodia Kinnard Putri K.</p>
        </div>
    </div>
</body>
</html>