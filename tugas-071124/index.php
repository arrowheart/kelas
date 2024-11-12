<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 2 Buduran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href=""><img src="images/logo.png" alt="SMKN 2 Buduran"></a>
            </div>
            <div class="sekolah">
                <h2>SMKN 2 Buduran</h2>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="?menu=home">Home</a></li>
                    <li><a href="?menu=sejarah">Sejarah</a></li>
                    <li><a href="?menu=konsenkeahli">Konsentrasi Keahlian</a></li>
                    <li><a href="?menu=bidang">Bidang</a></li>
                    <li><a href="?menu=fitur">Fitur-fitur</a></li>
                    <li><a href="?menu=administrasi">Administrasi</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
                if (isset($_GET["menu"])) {
                    $menu = $_GET["menu"];
                    echo $menu;
                    if ($menu=="home") {
                        require_once("pages/home.php");
                    }
                    if ($menu=="sejarah") {
                        require_once("pages/sejarah.php");
                    }
                    if ($menu=="konsenkeahli") {
                        require_once("pages/konsenkeahli.php");
                    }
                }
                else {
                        require_once("pages/home.php");
                    }
            ?>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>