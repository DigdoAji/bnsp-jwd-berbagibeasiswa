<?php

    include '../config/koneksi.php';

    $id_pendaftar = $_POST['id_pendaftar'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $beasiswa = $_POST['beasiswa'];
    $status_ajuan = $_POST['status_ajuan'];


    if (isset($_POST['simpan'])) {
        extract($_POST);
        $nama_file = $_FILES['berkas']['name'];
    
        if (!empty($nama_file)) {
            $lokasi_file = $_FILES['berkas']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $berkas_beasiswa = $nama . "." . $tipe_file;
            
            $folder = "../assets/berkas/$berkas_beasiswa";
            @unlink($folder);
            
            move_uploaded_file($lokasi_file, "$folder");

        } else {
            $berkas_beasiswa = $berkas_awal;
        }
            
        
        mysqli_query(
            $db, 
            "UPDATE tbdaftar 
            SET nama='$nama', email='$email', no_hp='$no_hp', semester='$semester', ipk='$ipk', beasiswa='$beasiswa', berkas='$berkas_beasiswa',
            status_ajuan='$status_ajuan' WHERE id_pendaftar='$id_pendaftar'"
        );
        header("location:../index.php?p=hasil-beasiswa");
    }