<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="education.css">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Education</title>
</head>
<body>
    <header>
        <a href="Dashboard.php" class="foto">EDUCATION</a>
        <nav>
          <a href="Dashboard.php">Home</a> 
          <a href="Contact.php">Contact Person</a>
          <a href="#">Education</a>
          <a href="Prestasi.php">Achievement</a>
          <a href="About.php">About</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Welcome to My Education Journey</h1>
            <?php
            // include koneksi ke database
            include 'koneksi.php';

            // mengambil data dari database text <h1>
            $sql = 'SELECT textdepan FROM text_tulisan WHERE id=5';
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
        </section>

        <section class="courses">
            <h2>Graduate from</h2>
            <div class="course-list">
                <div class="course">
                    <?php
                    // include koneksi ke database
                    include 'koneksi.php';

                    // mengambil data dari database text sdyadika
                    $sql = 'SELECT sdyadika FROM sd_yadika LIMIT 3';
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $text = $row['sdyadika']; 
                            echo $text;

                            
                        }
                    } else {
                        echo "Tulisan tidak ditemukan.";
                    }

                    // tutup koneksi
                    mysqli_close($conn);
                    ?>
                </div>
                <div class="course">
                    <?php
                    // include koneksi ke database
                    include 'koneksi.php';

                    // mengambil data dari database text smpyadika
                    $sql = 'SELECT smpyadika FROM smp_yadika LIMIT 3';
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $text = $row['smpyadika']; 
                            echo $text;

                            
                        }
                    } else {
                        echo "Tulisan tidak ditemukan.";
                    }

                    // tutup koneksi
                    mysqli_close($conn);
                    ?>
                </div>
                <div class="course">
                    <?php
                    // include koneksi ke database
                    include 'koneksi.php';

                    // mengambil data dari database text smkyadika
                    $sql = 'SELECT smkyadika FROM smkyadika LIMIT 3';
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $text = $row['smkyadika']; 
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

        <section class="testimonials">
            <h2>As I always say</h2>
            <p>"Your best teacher is your last mistake"</p>
        </section>
    </main>

    <footer>
        <p>© 2024 My Personal Website. All rights reserved.</p>
    </footer>
</body>
</html>
