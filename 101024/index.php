<form actions="" method="post">
    nama:
    <input type="text" name="nama" placehorder="Masukkan Nama">
    alamat: 
    <input type="text" name="alamat" placehorder="Masukkan Alamat">
    <input type="submit" value="simpan" name="simpan">
</form>

<?php
    $host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $database = 'sekolah';

    $koneksi = mysqli_connect($host, $user, $password, $database);

    if (isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $sql = "INSERT INTO siswa VALUES ('', '$nama', '$alamat')";
        // echo $sql;
        mysqli_query($koneksi, $sql);
    }

    $query = "SELECT * FROM siswa";

    // echo $query;
    $result = mysqli_query($koneksi, $query);
    // var_dump($result);

    $nama = mysqli_fetch_assoc($result);
    
    echo '<h1>DATA SISWA</h1>';
    echo '<table border=1>';
    echo '<thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
          </thead>
          <tbody>';

    while ($row = mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>'.$row[0].'</td>';
        echo '<td>'.$row[1].'</td>';
        echo '<td>'.$row[2].'</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

    $kelash = "SELECT * FROM kelas";
    $queer = mysqli_query($koneksi, $kelash);

    echo '<h1>DATA KELAS</h1>';
    echo '<table border=1>';
    echo '<thead>
            <tr>
                <th>ID</th>
                <th>Kelas</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>';
    while ($row = mysqli_fetch_array($queer)){
        echo '<tr>';
        echo '<td>'.$row[0].'</td>';
        echo '<td>'.$row[1].'</td>';
        echo '<td>'.$row[2].'</td>';
        echo '</tr>';
    }
    echo '</tbody';
    echo '</table>';
?>