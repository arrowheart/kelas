<?php
    $judul = "belajar php";
    $judul1 = "siswa rpl";
    $judul2 = "smkn 2 buduran";
    $juduls = ["belajar php","siswa rpl","smkn 2 buduran"];

    echo $juduls[0];
    for ($i=0; $i <3 ; $i++) { 
        echo "<br>";
        echo $i;
        echo $juduls[$i];
    }

    foreach ($juduls as $key) {
        echo "<br>";
        echo $key;
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
    <h1><?php echo $judul?></h1>
    <h2><?php echo $judul1?></h2>
    <h2><?= $judul2?></h2>

    <h1><?= $juduls[0]?></h1>
    <h2><?= $juduls[1]?></h2>
    <h3><?= $juduls[2]?></h3>

    <?php
        for ($i=0; $i < 3; $i++) { 
            echo "<h1>";
            echo $juduls[$i];
            echo "</h1>";
        }
    ?>
    <h1>MENAMPILKAN PHP</h1>
    <?php 
        for ($i=0; $i < 3; $i++) { 
            ?>
            <h1><??= $juduls[$i]></h1>
            <?php
        }
    ?>

    <?php
        foreach ($juduls as $key) {
            echo "<h2>";
            echo $key;
            echo "</h2>";
            echo "<br>";
        }
    ?>
    <hr>

    <?php
        for ($i=1; $i <10 ; $i++) { 
            echo "<h$i>";
            echo "SMKN 2 BUDURAN";
            echo "</h$i>";
        }
    ?>

    <?php
        for ($i=6; $i >0 ; $i--) { 
            echo "<h$i>"."SMKN 2 BUDURAN"."<h$i>";
        }
    ?>
</body>
</html>