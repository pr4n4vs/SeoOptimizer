<?php

use Pranav\SeoOptimizer\SitemapGenerator;

Route::get('/sitemap.xml', [SitemapGenerator::class, 'generate'])->name('seo.sitemap');