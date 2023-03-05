<!doctype html>

<html>
    <head>

        
        <?php
            wp_head();
        ?>

        <?php 
   $title = get_the_title();
   if($title == ''){
    $title = 'home';
   }
?>

        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" contents="widht=device-widht,initial-scale=1.0,maximun-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8a460fd3d5.js" crossorigin="anonymous"></script>

        
        <link href="<?php echo get_theme_root_uri(); ?>/siteitens/style.css" rel="stylesheet">
    </head>

    <body>
        <section class="topo">
            <div class="center">
                <header>
                    <div class="logo"><img height="80px" width="80px" src="<?php echo get_theme_root_uri(); ?>/siteitens/itens para o site/icone.png" /></div>
                </header>
                <ul class="menu">
                    <li><a href="/siteWamppserver/">home</a></li>
                    <li><a href="/siteWamppserver/contato/">contato</a></li>
                    <li><a href="/siteWamppserver/sobre">sobre</a></li>
                </ul>
            <div class="menu-mobile">
                <ul>
                   <li><a href="/siteWamppserver/">home</a></li>
                    <li><a href="/siteWamppserver/contato/">contato</a></li>
                    <li><a href="/siteWamppserver/sobre">sobre</a></li>
                </ul>
            </div>
            </div>  
<html>