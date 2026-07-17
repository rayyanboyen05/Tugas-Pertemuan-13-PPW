<?php
include "header.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$email = $_POST['email'];

?>

<div class="container">
    <h2>Data Mahasiswa</h2>

    <table>
        <tr>
            <td>Nama</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?= $nim ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><?= $prodi ?></td>
        </tr>
        <tr>
            <td>Semester</td>
            <td><?= $semester ?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?= $email ?></td>
        </tr>
    </table>

    <div class="pesan">
        <?php
        if ($semester <=4) {
            echo "Kamu berada di semester awal";
        } else {
            echo "Kamu berada di semester akhir";
        }
        ?>
    </div>
    <br>

    <a href="form.php">
        <button>Kembali</button>
    </a>

</div>

<?php
include "footer.php";
?>