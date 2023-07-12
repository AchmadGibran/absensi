<?php
// Mengambil data dari formulir
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$opd = $_POST['opd'];
$keterangan = $_POST['keterangan'];

// Menghubungkan ke database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'absensi_rapat';
$conn = mysqli_connect($host, $user, $password, $database);

// Memasukkan data absen ke database
$query = "INSERT INTO absensi (nama, jabatan, opd, keterangan) VALUES ('$nama', '$jabatan', '$opd', '$keterangan')";
$result = mysqli_query($conn, $query);

if ($result) {
    mysqli_close($conn);
    header("Location: index.php?success=1"); // Mengarahkan kembali ke halaman input dengan parameter success
    exit();
} else {
  echo "Terjadi kesalahan saat menyimpan absen.";
}

mysqli_close($conn);
?>
