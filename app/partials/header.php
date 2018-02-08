<?php
/**
* Gravity Department - Design Docs
* https://github.com/gravitydepartment/design-docs
*
* @author     Brendan Falkowski
* @copyright  Gravity Department. All rights reserved.
*/
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <title><?php echo $qq['docsName']; ?></title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">

    <link rel="stylesheet" href="<?php echo getAssetUrl('css/build/app.css'); ?>">

    <?php
    echo implode($qq['css']);
    echo implode($qq['jsHead']);
    ?>
</head>

<body>
    <div class="qq-site-wrapper">
        <header class="qq-header">
            <a href="<?php echo getUrl(''); ?>"><?php echo $qq['docsName']; ?></a>
            <a href="<?php echo getUrl('patterns'); ?>">Patterns</a>
            <a href="<?php echo getUrl('patchwork'); ?>">Patchwork</a>
            <a class="qq-visit-site" href="<?php echo $qq['siteUrl']; ?>" target="_blank">Visit Site ➚</a>
        </header>

        <main class="qq-matter">
