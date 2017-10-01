<?php
/**
* Quasar: Design System
*
* @author     Brendan Falkowski (http://gravitydept.com)
* @copyright  Gravity Department. All rights reserved.
*/


// ----------------------------------------------
// Error reporting
// Only enabled if domain contains ".dev"

if (strstr($_SERVER['HTTP_HOST'], '.dev')) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(-1);
}


// ----------------------------------------------
// App files

// Extend $defaults with $config as $qq
require('app/config-defaults.php');
require('config.php');
$qq = array_merge($defaults, $config);

require('app/functions.php');


// ----------------------------------------------
// Vendor modules

require('app/vendor/dipper/Dipper.php');
require('app/vendor/parsedown/Parsedown.php');


// ----------------------------------------------
// Determine module type

if (isset($_GET['p1'])) {
    $p1 = $_GET['p1'];

    if (validateModuleRequest($p1)) {
        switch ($p1) {
            case 'debug':
                $template = 'debug';
                break;
            // case 'page':
            //     $template = $_GET['p2'];
            //     break;
            case 'patchwork':
                $template = 'patchwork';
                break;
            case 'patterns':
                if (!isset($_GET['p2']) && !isset($_GET['p3'])) {
                    $template = 'pattern-list';
                } elseif (!isset($_GET['p2']) || !isset($_GET['p3'])) {
                    $template = 'not-found';
                } else {
                    $folder  = $_GET['p2'];
                    $pattern = $_GET['p3'];

                    // Check file request is validly formatted (not directory traversal)
                    if (validatePatternRequest($folder, $pattern) === false) {
                        $template = 'not-found';
                    } else {
                        // Check file exists
                        if (validateFileExists($folder, $pattern) === false) {
                            $template = 'not-found';
                        } else {
                            $template = 'pattern-view';
                        }
                    }
                }

                break;
            default:
                $template = 'not-found';
        }
    } else {
        $template = 'not-found';
    }
} else {
    $template = 'home';
}

// ----------------------------------------------
// Render page

include('app/partials/header.php');
include('app/templates/' . $template . '.php');
include('app/partials/footer.php');
