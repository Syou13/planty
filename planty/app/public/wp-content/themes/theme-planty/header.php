<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenue sur le site de planty</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header>
        <nav id= "nav-bar">
            <div id="logo">
                <img src="wp-content/themes/theme_planty/logo.png" alt= "boisson énergissante !">
            </div>  
        


            <div id="menu" role="principale">

            <?php
            wp_nav_menu(arry('theme_location' => 'topbar_menu'));
            ?>
        </div>
    </nav>
</header>
</html>