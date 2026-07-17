<?php
include "header.php";
?>

<div class="container">
    <h2>Form Data Mahasiswa</h2>
    <form action="hasil.php" method="POST">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" placeholder="Masukkan NIM" required>
        </div>

        <div class="form-group">
            <label>Program Studi</label>
            <select name="prodi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
            </select>
        </div>

        <div class="form-group">
            <label>Semester</label>
            <select name="semester">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="contoh@kampus.ac.id" required>
        </div>

        <button type="submit" class="btn-submit">Simpan Data</button>

    </form>
</div>

<?php
include "footer.php";
?>