<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>MySite</title>
</head>
<body>
    <header>
        <a href="Dashboard.php" class="foto">CONTACT</a>
        <nav>
          <a href="Dashboard.php">Home</a> 
          <a href="#">Contact Person</a>
          <a href="Education.php">Education</a>
          <a href="Prestasi.php">Achievement</a>
          <a href="About.php">About</a>
        </nav>
    </header>
    <section class="Contact">
        <div class="Contact-img">
            <img src="Ninja.JPG" alt="">
        </div>
        <div class="Contact-content">
            <?php
            // include koneksi ke database
            include 'koneksi.php';

            // mengambil data dari database text <h1>
            $sql = 'SELECT textdepan FROM text_tulisan WHERE id=3';
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

            <h3 class="typing-text">You Can <span></span></h3>
            
            <?php
            // include koneksi ke database
            include 'koneksi.php';

            // mengambil data dari database text <p> & <h3>
            $sql = 'SELECT textdepan FROM text_tulisan WHERE id=4';
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
    </section>
    <footer style="text-align: center;">
        <p>© 2024 My Personal Website. All rights reserved.</p>
    </footer>
</body>
</html>
