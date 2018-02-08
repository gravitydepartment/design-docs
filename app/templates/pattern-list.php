<?php
/**
* Gravity Department - Design Docs
* https://github.com/gravitydepartment/design-docs
*
* @author     Brendan Falkowski
* @copyright  Gravity Department. All rights reserved.
*/


// ==============================================
// Template: List
// ==============================================

$paths = getContentPaths();
$files = array();
$lastFileFolder = '';
$i = 0;

// Get content PHP files only
foreach ($paths as $path) {
    if (isMarkdownFile($path)) {
        $files[] = getSlugFromPath($path);
    }
}

// Alphabetize naturally.
sort($files, SORT_STRING | SORT_NATURAL | SORT_FLAG_CASE);
?>

<div class="qq-subheader">
    <h1>Patterns</h1>
</div>

<div class="qq-container">
    <div class="qq-pattern-groups">
        <?php foreach ($files as $file): ?>
            <?php
            $stream  = getFileStreamByString($file);
            $yaml    = getYaml($stream);
            //$content = getContent($stream);

            $isEnabled = ($yaml['enabled']) ? '1' : '0';

            $length = strpos($file, '/');
            $currentFileFolder = substr($file, 0, $length);
            $i++;
            ?>

            <?php if ($currentFileFolder !== $lastFileFolder): ?>
                <?php if ($lastFileFolder !== ''): ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php $lastFileFolder = $currentFileFolder; ?>

                <div class="qq-pattern-groups_group">
                    <h2><?php echo $currentFileFolder; ?></h2>

                    <div class="qq-pattern-group">
            <?php endif; ?>

            <div class="qq-pattern-group_item" data-pattern-enabled="<?php echo $isEnabled; ?>">
                <a class="qq-pattern-group_link" href="<?php echo getUrl('patterns/' . $file); ?>">
                    <?php echo $yaml['name']; ?>
                </a>
            </div>

            <?php if (count($files) === $i): ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
