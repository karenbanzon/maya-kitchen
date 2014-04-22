<?php $thisPage="recipes" ?>
<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>

    <?php require '../includes/header.php' ?>

        <div class="main topLevel" id="grid">

            <aside>
                <?php require '../includes/maya.php' ?>
            </aside>

            <div class="core" id="singleArticle">
                <div class="feature">
                    <h2>Puto Pao</h2>
                    <img src="/images/recipeImages/20131127-5.jpg">
                    <p class="articleContent">Now you can make your version of this famous Filipino delicacy!</p>
                    <div class="social">
                        Share on:
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo $actual_link ?>" class="button small white"><span class="icon iconfacebook" aria-hidden="true"></span></a>
                        <a href="http://twitter.com/share?text=<?php echo $actual_link ?>" class="button small white"><span class="icon icontwitter" aria-hidden="true"></span></a>
                    </div>
                </div>
                <article>
                    <h6>Ingredients</h6>
                    <ul>
                        <li>1 pack MAYA Quick &amp; Easy Complete Hotcake Mix 200g</li>
                        <li>3/4 cup water</li>
                        <li>cheese cubes/slices</li>
                        <li>slices of salted egg (red egg)</li>
                    </ul>
                    <h6>Instructions</h6>
                    <ol>
                        <li>Slightly oil mini muffin tins.</li>
                        <li>Preheat electric steamer as per appliance direction.</li>
                        <li>Combine hotcake mix and water in a bowl.</li>
                        <li>Stir batter until blended.</li>
                        <li>Fill up muffin holes about 3/4 full with batter mixture.</li>
                        <li>Top each hole with cheese cubes and slice of salted egg or quantity as desired.</li>
                        <li>Place muffin tins in the steamer and steam puto until cooked (approximately 10–15 minutes).</li>
                        <li>Serve.</li> 
                    </ol>
                    <!-- <h6>Yield</h6>
                    <p class="articleContent">Makes 2 trays</p> -->
                </article>
            </div>

        </div>

    <?php require '../includes/footer.php' ?>