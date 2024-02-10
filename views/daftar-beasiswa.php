<h2 class="text-center fw-bold p-4">Pendaftaran Beasiswa</h2>
<div class="container p-3" style="border: 1px solid black; border-radius: 20px">
    <form class="color-black mx-2 my-5 mx-sm-0 mx-md-5" action="controller/input-beasiswa-proses.php" method="post" enctype="multipart/form-data">
        <h4 class="text-start mb-3">Register Pendaftar</h4>
        <div class="form-floating mb-4">
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required/>
            <label class="form-label">Nama<span style="color:red">*</span></label>
        </div>
        <div class="form-floating mb-4">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required/>
            <label class="form-label">Email<span style="color:red">*</span></label>
        </div>
        <div class="form-floating mb-4">
            <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP" required/>
            <label class="form-label">Nomor HP<span style="color:red">*</span></label>
        </div>
        <div class="form-floating mb-4">
            <select class="form-select" name="semester" id="semester" aria-label="Semester Saat Ini" required >
                <option value="" selected disabled>Pilih semester anda saat ini </option>
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
            <input type="number" class="form-control" name="ipk" id="ipk" step="0.01" max="4.00" min="0.01" placeholder="0.00" onKeyPress="if(this.value.length==4) return false;" required/>
            <label class="form-label">IPK<span style="color:red">*</span></label>
            <p class="lead mt-1" style="font-size: 14px;">Contoh IPK: 4.00</p>
        </div>
        <div class="mb-4" id="val_ipk" style="display: none;">
            <p class="form-label fw-bold mb-3 text-center" style="color: red;">
                Mohon Maaf, Nilai IPK anda tidak memenuhi syarat atau Nilai IPK yang anda input tidak valid!!!
            </p>
        </div>
        <div class="form-floating mb-4" id='input_beasiswa' style="display: none;">
            <select class="form-select" name="beasiswa" id="beasiswa" aria-label="Pilihan Beasiswa" required >
                <option value="" selected disabled>Pilih beasiswa</option>
                <option value="Beasiswa LPDP"> Beasiswa LPDP</option>
                <option value="Beasiswa Kemendikbud">Beasiswa Kemendikbud</option>
                <option value="Beasiswa Bank Indonesia - Riau">Beasiswa Beasiswa Bank Indonesia - Riau</option>
                <option value="Beasiswa KIP-Kuliah">Beasiswa KIP-Kuliah</option>
            </select>
            <label class="form-label">Pilihan Beasiswa<span style="color:red">*</span></label>
        </div>
        <div class="mb-4" id='input_berkas' style="display: none;">
            <label class="form-label">Upload Berkas Syarat</label>
            <input class="form-control" type="file" accept="application/pdf, image/jpeg, application/zip" name="berkas" id="berkas" />
        </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-2 pt-1">
            <button type="submit" name="daftar" class="btn btn-primary fs-5 px-5 fw-bold my-2 my-sm-0 me-sm-3" tabindex="-1">Daftar</button>
            <a href="index.php" class="btn btn-danger fs-5 px-5 fw-bold" tabindex="-1">Batal</a>
        </div>
    </form>
</div>