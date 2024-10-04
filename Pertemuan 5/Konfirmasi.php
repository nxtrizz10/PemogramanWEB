<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Tampilan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>My Web</title>
</head>
<body>
    <header>
        <div class="container p-5 my-5 bg-secondary text-white">
            <h1 align="center">Welcome</h1>
        </div>
        <nav>
            <ul>
                <li><a class="btn btn-success" href="Dashboard.php">Dashboard</a></li>
                <li><a class="btn btn-primary" href="Kontak.php">Kontak</a></li>
                <li><a class="btn btn-warning" href="About.php">About</a></li>
            </ul>
            <hr />
        </nav>
    </header>

    <h2>Konfirmasi Data</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $hobbies = $_POST['hobby'];
        $lahir = $_POST['lahir'];

        // Mengonversi tanggal lahir menjadi format bulan string
        $lahirDate = strtotime($lahir); // Ubah string menjadi timestamp
        $formattedDate = date('d F Y', $lahirDate); // Format jadi 'dd NamaBulan YYYY'

        // Mengambil tahun lahir dan menghitung umur
        $birthYear = date('Y', $lahirDate);
        $currentYear = date('Y'); // Mendapatkan tahun saat ini
        $age = $currentYear - $birthYear;

        echo "<p>Nama: " . htmlspecialchars($name) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p>Hobi: " . implode(", ", $hobbies) . "</p>";
        echo "<p>Tanggal Lahir: " . htmlspecialchars($formattedDate) . "</p>";
        echo "<p>Berarti umur anda sudah " . htmlspecialchars($age) . " tahun</p>";
    } else {
        echo "<p>Data tidak ditemukan.</p>";
    }
    ?>
</body>
</html>
