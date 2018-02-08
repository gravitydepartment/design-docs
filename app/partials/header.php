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
    <title><?php echo $config['docsName']; ?></title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">

    <link rel="stylesheet" href="<?php echo getAssetUrl('css/build/app.css'); ?>">

    <?php
    echo implode($config['css']);
    echo implode($config['jsHead']);
    ?>
</head>

<body>
    <div class="dd-site-wrapper">
        <header class="dd-header">
            <a href="<?php echo getUrl(''); ?>"><?php echo $config['docsName']; ?></a>
            <a href="<?php echo getUrl('patterns'); ?>">Patterns</a>
            <a href="<?php echo getUrl('patchwork'); ?>">Patchwork</a>
            <a class="dd-visit-site" href="<?php echo $config['siteUrl']; ?>" target="_blank">Visit Site ➚</a>
        </header>

        <main class="dd-matter">
