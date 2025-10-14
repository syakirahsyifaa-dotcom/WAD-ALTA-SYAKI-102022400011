<?php
// **********************  1  **************************
// Inisialisasi variabel
$nama = $email = $nomor_hp = $pilih_film = $jumlah_tiket = "";
$namaErr = $emailErr = $nomor_hpErr = $pilih_filmErr = $jumlah_tiketErr = "";



// **********************  2  **************************
// Jika form disubmit
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // **********************  3  **************************
    // Ambil nilai nama dari form
    // silakan taruh kode kalian di bawah
    //buatkan validasi yang sesuai
    $nama = trim($_POST["nama"]);
    if (empty($nama)){
      $namaErr = "nama wajib di isi";
    }


    // **********************  4  **************************
    // Ambil nilai Email dari form
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
    $email = trim($_POST["email"]);
    if (empty($email)){
      $emailErr = "email wajib di isi";
    } elseif (!filter_var($email,
    FILTER_VALIDATE_EMAIL)) { $emailErr = "Format email tidak valid"; }



    // **********************  5  **************************
    // Ambil nilai Nomor HP dari form
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
    $nomor_hp = trim($_POST["nomor"]);
    if (empty($nomor)){
      $nomorErr = "Nomor telepon wajib diisi";
   


    // **********************  6  **************************
    // Ambil nilai Film (dropdown)
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
    $jenis = $_POST["jenis"] ?? "";
    if (empty($jenis)) { $jenisErr = "Pilih Film"; }
    


    // **********************  7  **************************
    // Ambil nilai Jumlah Tiket dari form
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
    $jumlah_tiket = trim($_POST["jumlah_tiket"]);
    if (empty($jumlah_tiket)){
      $jumlah_tiketErr = "jumlah tiket wajib di isi";
    } elseif (!filter_var($jumlah_tiket,
    FILTER_VALIDATE_EMAIL)) { $jumlah_tiketErr = "jumlah tiket harus angka"; }


  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pemesanan Tiket Bioskop</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
  <!-- **********************  8  **************************
       Tambahkan nilai atribut di dalam src dengan nama file gambar logo bioskop

  -->
  <img src="EAD.png" alt="Logo Bioskop EAD" class="logo">

  <h2>Form Pemesanan Tiket Bioskop</h2>
  <form method="post" action="">
    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>">
    <span class="error"><?php echo $namaErr ? "* $namaErr" : "" ; ?></span>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr ? "* $emailErr" : "" ; ?></span>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Nomor HP:</label>
    <input type="text" name="nomor_hp" value="<?php echo $nomor_hp; ?>">
    <span class="error"><?php echo $nomor_hpErr ? "* $nomor_hpErr" : "" ; ?></span>

    <label>Pilih Film:</label>
    <select name="film">
      <option value="">-- Pilih Film --</option>
      <option value="Interstellar">Interstellar</option>
      <option value="Inception">Inception</option>
      <option value="Oppenheimer">Oppenheimer</option>
      <option value="Avengers: Endgame">Avengers: Endgame</option>
    </select>
    <span class="error"><?php echo $filmErr; ?></span>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Jumlah_Tiket:</label>
    <input type="text" name="jumlah_tiket" value="<?php echo $jumlah_tiket; ?>">
    <span class="error"><?php echo $jumlah_tiketErr ? "* $jumlah_tiketErr" : "" ; ?></span>

    <button type="submit">Pesan Tiket</button>
  </form>
  
  <!-- **********************  9  ************************** -->
  <!-- Tampilkan hasil input dalam tabel jika semua valid -->
  <!-- silakan taruh kode kalian di bawah -->
  <?php
  
  ?>
</div>
</body>
</html>
