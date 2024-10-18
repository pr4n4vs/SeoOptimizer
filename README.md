# Laravel SEO Optimizer

A Laravel package for automatic SEO optimization, including meta tags, sitemap generation, and Google Analytics integration.

## Installation

1. Require the package via Composer:


composer require pr4n4vs/seo-optimizer


Publish the configuration file:


php artisan vendor:publish --tag=config --provider="Pranav\SeoOptimizer\SEOOptimizerServiceProvider"


Update .env with your Google Analytics tracking ID:


GOOGLE_ANALYTICS_TRACKING_ID=UA-XXXXX-Y
