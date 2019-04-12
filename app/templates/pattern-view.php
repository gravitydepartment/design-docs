<?php
/**
* Gravity Department - Design Docs
* https://github.com/gravitydepartment/design-docs
*
* @author    Brendan Falkowski
* @copyright Gravity Department. All rights reserved.
*/


// ==============================================
// Template: Pattern
// ==============================================

$stream  = getFileStreamByComponent($folder, $pattern);
$yaml    = getYaml($stream);
$content = getContent($stream);
?>

<div class="dd-subheader">
    <h1><?php echo $yaml['name']; ?></h1>
</div>

<?php if ($yaml['enabled']): ?>
    <div class="dd-pattern">
        <?php echo getWrapperHtml($yaml['wrappers'], 'open'); ?>
        <?php echo $content; ?>
        <div class="dd-pattern_end">Pattern End</div>
        <?php echo getWrapperHtml($yaml['wrappers'], 'close'); ?>
    </div>

    <div class="dd-pattern-docs">
        <div class="dd-pattern-docs_column">
            <h2 class="dd-heading">Documentation</h2>

            <?php if (array_key_exists('description', $yaml)): ?>
                <?php if ($yaml['description'] != ''): ?>
                    <article class="dd-pattern-description dd-text">
                        <?php echo convertToMarkdown($yaml['description']); ?>
                    </article>
                <?php endif; ?>
            <?php else: ?>
                <p>No docs yet.</p>
            <?php endif; ?>
        </div>

        <div class="dd-pattern-docs_column">
            <h2 class="dd-heading">
                <button type="button" class="dd-heading_action copy-to-clipboard" data-clipboard-action="copy" data-clipboard-target="#dd-pattern-code">Copy</button>
                HTML
            </h2>

            <div class="dd-pattern-code dd-text">
                <?php $code = trim(htmlspecialchars($content)); ?>
                <pre class="language-markup"><code id="dd-pattern-code"><?php echo $code; ?></code></pre>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="<?php echo $config['containerClass']; ?>">
        <div class="dd-pattern-disabled">
            This pattern is disabled in the design system.
            Its assets are not included in the build system.
        </div>
    </div>
<?php endif; ?>
