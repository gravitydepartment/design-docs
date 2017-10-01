<?php
/**
* Quasar: Design System
*
* @author     Brendan Falkowski (http://gravitydept.com)
* @copyright  Gravity Department. All rights reserved.
*/
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <title><?php echo $qq['designSystemName']; ?></title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">

    <link href="<?php echo getAssetUrl('css/app.css'); ?>" rel="stylesheet">

    <?php
    echo $qq['css'];
    echo $qq['jsHead'];
    ?>
</head>

<body>
    <div class="qq-site-wrapper">
        <header class="qq-header">
            <a href="<?php echo getUrl(''); ?>"><?php echo $qq['designSystemName']; ?></a>
            <a href="<?php echo getUrl('patterns'); ?>">Patterns</a>
            <a href="<?php echo getUrl('patchwork'); ?>">Patchwork</a>
            <a class="qq-visit-site" href="<?php echo $qq['siteUrl']; ?>" target="_blank">Visit Site ➚</a>
        </header>

        <main class="qq-matter">
