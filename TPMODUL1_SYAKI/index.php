<?php
// Inisialisasi variabel
$nama = $email = $nim = $jurusan = $alasan = "";
$namaErr = $emailErr = $nimErr = $jurusanErr = $alasanErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // **********************  1  **************************
    // Tangkap nilai nama dari form
    // silakan taruh kode kalian di bawah
    if (empty($_POST["nama"])) {
      $namaErr = "Nama wajib diisi";
    } else {
      $nama = htmlspecialchars($_POST["nama"]);
    }

    // **********************  2  **************************
    // Tangkap nilai email dari form
    // silakan taruh kode kalian di bawah
    if (empty($_POST["email"])) {
      $emailErr = "Email wajib diisi";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format email tidak valid";
    } else {
      $email = htmlspecialchars($_POST["email"]);
    }

    // **********************  3  **************************
    // Tangkap nilai NIM dari form
    // silakan taruh kode kalian di bawah
    if (empty($_POST["nim"])) {
      $nimErr = "Nim wajib diisi";
    } elseif (!ctype_digit($_POST["nim"])) {
      $nimErr = "Nim hanya boleh angka";
    } else {
      $nim = htmlspecialchars($_POST["nim"]);
    }
      
    // **********************  4  **************************
    // Tangkap nilai jurusan (dropdown)
    // silakan taruh kode kalian di bawah
    if (empty($_POST["jurusan"])) {
      $jurusanErr = "Pilih Jurusan";
    } else {
      $jurusan = htmlspecialchars($_POST["jurusan"]);
    }

    // **********************  5  **************************
    // Tangkap nilai alasan (textarea)
    // silakan taruh kode kalian di bawah
    if (empty($_POST["alasan"])) {
      $alasanErr = "Alasan wajib diisi";
    } else {
      $alasan = htmlspecialchars($_POST["alasan"]);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pendaftaran Keanggotaan Lab - EAD Laboratory</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
  <img src="EAD.png" alt="Logo EAD" class="logo">
  <h2>Form Pendaftaran Keanggotaan Lab - EAD Laboratory</h2>
  <form method="post" action="">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>">
    <span class="error"><?php echo $namaErr; ?></span>

    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>

    <label>NIM:</label>
    <input type="text" name="nim" value="<?php echo $nim; ?>">
    <span class="error"><?php echo $nimErr; ?></span>

    <label>Jurusan:</label>
    <select name="jurusan">
      <option value="">-- Pilih Jurusan --</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Informatika">Informatika</option>
      <option value="Teknik Industri">Teknik Industri</option>
    </select>
    <span class="error"><?php echo $jurusanErr; ?></span>

    <label>Alasan Bergabung:</label>
    <textarea name="alasan"><?php echo $alasan; ?></textarea>
    <span class="error"><?php echo $alasanErr; ?></span>

    <button type="submit">Daftar</button>
  </form>

  <?php
  // **********************  6  **************************
  // Tampilkan hasil input dalam tabel + logo di atasnya jika semua valid
  // silakan taruh kode kalian di bawah
  if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    empty($namaErr) && empty($emailErr) && empty($nimErr) && empty($jurusanErr) && empty($alasanErr)) {
    
    echo "
    <div class='hasil-container' style='
        background-color: #e9f9ee;
        border: 1px solid #4CAF50;
        border-radius: 8px;
        padding: 20px;
        margin-top: 20px;
    '>
        <div style='text-align:center;'>
            <img src='EAD.png' alt='Logo EAD' style='width:120px; margin-bottom:5px;'>
        </div>
        <h3 style='color:#000;'>Data Pendaftaran Berhasil</h3>
        <table style=\" text-align:left; line-height:1.8; font-size:16px;\">
            <tr> <td><b> Nama </b></td> <td>:</td> <td>$nama</td> </tr>
            <tr> <td> <b>Email</b></td><td>:</td><td>$email</td></tr>
            <tr><td><b>NIM</b></td><td>:</td><td>$nim</td></tr>
            <tr><td><b>Jurusan</b></td><td>:</td><td>$jurusan</td></tr>
            <tr><td><b>Alasan Bergabung</b></td><td>:</td><td>$alasan</td></tr>
        </table>
    </div>
    ";
}
  ?>
</div>
</body>
</html>