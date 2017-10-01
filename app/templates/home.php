<?php
/**
* Quasar: Design System
*
* @author     Brendan Falkowski (http://gravitydept.com)
* @copyright  Gravity Department. All rights reserved.
*/


// ==============================================
// Template: Home
// ==============================================

$paths = getContentPaths();
$files = array();
$lastFileFolder = '';
$i = 0;

// Get PHP files
foreach ($paths as $path) {
    if (isMarkdownFile($path)) {
        $files[] = getSlugFromPath($path);
    }
}
?>

<div class="<?php echo $qq['containerClass']; ?>">
    <div class="qq-hero">
        <h1 class="qq-hero_title">
            <?php echo $qq['designSystemName']; ?>
        </h1>

        <p>Design system, pattern library, and UX standards for digital services.</p>
    </div>

    <ul class="qq-cards">
        <li class="qq-cards_item">
            <div class="qq-cards_card">
                <h2><a href="<?php echo getUrl('patterns'); ?>">Patterns</a></h2>
                <p>Pattern library with previews, code snippets, and documentation.</p>
            </div>
        </li>

        <li class="qq-cards_item">
            <div class="qq-cards_card">
                <h2><a href="<?php echo getUrl('patchwork'); ?>">Patchwork</a></h2>
                <p>A one-page visual overview of our entire pattern library.</p>
            </div>
        </li>

        <?php /*
        <li class="qq-cards_item">
            <div class="qq-cards_card">
                <h2><a href="<?php echo getUrl('style-guide'); ?>">Style Guide</a></h2>
                <p>Color palette, typography, and design specifications that keep our brand consistent.</p>
            </div>
        </li>

        <li class="qq-cards_item">
            <div class="qq-cards_card">
                <h2><a href="<?php echo getUrl('language'); ?>">Language</a></h2>
                <p>Communicating with appropriate voice and tone in our copywriting.</p>
            </div>
        </li>
        */ ?>
    </ul>
</div>
