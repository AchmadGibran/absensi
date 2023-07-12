
<?php
session_start();
$_SESSION['admin_logged_in'] = true;
// Simpan username dan password yang valid
$validUsername = 'admin';
$validPassword = '12345';

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan proses autentikasi
if ($username === $validUsername && $password === $validPassword) {
  // Jika autentikasi berhasil, arahkan ke halaman tabel
  header("Location: tabel_absen.php");
  exit();
} else {
  // Jika autentikasi gagal, kembali ke halaman login dengan menampilkan pesan error
  header("Location: login.php?error=1");
  exit();
}
?>
