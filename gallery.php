<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Beyond Luxe Candle</title>
    <meta name="description" content="Explore our collection of 17 exquisite candle colors with French-inspired names for your luxury events.">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/logo.jpg" alt="Beyond Luxe Candle Logo">
                    </a>
                </div>
                <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">☰</button>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php" class="active">Gallery</a></li>
                        <li><a href="inquire.php">Inquire Now</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section style="padding: 5rem 0; background-color: var(--soft-gray);">
        <div class="container">
            <h1 class="section-title">Our Color Collection</h1>
            <p style="text-align: center; max-width: 700px; margin: 0 auto 3rem; color: var(--text-light); font-size: 1.1rem;">
                Choose from our curated palette of 17 stunning colors, each with a French-inspired name that adds sophistication to your event.
            </p>
            
            <div class="gallery-grid">
                <?php
                $colors = [
                    ['name' => 'WHITE', 'french' => 'Blanche', 'image' => 'white.jpg'],
                    ['name' => 'Nude Sand', 'french' => 'Sable', 'image' => 'nude-sand.jpg'],
                    ['name' => 'Pink', 'french' => 'Rose Pêche', 'image' => 'pink.jpg'],
                    ['name' => 'Lilac', 'french' => 'Lilas', 'image' => 'lilac.jpg'],
                    ['name' => 'Lavender', 'french' => 'Mauve', 'image' => 'lavender.jpg'],
                    ['name' => 'Sky Blue', 'french' => 'Bleu Ciel', 'image' => 'sky-blue.jpg'],
                    ['name' => 'Green', 'french' => 'Vert', 'image' => 'green.jpg'],
                    ['name' => 'Barbie Pink', 'french' => 'Bon Bon', 'image' => 'barbie-pink.jpg'],
                    ['name' => 'Yellow', 'french' => 'Beurre', 'image' => 'yellow.jpg'],
                    ['name' => 'Black', 'french' => 'Noir', 'image' => 'black.jpg'],
                    ['name' => 'Red', 'french' => 'Vermeil', 'image' => 'red.jpg'],
                    ['name' => 'Mint', 'french' => 'Eau', 'image' => 'mint.jpg'],
                    ['name' => 'Dusty Rose', 'french' => 'Ash Rose', 'image' => 'dusty-rose.jpg'],
                    ['name' => 'Blush', 'french' => 'Rougir Rose', 'image' => 'blush.jpg'],
                    ['name' => 'Christmas Green', 'french' => 'Sapin', 'image' => 'christmas-green.jpg'],
                    ['name' => 'Baby Blue', 'french' => 'Layette', 'image' => 'baby-blue.jpg'],
                    ['name' => 'Orange', 'french' => 'Abricot', 'image' => 'orange.jpg']
                ];

                foreach ($colors as $color) {
                    echo '<div class="color-card">';
                    echo '<img src="assets/images/colors/' . $color['image'] . '" alt="' . $color['name'] . ' candle" class="color-image">';
                    echo '<div class="color-info">';
                    echo '<h3 class="color-name">' . $color['name'] . '</h3>';
                    echo '<p class="color-french">' . $color['french'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <section style="padding: 3rem 0; background-color: var(--primary-tan); text-align: center;">
        <div class="container">
            <h2 style="color: var(--white); font-size: 2rem; margin-bottom: 1.5rem;">Ready to Create Your Perfect Ambiance?</h2>
            <a href="inquire.php" class="cta-button" style="background-color: var(--white); color: var(--primary-tan);">Inquire Now</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 Beyond Luxe Candle. All rights reserved.</p>
            <p>Illuminate Your Moments with Timeless Elegance</p>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
