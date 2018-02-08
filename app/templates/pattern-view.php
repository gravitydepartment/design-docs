<?php
/**
* Quasar: Design System
*
* @author     Brendan Falkowski (http://gravitydept.com)
* @copyright  Gravity Department. All rights reserved.
*/


// ==============================================
// Template: Pattern
// ==============================================

$stream  = getFileStreamByComponent($folder, $pattern);
$yaml    = getYaml($stream);
$content = getContent($stream);
?>

<div class="qq-subheader">
    <h1><?php echo $yaml['name']; ?></h1>
</div>

<?php if ($yaml['enabled']): ?>
    <div class="qq-pattern">
        <?php echo getWrapperHtml($yaml['wrappers'], 'open'); ?>
        <?php echo $content; ?>
        <div class="qq-pattern_end">Pattern End</div>
        <?php echo getWrapperHtml($yaml['wrappers'], 'close'); ?>
    </div>

    <div class="qq-pattern-docs">
        <div class="qq-pattern-docs_column">
            <h2 class="qq-heading">Documentation</h2>

            <?php if (array_key_exists('description', $yaml)): ?>
                <?php if ($yaml['description'] != ''): ?>
                    <article class="qq-pattern-description qq-text">
                        <?php echo convertToMarkdown($yaml['description']); ?>
                    </article>
                <?php endif; ?>
            <?php else: ?>
                <p>No docs yet.</p>
            <?php endif; ?>
        </div>

        <div class="qq-pattern-docs_column">
            <h2 class="qq-heading">
                <button type="button" class="qq-heading_action copy-to-clipboard" data-clipboard-action="copy" data-clipboard-target="#qq-pattern-code">Copy</button>
                HTML
            </h2>

            <div class="qq-pattern-code qq-text">
                <?php $code = trim(htmlspecialchars($content)); ?>
                <pre class="language-markup"><code id="qq-pattern-code"><?php echo $code; ?></code></pre>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="<?php echo $qq['containerClass']; ?>">
        <div class="qq-pattern-disabled">
            This pattern is disabled in the design system.
            Its assets are not included in the build system.
        </div>
    </div>
<?php endif; ?>
