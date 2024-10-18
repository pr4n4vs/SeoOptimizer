# SEO Optimizer for Laravel

**SEO Optimizer** is a Laravel package designed to enhance SEO by providing easy management of meta tags, sitemaps, and other SEO-related functionalities.

## Features

- Add default SEO meta tags.
- Customize meta tags (author, description, keywords, etc.).
- Simple integration into Blade templates.
- Extendable for more SEO tasks.

## Requirements

- **PHP**: ^8.1
- **Laravel**: ^9.x, ^10.x, ^11.x

## Installation

### 1. Install via Composer

To install the package in your Laravel project, run the following command in your terminal:

composer require pr4n4vs/seo-optimizer:dev-main

### 2. Publish the Config (Optional)
If you'd like to customize the default settings, publish the config file:

php artisan vendor:publish --tag=seo-optimizer-config

This will create a configuration file located at config/seo-optimizer.php, where you can define default meta tag values and other SEO settings.

### 3. Autoload the Package
In case the package doesn't autoload automatically, run:

composer dump-autoload

### Usage
After installing the package, you can start adding meta tags to your Blade views.

Add Meta Tags in Blade Templates
Use the MetaTagManager class to add meta tags in your Blade templates:


@php
    // Create MetaTagManager instance
    $metaTagManager = new \Pranav\SeoOptimizer\MetaTagManager();

    // Add default meta tags and custom ones
    $metaTagManager->addDefaultMeta()->addMeta('author', 'Your Name');

    // Render meta tags in HTML
    echo $metaTagManager->render();
@endphp
This will render basic meta tags like:


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Your Name">
Adding Custom Meta Tags
You can add more meta tags for descriptions, keywords, etc.:


@php
    $metaTagManager = new \Pranav\SeoOptimizer\MetaTagManager();
    $metaTagManager->addDefaultMeta()
                   ->addMeta('description', 'This is a custom description')
                   ->addMeta('keywords', 'Laravel, SEO, Optimization');
    echo $metaTagManager->render();
@endphp


Configuration
After publishing the configuration, you can edit it at config/seo-optimizer.php. This file allows you to set:

Default Site Name
Default Description
Default Keywords
And other settings for meta tags.
