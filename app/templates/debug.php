<?php
/**
* Gravity Department - Design Docs
* https://github.com/gravitydepartment/design-docs
*
* @author    Brendan Falkowski
* @copyright Gravity Department. All rights reserved.
*/


// ==============================================
// Template: Debug
// ==============================================
?>

<div class="<?php echo $config['containerClass']; ?>">
    <h1 class="dd-page-title">Debug</h1>


    <!-- SECTION ******************************************** -->


    <h2>Glob (Old Style)</h2>

    <?php
    $dir = 'content/*';
    $glob = glob($dir, GLOB_ONLYDIR);
    ?>

    <pre><?php print_r($glob); ?></pre>

    <?php
    $globfiles = array();

    foreach ($glob as $path) {
        $globFiles[] = glob($path . '/*');
    }
    ?>

    <pre><?php print_r($globFiles); ?></pre>


    <!-- SECTION ******************************************** -->


    <h2>Iterator (New Style)</h2>

    <?php
    $directory = new RecursiveDirectoryIterator('content', RecursiveDirectoryIterator::SKIP_DOTS);
    $paths     = new RecursiveIteratorIterator($directory, RecursiveIteratorIterator::SELF_FIRST);
    ?>

    <pre><?php
        $set = array();

        foreach ($paths as $path) {
            echo $path, PHP_EOL;
            $set[] = $path;
        }

        //var_dump($set);
        //print_r($set);

        echo PHP_EOL . 'xxxxxxxxxxxxx' . PHP_EOL . PHP_EOL;

        // Get dirs
        foreach ($paths as $path){
            if ($path->isDir()) {
                echo $path, PHP_EOL;
            }
        }

        echo PHP_EOL . 'xxxxxxxxxxxxx' . PHP_EOL . PHP_EOL;

        // Get files
        foreach ($paths as $path){
            if ($path->isFile()) {
                echo $path, PHP_EOL;

                if (substr($path, -5) == '.html') {
                    $files[] = $path;
                }
            }
        }
    ?></pre>



    <!-- SECTION ******************************************** -->


    <h2>Patchwork</h2>

    <?php
    // $files = array();
    // $handle = opendir('content');
    //
    // while (false !== ($file = readdir($handle))) {
    //     if (substr($file, -5) == '.html') {
    //         $files[] = $file;
    //     }
    // }
    //
    // sort($files);
    ?>

    <pre><?php //print_r($files); ?></pre>

    <?php foreach ($files as $file): ?>
        <div class="dd-pattern">
            <div class="dd-heading">
                <a class="dd-pattern_action" href="<?php echo $file; ?>">View</a>
                <?php echo $file; ?>
            </div>

            <?php //include($file); ?>
        </div>
    <?php endforeach; ?>
</div>
