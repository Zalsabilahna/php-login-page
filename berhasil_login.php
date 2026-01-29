<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit(); // Terminate script execution after the redirect
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Dashboard Laundry</title>
</head>
<body>
    <div class="container-logout">
        <form action="logout.php" method="POST" class="login-email">
            <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
            <p>Selamat datang di <b>Laundry Clean & Fresh</b></p>
            <h2>IP Server: <?php echo $_SERVER['SERVER_ADDR']; ?></h2>

            <div class="input-group">
                <button type="submit" class="btn">Logout</button>
            </div>

            <p style="text-align:center; margin-top: 20px;">
                Silakan pilih menu layanan laundry Anda di panel berikut
            </p>
        </form>
    </div>
</body>
</html>
