# Beyond Luxe Candle

## Overview

Beyond Luxe Candle is a luxury candle rental website that provides an elegant digital presence for a candle rental business. The application showcases a curated collection of 17 French-inspired candle colors and offers tiered rental packages for custom floor and semi candles. The website emphasizes sophistication through its design language and serves as both a portfolio and customer acquisition tool.

## User Preferences

Preferred communication style: Simple, everyday language.

## System Architecture

### Frontend Architecture

**Static Multi-Page Application with PHP Routing**
- The application uses a traditional server-side rendering approach with PHP
- Pages are served directly as PHP files through Vercel's PHP runtime
- No JavaScript framework is used; the frontend relies on vanilla JavaScript for interactivity
- Static assets (CSS, JS, images) are served directly without bundling

**Rationale**: This architecture minimizes complexity and hosting requirements while providing a fast, SEO-friendly website suitable for a small business portfolio site.

### Styling System

**CSS Custom Properties (Variables)**
- The design system is built on CSS custom properties defining a luxury color palette
- Colors include: primary-tan (#C9A882), secondary-beige (#E8DCC4), dark-brown (#6B5B4A), cream (#F5F0E8), white (#FFFFFF), soft-gray (#F8F6F3), accent-gold (#D4AF77), text-dark (#3E3630), and text-light (#8B7E6F)
- Typography uses Georgia and Times New Roman serif fonts to convey elegance
- Responsive design principles are applied without a framework

**Rationale**: Custom properties provide maintainability and consistency while keeping the codebase lightweight. The color palette is carefully chosen to reflect luxury and sophistication.

### Client-Side Interactivity

**Vanilla JavaScript Components**
- Image slideshow functionality with 4-second auto-rotation
- Mobile menu toggle for responsive navigation
- Form submission handling with client-side validation
- No external JavaScript libraries or frameworks

**Rationale**: For the limited interactivity needs of this site, vanilla JavaScript provides sufficient functionality without adding dependency overhead.

### Deployment Strategy

**Vercel Serverless Platform**
- The application is configured for deployment on Vercel using the vercel-php runtime (v0.6.0)
- Routing is handled through vercel.json configuration with three layers:
  1. Static assets are served directly (CSS, JS, images)
  2. PHP files are routed to the PHP runtime
  3. All other routes fall back to index.php
- Functions are serverless, eliminating the need for traditional server management

**Rationale**: Vercel provides zero-configuration deployment with automatic HTTPS, CDN distribution, and preview deployments, making it ideal for small business websites. The serverless approach eliminates infrastructure management.

## External Dependencies

### Runtime Environment
- **Vercel PHP Runtime (v0.6.0)**: Serverless PHP execution environment that allows PHP files to run as serverless functions on Vercel's edge network

### No Database
- The application does not currently use a database
- All content (packages, colors, pricing) is hardcoded in the frontend
- Contact form submissions are handled client-side with alerts (no backend storage)

### No Third-Party APIs
- No external API integrations are currently implemented
- Email functionality for the contact form would require future integration with an email service (e.g., SendGrid, Mailgun) or SMTP configuration

### Asset Hosting
- All static assets (images, CSS, JavaScript) are served from the same domain
- No CDN or external asset hosting is used beyond Vercel's built-in CDN

### Future Integration Considerations
- Email service integration will be needed to handle contact form submissions persistently
- A database (potentially Postgres with Drizzle ORM) could be added to store inquiries, manage inventory, or track rental bookings
- Payment processing integration (Stripe, PayPal) may be needed if online booking/payment is desired