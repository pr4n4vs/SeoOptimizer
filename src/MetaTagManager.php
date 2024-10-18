<?php

namespace Pranav\SeoOptimizer;

class MetaTagManager {
    protected $metaTags = [];

    public function addDefaultMeta() {
        $this->metaTags[] = '<meta charset="UTF-8">';
        $this->metaTags[] = '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        return $this;  // Return $this to allow method chaining
    }

    public function addMeta($name, $content) {
        $this->metaTags[] = '<meta name="' . htmlspecialchars($name) . '" content="' . htmlspecialchars($content) . '">';
        return $this;  // Return $this to allow method chaining
    }

    public function render() {
        return implode("\n", $this->metaTags);
    }
}
