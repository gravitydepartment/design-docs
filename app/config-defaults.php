<?php
/**
* Quasar: Design System
*
* @author     Brendan Falkowski (http://gravitydept.com)
* @copyright  Gravity Department. All rights reserved.
*/


// ==============================================
// Config Defaults
//
// Overriden by config.
// See: /config.php
// ==============================================

$defaults = array(
    // {string} - Name of the company (for copyright in the footer).
    'companyName' => 'Company Name',

    // {string} - CSS class name for width limiting container.
    'containerClass' => 'container',

    // {array} - <link> tags for CSS the patterns require.
    'css' => array(),

    // {boolean} - Show debug helpers for app.
    'debug' => false,

    // {string} - Name of the design system.
    'docsName' => 'Design Docs',

    // If the site runs from a root or sub-directory, you must change the ".htaccess" file.
    // Must include a trailing slash.
    // Example: '/' or '/design/'
    'docsUrl'  => '/',

    // {string} - <script> required before </body>.
    'jsBodyEnd' => array(),

    // {string} - <script> tags required in the <head>.
    'jsHead' => array(),

    // {string} - URL for the site the design system powers.
    // Example: 'http://google.com'
    'siteUrl' => '#',
);
