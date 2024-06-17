<?php

/**
 * 
 * This file contains all settings on theme to the admin panel 
 * for the CPT 'Products" of WooCommerce
 * 
 */

function freddoGutenbergWC($can_edit, $post_type)
{
    if ($post_type == 'product') {
        $can_edit = true;
    }
    return $can_edit;
}
