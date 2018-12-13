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
                <a href=""><img src="<?php echo Url::base('asset/img/logo.png'); ?>" alt="LOGO"></a>
            </div>
        </header>
        <div class="f-breadCrumbs u-container">
            <ul>
                <li><a href="">首頁</a></li>
                <li>></li>
                <li><a href="">台北市 排行榜</a></li>
                <li>></li>
                <li><span>美食排行榜</span></li>
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