<?php

use Illuminate\Support\Str;

if (! function_exists('generateProductImageName')) {
    /**
     * Generate product image name
     *
     * @param string $extension
     * @param string $type
     * @return string
     */
    function generateProductImageName($extension, $type = 'thumbnail') {
        $randomString = md5(time() . Str::random(10));
        switch (strtolower($type)) {
            case 'image':
                return 'image_' . $randomString . '.' . $extension;
            default:
                return 'thumbnail_' . $randomString . '.' . $extension;
        }
    }
}

if (! function_exists('generateProductImagePath')) {
    /**
     * Generate product image name
     *
     * @param string $sku
     * @param string $type
     * @return string
     */
    function generateProductImagePath($type = 'thumbnail') {
        switch (strtolower($type)) {
            case 'image':
                return 'images/product/image';
            default:
                return 'images/product/thumbnail';
        }
    }
}