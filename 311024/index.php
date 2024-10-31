<?php

    $identitas = ["nama" => "Alodia Kinnard Putri Kurnianto",
                  "alamat" => "Pondok Jati, Sidoarjo",
                  "telepon" => "085733033717",
                  "email" => "arrowdiakinnard@gmail.com",
                  "instagram" => "@alodiakinnard"];
    $sekolah = ["TK" => "RA Al-Faradis",
                "SD" => "MI Ma'arif Pagerwojo",
                "SMP" => "SMPN 1 Sidoarjo",
                "SMK" => "SMKN 2 Buduran Sidoarjo"];
    $hobi = ["Menari","Bermain Game","Mendengarkan Musik","Menyanyi","Berimajinasi"];
    $skill = ["c++" => "Expert",
              "HTML" => "Intermediate",
              "CSS" => "Intermediate",
              "PHP" => "Newbie"];
    $deskripsi = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  Sed est lectus, tempus non efficitur vel, congue a lacus. 
                  Aliquam maximus sapien lacus, nec elementum ex blandit eleifend. 
                  Nam pharetra risus arcu, non semper justo gravida et. 
                  Duis congue felis nibh, at interdum magna interdum at. <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Riwayat Hidup</title>
    <style>
        h1, h2, table, p {
            text-align: center;
        }

        table {
            width: 800px;
        }

        .container {
            width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DAFTAR RIWAYAT HIDUP</h1>
        <h2>Data Diri</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($identitas as $key => $value) {
                    ?>
                    <tr>
                        <td><?=$key?></td>
                        <td><?=$value?></td>
                    </tr>
                <?php
                }
            ?>
            </tbody>
        </table>
        <hr>
        <h2>Riwayat Pendidikan</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Pendidikan</th>
                    <th>Nama Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($sekolah as $key => $value) {
                        ?>
                        <tr>
                            <td><?=$key?></td>
                            <td><?=$value?></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Skill Coding</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($skill as $key => $value){
                        ?>
                        <tr>
                            <td><?=$key?></td>
                            <td><?=$value?></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Hobi</h2>
        <ul>
            <?php
                foreach ($hobi as $key) {
                    ?>
                    <li><?=$key?></li>
                <?php
                }
            ?>
        </ul>
        <hr>
        <h2>Tentang Aku</h2>
        <p><?=$deskripsi?></p>
    </div>
</body>
</html>