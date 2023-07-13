<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head()?>
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__branding">
                    <div class="header__logo">
                        <h1>TheRecipe</h1>
                    </div>

                    <div class="header__nav">
                    <?php wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    ))?>
                    </div>
                </div>
            </div>
        </div>
    </header>