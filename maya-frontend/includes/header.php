<!DOCTYPE html>
<html>
    <head>

        <base href="/">

        <link rel="shortcut icon" href="/images/icons/favicon.ico" />

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Load Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">

        <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>

        <title>The Maya Kitchen</title>
    </head>

    <body>
        <header class="siteHead">
            <div id="brand">
                <div>
                    <a href="index.php"><img class="logo" src="/images/logo.png"></a>
                    <!-- <div class="social">
                        <a href="http://facebook.com/80kph" rel="nofollow"><span class="icon iconfacebook" aria-hidden="true"></span></a>
                        <a href="http://twitter.com/upsigmadeltaphi" rel="nofollow"><span class="icon icontwitter" aria-hidden="true"></span></a>
                        <a href=""><span class="icon iconpinterest" aria-hidden="true"></span></a>
                    </div> -->
                    <nav>
                        <a href="index.php" <?php if ($thisPage=="home") 
    echo " class=\"active\""; ?>>Home</a>
                        <a href="classes.php" <?php if ($thisPage=="classes") 
    echo " class=\"active\""; ?>>Classes</a>
                        <a href="recipes.php" <?php if ($thisPage=="recipes") 
    echo " class=\"active\""; ?>>Recipes</a>
                        <a href="articles.php" <?php if ($thisPage=="articles") 
    echo " class=\"active\""; ?>>Articles</a>
                        <a href="kids.php" onclick="return false" <?php if ($thisPage=="kids") 
    echo " class=\"active\""; ?>>Kids' Corner</a>
                        <a href="products.php" onclick="return false" <?php if ($thisPage=="products") 
    echo " class=\"active\""; ?>>Products</a>
                        <a href="contact.php" <?php if ($thisPage=="contact") 
    echo " class=\"active\""; ?>>Contact</a>
                    </nav>  
                </div>
            </div>
        </header>