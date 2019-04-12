<?php
/**
* Gravity Department - Design Docs
* https://github.com/gravitydepartment/design-docs
*
* @author    Brendan Falkowski
* @copyright Gravity Department. All rights reserved.
*/


// ==============================================
// Dependencies
// ==============================================

// YAML parser
use secondparty\Dipper\Dipper as Dipper;


// ==============================================
// Functions
// ==============================================

/**
* @param string $content
* @return string
*/
function convertToEscapedHtml ($content) {
    return trim(htmlspecialchars($content));
}

/**
* @param string $markdown
* @return string
*/
function convertToMarkdown ($markdown) {
    $parsedown = new Parsedown();
    return $parsedown->text($markdown);
}

/**
* @param string $slug
* @return string
*/
function getAssetUrl ($slug) {
    global $config;

    return $config['docsUrl'] . 'assets/' . $slug;
}

/**
* @param string $stream
* @return string
*/
function getContent ($stream) {
    $yamlEndPosition = getYamlEndPosition($stream);
    return substr($stream, $yamlEndPosition + 4);
}

/**
* @return array $paths
*/
function getContentPaths () {
    $directory = new RecursiveDirectoryIterator('content', RecursiveDirectoryIterator::SKIP_DOTS);
    $paths     = new RecursiveIteratorIterator($directory, RecursiveIteratorIterator::SELF_FIRST);
    return $paths;
}

/**
* @param string $folder
* @param string $file
* @return string
*/
function getFilePath ($folder, $file) {
    return 'content/' . $folder . '/' . $file . '.md';
}

/**
* @param string $folder
* @param string $file
* @return string
*/
function getFileStreamByComponent ($folder, $file) {
    if (validatePatternRequest($folder, $file) === false) {
        exit('Access denied');
    }

    $filePath = getFilePath($folder, $file);

    return file_get_contents($filePath);
}

/**
* @param string $file
* @return string
*/
function getFileStreamByString ($file) {
    if (validateFileRequest($file) === false) {
        exit('Access denied');
    }

    return file_get_contents('content/' . $file . '.md');
}

/**
* @param string $path
* @return string
*/
function getSlugFromPath ($path) {
    $start = strpos($path, '/');
    $end   = strpos($path, '.');
    return substr($path, $start + 1, $end - $start - 1);
}

/**
* @param string $slug
* @return string
*/
function getUrl ($slug) {
    global $config;

    if ($slug === '') {
        return $config['docsUrl'];
    } else {
        return $config['docsUrl'] . $slug . '/';
    }
}

/**
* @param string $wrappers, Example: "container, panel, panel-liner"
* @param string $position, Values:  "open|close"
* @return string
*/
function getWrapperHtml ($wrappers, $position) {
    $classes = explode(',', $wrappers);
    $html = '';

    if ($position === 'open') {
        foreach ($classes as $class) {
            $html .= '<div class="' . $class . '">';
        }
    }

    if ($position === 'close') {
        foreach ($classes as $class) {
            $html .= '</div>';
        }
    }

    return $html;
}

/**
* @param string $stream
* @return string
*/
function getYaml ($stream) {
    $yamlEndPosition = getYamlEndPosition($stream);
    $yaml = substr($stream, 3, $yamlEndPosition - 3);
    return Dipper::parse($yaml);
}

/**
* @param string $stream
* @return int
*/
function getYamlEndPosition ($stream) {
    return strpos($stream, PHP_EOL . '---');
}

/**
* @param string $path
* @return boolean
*/
function isMarkdownFile ($path) {
    return ($path->isFile() && substr($path, -3) === '.md') ? true : false;
}

/**
* @param string $folder
* @param string $file
* @return boolean
*/
function validateFileExists ($folder, $file) {
    $filePath = getFilePath($folder, $file);

    return (file_exists($filePath)) ? true : false;
}

/**
* @param string $file
* @return boolean
*/
function validateFileRequest ($file) {
    // See: http://rubular.com/r/RcgJOaKnzL
    return (preg_match("/^[\w-]+(\/){1}[\w-]+$/", $file)) ? true : false;
}

/**
* @param string $folder
* @param string $pattern
* @return boolean
*/
function validatePatternRequest ($folder, $pattern) {
    $candidate = $folder . '/' . $pattern;

    // See: http://rubular.com/r/RcgJOaKnzL
    return (preg_match("/^[\w-]+(\/){1}[\w-]+$/", $candidate)) ? true : false;
}

/**
* @param string $module
* @return boolean
*/
function validateModuleRequest ($module) {
    return (preg_match("/^[\w-]+$/", $module)) ? true : false;
}
