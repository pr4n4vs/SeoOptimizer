# Laravel SEO Optimizer

A Laravel package for automatic SEO optimization, including meta tags, sitemap generation, and Google Analytics integration.

## Installation

1. Require the package via Composer:

```bash
composer require pranav/seo-optimizer


Publish the configuration file:

```bash
php artisan vendor:publish --tag=config --provider="Pranav\SeoOptimizer\SEOOptimizerServiceProvider"


Update .env with your Google Analytics tracking ID:

```bash
GOOGLE_ANALYTICS_TRACKING_ID=UA-XXXXX-Y
