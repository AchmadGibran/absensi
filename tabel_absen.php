<!DOCTYPE html>
<html>
<head>
  <title>Tabel Absen Rapat</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    .table-container {
      max-width: 100%;
      overflow-x: auto;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .button-container {
      margin-top: 20px;
      text-align: center;
    }

    .button {
      display: inline-block;
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 3px;
      text-decoration: none;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .button:hover {
      background-color: #45a049;
    }

    .delete-btn {
      background-color: #FF0000;
      color: white;
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      text-decoration: none;
    }

    .delete-btn:hover {
      background-color: #CC0000;
    }

    @media (max-width: 600px) {
      /* CSS untuk tampilan responsif pada perangkat dengan lebar maksimum 600px */
      .table-container {
        overflow-x: auto;
        margin-bottom: 10px;
      }

      table {
        min-width: 400px;
      }

      .button-container {
        margin-top: 10px;
      }

      .button {
        display: block;
        margin: 0 auto;
      }
    }
  </style>
  <script>
    function confirmDelete(id) {
      var result = confirm("Apakah Anda yakin ingin menghapus data ini?");
      if (result) {
        window.location.href = "hapus_absen.php?id=" + id;
      }
    }
  </script>
</head>
<body>
  <h1>Tabel Absen Rapat</h1>
  <div class="table-container">
    <table>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>OPD</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>

      <?php
      // Menghubungkan ke database
      $host = 'localhost';
      $user = 'root';
      $password = '';
      $database = 'absensi_rapat';
      $conn = mysqli_connect($host, $user, $password, $database);

      // Menghapus data absen
      if (isset($_GET['hapus_id'])) {
        $hapusId = $_GET['hapus_id'];

        $deleteQuery = "DELETE FROM absensi WHERE id = '$hapusId'";
        $deleteResult = mysqli_query($conn, $deleteQuery);

        if ($deleteResult) {
          echo "<script>alert('Data berhasil dihapus');</script>";
        } else {
          echo "<script>alert('Terjadi kesalahan saat menghapus data');</script>";
        }
      }

      // Mengambil data absen
      $query = "SELECT * FROM absensi";
      $result = mysqli_query($conn, $query);

      $nomor = 1; // Inisialisasi nomor
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$nomor."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['jabatan']."</td>";
        echo "<td>".$row['opd']."</td>";
        echo "<td>".$row['keterangan']."</td>";
        echo "<td><a class='delete-btn' href='tabel_absen.php?hapus_id=".$row['id']."'>Hapus</a></td>";
        echo "</tr>";

        $nomor++; // Meningkatkan nomor setiap kali loop
      }

      mysqli_close($conn);
      ?>
    </table>
  </div>

  <div class="button-container">
    <a href="index.php" class="button">Kembali</a>
  </div>
</body>
</html>
