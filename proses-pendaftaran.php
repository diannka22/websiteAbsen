<?php

include("config.php");
if(isset($_POST['absen'])){

    $nomer = $_POST['nomer'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $mapel = $_POST['mapel'];
    $haritgl = $_POST['haritgl'];

    // buat query
    $sql = "INSERT INTO absen_siswa(nomer, nama, kelas, jenis_kelamin, jurusan, mapel, haritgl) VALUE ('$nomer', '$nama', '$kelas', '$jenis_kelamin', '$jurusan', '$mapel', '$haritgl')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: indexx.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: indexx.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>