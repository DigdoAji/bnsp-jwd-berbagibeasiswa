<?php

  include "./config/koneksi.php"

?>

<h2 class="text-center fw-bold p-4">Hasil Data Beasiswa</h2>
<div class="container p-3" style="border: 1px solid black; border-radius: 10px">
    <br />
    <table class="table table-bordered table-striped" >
        <thead class="text-white fw-bold" style="background-color: #337CCF !important;">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Nomor HP</th>
              <th>Semester</th>
              <th>IPK</th>
              <th>Beasiswa</th>
              <th>Berkas</th>
              <th>Status Ajuan</th>
              <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php

            $no = 1;
            $sql = "SELECT * FROM tbdaftar";
            $query = mysqli_query($db, $sql);

            while ($data = mysqli_fetch_array($query)){
                if (empty($data['berkas']) or ($data['berkas'] == '-')){
                    $berkas = "no-berkas.jpg";
                } else {
                    $berkas = $data['berkas'];
                }

          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['no_hp']; ?></td>
              <td><?php echo $data['semester']; ?></td>
              <td><?php echo $data['ipk']; ?></td>
              <td><?php echo $data['beasiswa']; ?></td>
              <td><?php echo $berkas ?></td>
              <td><?php echo $data['status_ajuan']; ?></td>
              <td>
                <a href="index.php?p=edit-beasiswa&id_pendaftar=<?php echo $data['id_pendaftar']; ?>" class="btn btn-success btn-sm text-white">Edit</a>
                <a href="controller/hapus-beasiswa-proses.php?id_pendaftar=<?php echo $data['id_pendaftar']; ?>" class="btn btn-danger btn-sm btn-delete" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Hapus</a>
              </td>
            </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>