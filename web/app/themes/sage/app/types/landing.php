<?php

use PostTypes\PostType;
use PostTypes\Taxonomy;

// Create a landing Post Type
$landing = new PostType('book');

$options = [
    'supports' => ['title', 'editor', 'page-attributes', 'thumbnail'],
    'capability_type' => 'post',
];

$landing->options($options);
// Add the Genre Taxonomy
$landing->taxonomy('campaign');

// Hide the date and author columns
$landing->columns()->hide(['author']);

// add a price and rating column
$landing->columns()->add([
    'rating' => __('Rating'),
    // 'price' => __('Price'),
]);

// Populate the custom column
$landing->columns()->populate('rating', function ($column, $post_id) {
    echo get_post_meta($post_id, 'rating') . '/10';
});

// Set sortable columns
$landing->columns()->sortable([
    'price' => ['price', true],
    'rating' => ['rating', true],
]);

// Set the landing menu icon
$landing->icon('dashicons-book-alt');

// Register the PostType to WordPress
$landing->register();

// Create the genre Taxonomy
$campaign = new Taxonomy('campaign');

// Register the taxonomy to WordPress
$campaign->register();