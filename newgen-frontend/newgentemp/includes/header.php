<!DOCTYPE html>
<html>
    <head>

        <base href="http://www.newgenbaker.com">

        <link rel="shortcut icon" href="/images/favicon.gif" />
        <!-- Load Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">
        
        <link href='http://fonts.googleapis.com/css?family=Averia+Serif+Libre' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Averia+Sans+Libre:300,400,700' rel='stylesheet' type='text/css'>

        <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>

        <title>New Gen Baker</title>
    </head>

    <body>
        <header class="siteHead">
            <div id="brand">
                <div>
                    <a href="index.php"><img class="logo" src="/images/logo.png"></a>
                    <h1>I'm a New Gen Baker</h1>
                    <h4>I'm gonna bake you happy!</h4>
                    <!-- <div class="social">
                        <a href="http://facebook.com/80kph" rel="nofollow"><span class="icon iconfacebook" aria-hidden="true"></span></a>
                        <a href="http://twitter.com/upsigmadeltaphi" rel="nofollow"><span class="icon icontwitter" aria-hidden="true"></span></a>
                        <a href=""><span class="icon iconpinterest" aria-hidden="true"></span></a>
                    </div> -->
                    <nav class="small">
                        <a href="bakeshop.php" <?php if ($thisPage=="bakeshop") 
    echo " class=\"active\""; ?> onclick="return false">The Bake Shop <span class="callOut">Soon!</span></a>
                        <a href="contact.php" <?php if ($thisPage=="contact") 
    echo " class=\"active\""; ?>>Contact Us</a>
                        <!-- <a href="about.php" <?php if ($thisPage=="about") 
    echo " class=\"active\""; ?>>About</a> -->
                    </nav>

                    <nav class="tabs">
                        <a href="index.php" <?php if ($thisPage=="home") 
    echo " class=\"active\""; ?>><span class="icon iconhome" aria-hidden="true"></span></a>
                        <a href="recipes.php" <?php if ($thisPage=="recipes") 
    echo " class=\"active\""; ?>>Recipes</a>
                        <!-- <a href="tips.php" <?php if ($thisPage=="tips") 
    echo " class=\"active\""; ?>>Tips</a> -->
                        <a href="blogs.php" <?php if ($thisPage=="blogs") 
    echo " class=\"active\""; ?>>Blogs</a>
                        <a href="qa.php" <?php if ($thisPage=="qa") 
    echo " class=\"active\""; ?>>Q&amp;A</a>
                    </nav>  
                </div>
            </div>
        </header>