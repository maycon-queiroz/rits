<?php

/**
 * Theme CPTS.
 */

namespace App;

/**
 * Register the theme Cpts.
 *
 * @return void
 */

collect(['landing'])
    ->each(function ($file) {
        $file = "app/types/{$file}.php";

        if (!locate_template($file, true, true)) {
            wp_die(
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });