<?php
/**
* Gravity Department - Design Docs
* https://github.com/gravitydepartment/design-docs
*
* @author     Brendan Falkowski
* @copyright  Gravity Department. All rights reserved.
*/


// ==============================================
// Template: Patchwork
// ==============================================

$paths = getContentPaths();

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
    <h1>Patchwork</h1>
</div>

<?php foreach ($files as $file): ?>
    <?php
    $stream  = getFileStreamByString($file);
    $yaml    = getYaml($stream);
    $content = getContent($stream);
    ?>

    <div class="qq-pattern" data-show-code="hide">
        <div class="<?php echo $qq['containerClass']; ?>">
            <div class="qq-heading">
                <a class="qq-heading_action" href="<?php echo getUrl('patterns/' . $file); ?>">View</a>
                <?php echo $yaml['name']; ?>
            </div>
        </div>

        <?php if ($yaml['enabled']): ?>
            <?php echo getWrapperHtml($yaml['wrappers'], 'open'); ?>
            <?php echo $content; ?>
            <div class="qq-pattern_end">Pattern End</div>
            <?php echo getWrapperHtml($yaml['wrappers'], 'close'); ?>
        <?php else: ?>
            <div class="<?php echo $qq['containerClass']; ?>">
                <div class="qq-pattern-disabled">
                    This pattern is disabled in the design system.
                    Its assets are not included in the build system.
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endforeach; ?>
