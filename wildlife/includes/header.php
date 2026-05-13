<?php
// Global header + navigation + opening tags
// This file is intended to be included from /pages/*.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pageTitle ?? 'Masai Mara'; ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="header-container">
                <div class="logo">
                    <a href="index.php">Masai Mara</a>
                </div>
                <nav class="main-nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="wildlife.php">Wildlife</a></li>
                        <li><a href="packages.php">Packages</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="info.php">Travel Info</a></li>
                        <li><a href="lorem.php">Read </a></li>
                    </ul>
                </nav>
                <div class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

