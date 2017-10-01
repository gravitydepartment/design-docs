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
    // string - Name of the company (for copyright in the footer).
    'companyName' => 'XYZ Corporation',

    // string - CSS class name for width limiting container
    'containerClass' => 'container',

    // string - <link> tags for CSS the patterns require.
    'css' => '',

    // boolean - Show debug helpers for app
    'debug' => false,

    // string - Name of the design system
    'designSystemName' => 'Quasar Design Docs',

    // Is site running from base or sub-directory (requires changing ".htaccess" file). Must include trailing slash.
    'designSystemUrl'  => '/design/',

    // string - <script> required before </body>.
    'jsBodyEnd' => '',

    // string - <script> tags required in the <head>.
    'jsHead' => '',

    // string - URL for the site the design system powers.
    'siteUrl' => 'http://google.com',
);
