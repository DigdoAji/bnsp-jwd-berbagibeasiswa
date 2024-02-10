<?php

    include '../config/koneksi.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $beasiswa = $_POST['beasiswa'];
    $status_ajuan = "Belum diverifikasi";


    if(isset($_POST['daftar'])){
        extract($_POST);
        $nama_file = $_FILES['berkas']['name'];

        if (!empty($nama_file)) {
            $lokasi_file = $_FILES['berkas']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $berkas_beasiswa = $nama . "." . $tipe_file;

            $folder = "../assets/berkas/$berkas_beasiswa";

            move_uploaded_file($lokasi_file, "$folder");
        } else {
            $berkas_beasiswa = "";
        }

        $sql = "INSERT INTO tbdaftar VALUES('$id_pendaftar', '$nama', '$email', '$no_hp', '$semester', '$ipk', '$beasiswa', '$berkas_beasiswa', '$status_ajuan')";
        $query = mysqli_query($db, $sql);
        
        if($query){
            header("location: ../index.php?p=hasil-beasiswa");
        } else {
            echo "<script>alert('Gagal Input Data Pendaftar Beasiswa');</script>";
        }
    }