<?php $thisPage="home" ?>
    
    <?php require 'includes/header.php' ?>

        <div class="main" id="home">
            <div class="topTier">
                <div class="social">
                    <h3>Connect with us!</h3>
                    <div>
                        <a href="https://www.facebook.com/newgenbaker" target="_blank"><span class="icon iconfacebook" aria-hidden="true"></span></a>
                        <a href="https://twitter.com/newgenbaker" target="_blank"><span class="icon icontwitter" aria-hidden="true"></span></a>
                        <a href="http://instagram.com/themayakitchen" target="_blank"><span class="icon iconinstagram" aria-hidden="true"></span></a>
                    </div>
                </div>
                <div class="hero">
                    <img src="/images/featured/20131127-1.jpg">
                    <div class="caption">
                        <span>Chef Myrna Segismundo in the Spotlight</span>
                        <a href="articles/myrna-segismundo.php" class="button small teal">Read More</a>
                    </div>
                </div>
            </div>

            <aside>
                <?php require 'includes/maya.php' ?>
                <div class="newsLetter">
                    <h6>Sign Up For Our Newsletter</h6>
                    <div id="mc_embed_signup">
                    <form action="http://themayakitchen.us3.list-manage.com/subscribe/post?u=093befd519c5e89568e2f86e9&amp;id=cdf613aa70" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <br>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address</label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-FNAME">First Name </label>
                        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-LNAME">Last Name </label>
                        <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                    </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button orange"></div>
                    </form>
                    </div>
                </div>
            </aside>

            <div class="core">
                <div class="latestRecipes">
                    <h6>Latest Recipes</h6>
                    <div class="card">
                        <img src="images/recipeImages/thumbs/thumb-20131127-2.jpg">
                        <div>
                            <a href="recipes/tiramisu-parfait.php"><h4>Tiramisu Parfait</h4></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/recipeImages/thumbs/thumb-20131127-3.jpg">
                        <div>
                            <a href="recipes/ube-maja-blanca.php"><h4>Maja Blanca with Ube</h4></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/recipeImages/thumbs/thumb-20131127-4.jpg">
                        <div>
                            <a href="recipes/easy-chocolate-mousse.php"><h4>Easy Chocolate Mousse</h4></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/recipeImages/thumbs/thumb-20131127-5.jpg">
                        <div>
                            <a href="recipes/puto-pao.php"><h4>Puto Pao</h4></a>
                        </div>
                    </div>
                </div>
                <div class="latestBlogs">
                    <h6>Latest BakeBlogs</h6>
                    <a href="articles/intro-to-baking.php">
                        <div class="card text">
                            <h3>Introduction to Baking</h3>
                        </div>
                    </a>
                    <a href="articles/measuring-ingredients.php">
                        <div class="card text">
                            <h3>Measuring Ingredients</h3>
                        </div>
                    </a>
                    <a href="articles/myrna-segismundo.php">
                        <div class="card text">
                            <h3>Chef Myrna Segismundo in the spotlight</h3>
                        </div>
                    </a>
                    <a href="articles/bake-a-valentine.php">
                        <div class="card text">
                            <h3>Bake A Valentine</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    <?php require 'includes/footer.php' ?>