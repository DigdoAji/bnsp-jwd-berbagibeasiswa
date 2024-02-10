<?php

    include '../config/koneksi.php';

    if(isset($_GET['id_pendaftar'])){
        $id_pendaftar = $_GET['id_pendaftar'];

        // Mendapatkan nama berkas dari database berdasarkan id_pendaftar
        $sql_nama_berkas = "SELECT berkas FROM tbdaftar WHERE id_pendaftar = '$id_pendaftar'";
        $query_nama_berkas = mysqli_query($db, $sql_nama_berkas);

        if($query_nama_berkas) {
            $row = mysqli_fetch_assoc($query_nama_berkas);
            $nama_berkas = $row['berkas'];

            // Hapus berkas dari folder lokal
            $folder_berkas = "../assets/berkas/$nama_berkas";
            if(file_exists($folder_berkas)) {
                @unlink($folder_berkas);
            }
        }

        // Hapus data pendaftar dari database
        $sql = "DELETE FROM tbdaftar WHERE id_pendaftar = '$id_pendaftar'";
        $query = mysqli_query($db, $sql);

        if($query){
            header("location:../index.php?p=hasil-beasiswa");
        } else{
            echo "Gagal hapus data anggota";
        }
    }