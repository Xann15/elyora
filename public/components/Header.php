<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Social media application where you can connect with friends, share updates, and enjoy interactive features.">
    <meta name="keywords" content="social media, connect, share, friends, updates, interactive">
    <meta name="author" content="<?= $_ENV['APP_NAME']; ?>">

    <!-- Open Graph Meta Tags for Social Media Integration -->
    <meta property="og:title" content="<?= $_ENV['APP_NAME']; ?>">
    <meta property="og:description" content="Connect with friends, share updates, and enjoy interactive features.">
    <meta property="og:image" content="<?= $_ENV['BASE_URL'] ?>/assets/logo.png">
    <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $_ENV['APP_NAME'] ?>">
    <meta name="twitter:description" content="Connect with friends, share updates, and enjoy interactive features.">
    <meta name="twitter:image" content="<?= $_ENV['BASE_URL'] ?>/assets/logo.png">
    <meta name="twitter:site" content="@YourTwitterHandle">

    <!-- Favicon -->
    <link rel="icon" href="<?= $_ENV['BASE_URL'] ?>/assets/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= $_ENV['BASE_URL'] ?>/assets/logo.png" type="image/x-icon">

    <!-- Title -->
    <title><?= $_ENV['APP_NAME']; ?></title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] ?>/assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] ?>/assets/css/responsive.css"> -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Additional JavaScript Files -->
    <!-- <script src="<?= $_ENV['BASE_URL'] ?>/assets/js/main.js" defer></script> -->

    <!-- Additional Meta Tags for SEO -->
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>">

    <!-- Apple Touch Icons -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="<?= $_ENV['BASE_URL'] ?>/assets/apple-touch-icon.png"> -->
    <!-- <link rel="manifest" href="<?= $_ENV['BASE_URL'] ?>/assets/site.webmanifest"> -->

    <!-- Google Analytics (Example Script) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_TRACKING_ID');
    </script>

    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>