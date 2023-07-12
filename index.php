<!DOCTYPE html>
<html>
<head>
    <title>Absen Rapat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        h2 {
            color: #333;
        }

        .button-container {
            margin-top:20px;
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

        .form-container {
            width: 95%;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        select {
            width: 95%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .hide {
            display: none;
        }

        .button-container1 {
            margin-top:20px;
        }

        .button1 {
            display: inline-block;
            background-color: #696969;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            text-decoration: none;
            font-size: 12px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button1:hover {
            background-color: #45a049;
        }

        

        @media (max-width: 600px) {
            /* CSS untuk tampilan responsif pada perangkat dengan lebar maksimum 600px */
            .container {
                padding: 10px;
            }

            .form-container {
                padding: 10px;
            }

            .admin-login {
                width: 100px;
                padding: 6px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Absen Rapat</h2>
        <div class="form-container">
            <!-- Form Absen -->
            <form method="POST" action="proses_absen.php">
                <label>Nama</label>
                <input type="text" name="nama" required><br><br>

                <label>Jabatan</label>
                <input type="text" name="jabatan" required><br><br>

                <label>OPD</label>
                <input type="text" name="opd" required><br><br>

                <label>Keterangan</label>
                <select name="keterangan">
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select><br><br>

                <input type="submit" value="Absen">
                
            </form>
             <?php
        if (isset($_GET['success'])) {
            echo '<p>Absen berhasil!</p>';
        }
        ?>
        </div>
        <div class="button-container1">
    <a href="login.php" class="button1">Admin Login</a>
</div>
        
        

    </div>
</body>
</html>
