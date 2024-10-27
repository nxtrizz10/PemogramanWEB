<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prestasi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>MySite</title>
</head>
<body>
    <header>
        <a href="Dashboard.php" class="foto">ACHIEVEMENT</a>
        <nav>
          <a href="Dashboard.php">Home</a> 
          <a href="Contact.php">Contact Person</a>
          <a href="Education.php">Education</a>
          <a href="#">Achievement</a>
          <a href="About.php">About</a>
        </nav>
    </header>
    <main>
        <section class="achievements-section">
            <h1>My Achievements</h1>

            <div class="achievement-card">
                <img src="Second.jpg" alt="Futsal Tournament">
                <div class="achievement-content">
                    <?php
                        // include koneksi ke database
                        include 'koneksi.php';

                        // mengambil data dari database text <h1>
                        $sql = 'SELECT textdepan FROM text_tulisan WHERE id=6';
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $text = $row['textdepan']; 
                                echo $text;

                                
                            }
                        } else {
                            echo "Tulisan tidak ditemukan.";
                        }

                        // tutup koneksi
                        mysqli_close($conn);
                    ?>
                </div>
            </div>

            <div class="achievement-card">
                <img src="ML.jpeg" alt="Mobile Legends Tournament">
                <div class="achievement-content">
                    <?php
                        // include koneksi ke database
                        include 'koneksi.php';

                        // mengambil data dari database text <h1>
                        $sql = 'SELECT textdepan FROM text_tulisan WHERE id=7';
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $text = $row['textdepan']; 
                                echo $text;

                                
                            }
                        } else {
                            echo "Tulisan tidak ditemukan.";
                        }

                        // tutup koneksi
                        mysqli_close($conn);
                    ?>
                </div>
            </div>

            <div class="achievement-card">
                <img src="Sertifikat.jpg" alt="Badminton Competition">
                <div class="achievement-content">
                    <?php
                        // include koneksi ke database
                        include 'koneksi.php';

                        // mengambil data dari database text <h1>
                        $sql = 'SELECT textdepan FROM text_tulisan WHERE id=8';
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $text = $row['textdepan']; 
                                echo $text;

                                
                            }
                        } else {
                            echo "Tulisan tidak ditemukan.";
                        }

                        // tutup koneksi
                        mysqli_close($conn);
                    ?>
                </div>
            </div>
        </section>
        <footer style="text-align: center;">
        <p>© 2024 My Personal Website. All rights reserved.</p>
        </footer>
    </main>
</body>
</html>
