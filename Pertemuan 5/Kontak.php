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
                <li><a class="btn btn-primary" href="#">Kontak</a></li>
                <li><a class="btn btn-warning" href="About.php">About</a></li>
            </ul>
            <hr />
        </nav>
    </header>
    <h2><?php 
      echo "Contact"      
    ?></h2>
    <form class="contact-form" action="Konfirmasi.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div>
            <label for="hobby">Hobby:</label>
            <br>
            <input type="checkbox" name="hobby[]" value="Lari">
            <label for="lari">Lari</label><br>
            <input type="checkbox" name="hobby[]" value="Loncat">
            <label for="loncat">Loncat</label><br>
            <input type="checkbox" name="hobby[]" value="Renang">
            <label for="renang">Renang</label><br>
        </div>

        <div>
            <label for="lahir">Tgl/Lhr:</label>
            <input type="date" id="lahir" name="lahir">
            <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>