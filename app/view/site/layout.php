<!DOCTYPE html>
<html lang="zh-tw">
    <head>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
        <title><?php echo isset($title) ? $title : ''; ?></title>

        <?php echo $asset->renderCSS();?>
        <?php echo $asset->renderJS();?>
    </head>
    <body>
        <header>
            <h1><span><?php echo isset($hr) ? $hr : ''; ?></span></h1>
            <div class="headerLogo">
                <a href="/"><img src="<?php echo Url::base('asset/img/logo.png'); ?>" alt="LOGO"></a>
            </div>
        </header>

        <div class="f-breadCrumbs u-container">
            <ul>
                <?php 
                    echo implode('', array_map(function($value) {
                        return isset($value['href']) ? '<li><a href="' . $value['href'] . '">' . $value['name'] . '</a></li><li>></li>' : '<li><span>' . $value['name'] . '</span></li>'; 
                    }, $navs));
                ?>
            </ul>
        </div>
        <div class="f-mainContents u-container">
            <?php echo isset($content) ? $content : ''; ?>
        </div>
        <footer class="f-footer">
            <div class="footerLogo">
                <a href="">
                    <img src="<?php echo Url::base('asset/img/logo.png'); ?>" alt="LOGO">
                </a>
            </div>
        </footer>
    </body>
</html>