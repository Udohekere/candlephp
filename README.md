# Beyond Luxe Candle

A luxury candle rental website built with PHP, featuring elegant design and comprehensive package offerings.

## Features

- **Home Page**: Hero section with slideshow, slogan "Illuminate Your Moments with Timeless Elegance", and package pricing
- **Gallery**: Showcase of 17 exquisite candle colors with French-inspired names
- **Inquire Now**: Professional contact form for customer inquiries
- **Responsive Design**: Mobile-friendly layout with elegant color palette

## Packages

### Custom Floor Packages (5-6" wide, 14-36" tall)
- Under 50 candles: $23/candle
- 50 candles: $1,150
- 75 candles: $1,575
- 100 candles: $1,850
- 200 candles: $2,400
- 250 candles: $3,500
- 300 candles: $4,200

### Custom Semi Packages (3.5" wide, 6-12" tall)
- Under 20 candles: $17/candle
- 20 candles: $300
- 30 candles: $450
- 50 candles: $625
- 60 candles: $875
- 80 candles: $1,250
- 100 candles: $1,800

## Color Collection

17 beautiful colors available: White (Blanche), Nude Sand (Sable), Pink (Rose Pêche), Lilac (Lilas), Lavender (Mauve), Sky Blue (Bleu Ciel), Green (Vert), Barbie Pink (Bon Bon), Yellow (Beurre), Black (Noir), Red (Vermeil), Mint (Eau), Dusty Rose (Ash Rose), Blush (Rougir Rose), Christmas Green (Sapin), Baby Blue (Layette), Orange (Abricot)

## Running Locally

```bash
php -S localhost:5000
```

Then visit http://localhost:5000

## Deployment

### Vercel
1. Push to GitHub repository
2. Import project in Vercel
3. Deploy automatically

The site is optimized for Vercel deployment with proper PHP runtime configuration.

## Structure

```
/
├── index.php          # Home page
├── gallery.php        # Color gallery
├── inquire.php        # Contact form
├── assets/
│   ├── css/
│   │   └── style.css  # Main styles
│   ├── js/
│   │   └── script.js  # Slideshow and interactions
│   └── images/        # Logo, photos, and color images
├── vercel.json        # Vercel deployment config
└── README.md
```

## License

© 2023 Beyond Luxe Candle. All rights reserved.
