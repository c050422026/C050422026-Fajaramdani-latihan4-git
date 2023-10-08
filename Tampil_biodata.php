<!DOCTYPE html>
<html>
<head>
    <title>Tampil Biodata Mahasiswa</title>
</head>
<body>
    <h1>Form Biodata Mahasiswa</h1>
    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required>Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan<br><br>

        <label for="hobi">Hobi:</label>
        <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga
        <input type="checkbox" name="hobi[]" value="Musik">Musik
        <input type="checkbox" name="hobi[]" value="Membaca">Membaca<br><br>

        <label for="jurusan">Jurusan:</label>
        <select name="jurusan" required>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Akuntansi">Akuntansi</option>
        </select><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea name="alamat" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $hobi = isset($_POST["hobi"]) ? implode(", ", $_POST["hobi"]) : "";
        $jurusan = $_POST["jurusan"];
        $alamat = $_POST["alamat"];

        echo "<h2>Data Biodata Mahasiswa:</h2>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
        echo "<p>Hobi: $hobi</p>";
        echo "<p>Jurusan: $jurusan</p>";
        echo "<p>Alamat: $alamat</p>";
    }
    ?>
</body>
</html>