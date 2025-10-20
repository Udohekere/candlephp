<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquire Now - Beyond Luxe Candle</title>
    <meta name="description" content="Get in touch with Beyond Luxe Candle for your luxury event candle rental needs. We're here to help create your perfect atmosphere.">
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
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="inquire.php" class="active">Inquire Now</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section style="padding: 5rem 0; background-color: var(--soft-gray);">
        <div class="container">
            <h1 class="section-title">Let's Create Magic Together</h1>
            <p style="text-align: center; max-width: 700px; margin: 0 auto 3rem; color: var(--text-light); font-size: 1.1rem;">
                Fill out the form below and we'll get back to you within 24 hours to discuss your event and create a customized quote.
            </p>
            
            <form id="inquiry-form" class="inquiry-form">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="event-type">Event Type *</label>
                    <select id="event-type" name="event-type" required>
                        <option value="">Select an option</option>
                        <option value="wedding">Wedding</option>
                        <option value="corporate">Corporate Event</option>
                        <option value="birthday">Birthday Party</option>
                        <option value="anniversary">Anniversary</option>
                        <option value="baby-shower">Baby Shower</option>
                        <option value="bridal-shower">Bridal Shower</option>
                        <option value="gala">Gala</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="event-date">Event Date</label>
                    <input type="date" id="event-date" name="event-date">
                </div>

                <div class="form-group">
                    <label for="package">Package Interest</label>
                    <select id="package" name="package">
                        <option value="">Select a package</option>
                        <optgroup label="Custom Floor Packages">
                            <option value="floor-under-50">Under 50 Candles - $23/candle</option>
                            <option value="floor-50">50 Candles - $1,150</option>
                            <option value="floor-75">75 Candles - $1,575</option>
                            <option value="floor-100">100 Candles - $1,850</option>
                            <option value="floor-200">200 Candles - $2,400</option>
                            <option value="floor-250">250 Candles - $3,500</option>
                            <option value="floor-300">300 Candles - $4,200</option>
                        </optgroup>
                        <optgroup label="Custom Semi Packages">
                            <option value="semi-under-20">Under 20 Candles - $17/candle</option>
                            <option value="semi-20">20 Candles - $300</option>
                            <option value="semi-30">30 Candles - $450</option>
                            <option value="semi-50">50 Candles - $625</option>
                            <option value="semi-60">60 Candles - $875</option>
                            <option value="semi-80">80 Candles - $1,250</option>
                            <option value="semi-100">100 Candles - $1,800</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group">
                    <label for="color-preference">Color Preference</label>
                    <input type="text" id="color-preference" name="color-preference" placeholder="e.g., Blanche, Rose Pêche, Lilas">
                </div>

                <div class="form-group">
                    <label for="venue">Event Venue/Location</label>
                    <input type="text" id="venue" name="venue" placeholder="Venue name or city">
                </div>

                <div class="form-group">
                    <label for="message">Additional Details</label>
                    <textarea id="message" name="message" placeholder="Tell us more about your vision..."></textarea>
                </div>

                <button type="submit" class="submit-button">Submit Inquiry</button>
            </form>
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
