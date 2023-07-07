<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts: PT Sans, Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="./assets/css/navbar.css">

    <title>OurSpace - Halaman Ruangan</title>
</head>
<body class="navbar-text-dark">

    <!-- Navbar -->
    <?php
        include('./navbar.php')
    ?>

    <section id="auth-section" class="content">
        <form action="" class="auth-form">
            <div class="auth-image">
                <img src="./assets/img/image-4.png" alt="">
            </div>
            <div class="auth-content-group">
                <h1 class="auth-title text-primary">Login</h1>
                <h5 class="auth-subtitle">Belum punya akun? <a href="" class="text-primary">Daftar Disini!</a></h5>
                <div class="auth-form-input">
                    <div class="input-group">
                        <input type="email" class="form-input" name="email" placeholder="Alamat Email" required>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-input" name="email" placeholder="Kata Sandi" required>
                    </div>
                    <div class="input-group-two-section">
                        <div class="input-check-group">
                            <input type="checkbox" name="remember_password" id="remember-me-input">
                            <label for="remember-me-input">Remember Me</label>
                        </div>
                        <a href="" class="text-primary">Lupa Kata Sandi?</a>
                    </div>
                </div>

                <button type="submit" class="auth-button">Login</button>
            </div>
        </form>
    </section>

    <!-- Footer -->
    <?php
        include('./footer.php')
    ?>

    <script src="./assets/js/main.js"></script>
</body>
</html>