<?php

    $id_pendaftar = $_GET['id_pendaftar'];
    $q_tampil_data = mysqli_query($db, "SELECT * FROM tbdaftar WHERE id_pendaftar='$id_pendaftar'");
    $data = mysqli_fetch_array($q_tampil_data);

    if (empty($data['berkas']) or ($data['berkas'] == '-')){
        $berkas = "no-berkas.jpg";
    } else {
        $berkas = $data['berkas'];
    }

?>
<h2 class="text-center fw-bold p-4">Edit Pendaftar Beasiswa</h2>
<div class="container p-3" style="border: 1px solid black; border-radius: 20px">
    <form class="color-black mx-2 my-5 mx-sm-0 mx-md-5" action="controller/edit-beasiswa-proses.php" method="post" enctype="multipart/form-data">
        <h4 class="text-start mb-3">Update Pendaftar</h4>
        <div class="form-floating mb-4">
            <input type="text" value="<?php echo $data['id_pendaftar']; ?>" class="form-control" style="background-color: #c4c4c4;" name="id_pendaftar" id="id_pendaftar" placeholder="ID Pendaftar" readonly/>
            <label class="form-label">ID Pendaftar</label>
        </div>
        <div class="form-floating mb-4">
            <input type="text" value="<?php echo $data['nama']; ?>" class="form-control" name="nama" id="nama" placeholder="Nama" required/>
            <label class="form-label">Nama<span style="color:red">*</span></label>
        </div>
        <div class="form-floating mb-4">
            <input type="email" value="<?php echo $data['email']; ?>" class="form-control" name="email" id="email" placeholder="Email" required/>
            <label class="form-label">Email<span style="color:red">*</span></label>
        </div>
        <div class="form-floating mb-4">
            <input type="number" value="<?php echo $data['no_hp']; ?>" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP" required/>
            <label class="form-label">Nomor HP<span style="color:red">*</span></label>
        </div>
        <div class="form-floating mb-4">
            <select class="form-select" name="semester" id="semester" aria-label="Semester Saat Ini" required>
                <option <?php echo $data['semester']; ?> selected><?php echo $data['semester']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            <label class="form-label">Semester Saat ini<span style="color:red">*</span></label>
        </div>
        <div class="form-floating mb-4">
            <input type="number" value="<?php echo $data['ipk']; ?>" class="form-control" name="ipk" id="ipk" step="0.01" max="4.00" min="0.01" placeholder="0.00" onKeyPress="if(this.value.length==4) return false;" required/>
            <label class="form-label">IPK</label>
            <p class="lead mt-1" style="font-size: 14px;">Contoh IPK: 4.00</p>
        </div>
        <div class="form-floating mb-4">
            <select class="form-select" name="beasiswa" id="beasiswa" aria-label="Pilihan Beasiswa" required >
                <option value="<?php echo $data['beasiswa']; ?>" selected><?php echo $data['beasiswa']; ?></option>
                <option value="Beasiswa LPDP"> Beasiswa LPDP</option>
                <option value="Beasiswa Kemendikbud">Beasiswa Kemendikbud</option>
                <option value="Beasiswa Bank Indonesia - Riau">Beasiswa Beasiswa Bank Indonesia - Riau</option>
                <option value="Beasiswa KIP-Kuliah">Beasiswa KIP-Kuliah</option>
            </select>
            <label class="form-label">Pilihan Beasiswa<span style="color:red">*</span></label>
        </div>
        <div class="mb-4">
            <label class="form-label me-3">Status Ajuan</label>
            <?php

                if ($data['status_ajuan'] == 'Belum diverifikasi'){
                    echo '
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_ajuan" id="status_ajuan" value="Belum diverifikasi" checked/>
                    <label class="form-check-label">Belum diverifikasi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_ajuan" id="status_ajuan" value="Sudah diverifikasi" />
                        <label class="form-check-label">Sudah diverifikasi</label>
                    </div>
                    ';
                } else {
                    echo '
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_ajuan" id="status_ajuan" value="Belum diverifikasi" />
                        <label class="form-check-label">Belum diverifikasi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_ajuan" id="status_ajuan" value="Sudah diverifikasi" checked/>
                        <label class="form-check-label">Sudah diverifikasi</label>
                    </div>
                    ';
                }

            ?>
        </div>
        <div class="mb-4">
            <label class="form-label">Upload Berkas Syarat</label>
            <input type="hidden" name="berkas_awal" value="<?php echo $data['berkas']; ?>">
            <input class="form-control" type="file" accept="application/pdf, image/jpeg, application/zip" name="berkas" id="berkas">
            <p class="lead mt-1" style="font-size:16px;">Nama File: <label for="berkas" style="color: blue;" ><?php if (empty($data['berkas'])) echo 'no-berkas.jpg' ?><?php if (!empty($data['berkas'])) echo $data['berkas'] ?></label></p>
        </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-2 pt-1">
            <button type="submit" name="simpan" id="btn-simpan" class="btn btn-primary fs-5 px-5 fw-bold my-2 my-sm-0 me-sm-3" tabindex="-1" onclick="return confirm('Apakah anda yakin dengan perubahan data ini?')">Simpan</button>
            <a href="index.php?p=hasil-beasiswa" class="btn btn-danger fs-5 px-5 fw-bold" tabindex="-1">Batal</a>
        </div>
    </form>
</div>