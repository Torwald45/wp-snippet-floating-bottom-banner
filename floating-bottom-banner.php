<?php
/**
 * WP Snippet: Floating Bottom Banner
 * 
 * Adds a fixed position banner at the bottom of the page with customizable content.
 * Perfect for promotions, delivery info, announcements, or any important messages.
 * 
 * @author      Torwald45
 * @link        https://github.com/Torwald45/wp-snippet-floating-bottom-banner
 * @license     GPL-2.0-or-later
 * @version     1.0.0
 */

// Add floating banner to footer
add_action( 'wp_footer', 'torwald45_floban_render_banner' );
function torwald45_floban_render_banner() {
  ?>
  <style>
    /* Floating banner styles */
    .torwald45-floban-banner {
      position: fixed;           /* Key property - banner "floats" */
      bottom: 0;                 /* Stick to bottom of screen */
      left: 0;
      width: 100%;
      background-color: #2c3e50; /* Background color (dark) */
      color: #ffffff;            /* Text color (white) */
      padding: 10px 15px;
      text-align: center;
      font-size: 15px;
      font-weight: 500;
      z-index: 1000;             /* Ensure it's on top */
      box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
    }
  </style>
  
  <div class="torwald45-floban-banner">
    <!-- Customize your message here -->
    🚚 <strong>Free delivery!</strong> | Processing time: 10-14 business days.
  </div>
  <?php
}
