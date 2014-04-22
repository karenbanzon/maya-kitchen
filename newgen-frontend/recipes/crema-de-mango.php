<?php $thisPage="recipes" ?>
<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>

    <?php require '../includes/header.php' ?>

        <div class="main topLevel" id="grid">

            <aside>
                <?php require '../includes/maya.php' ?>
            </aside>

            <div class="core" id="singleArticle">
                <div class="feature">
                    <h2>Crema de Mango</h2>
                    <img src="/images/recipeImages/20131127-1.jpg">
                    <p class="articleContent">A tasty treat to beat the heat!</p>
                    <div class="social">
                        Share on:
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo $actual_link ?>" class="button small white"><span class="icon iconfacebook" aria-hidden="true"></span></a>
                        <a href="http://twitter.com/share?text=<?php echo $actual_link ?>" class="button small white"><span class="icon icontwitter" aria-hidden="true"></span></a>
                    </div>
                </div>
                <article>
                    <h6>Ingredients</h6>
                    <ul>
                        <li>4 tablespoons butter</li>
                        <li>2 medium eggs</li>
                        <li>1/2 cup water</li>
                        <li>1 pack MAYA Oven Toaster Butter Cake Mix 200g</li>
                        <li>1 cup whipped cream</li>
                        <li>1 cup thinly sliced ripe mangoes</li>
                        <li>1 45&ndash;gram unflavored gelatin</li> 
                    </ul>
                    <h6>Instructions</h6>
                    <ol>
                        <li>Brush the bottom of a 9&rdquo;x5&rdquo; rectangular aluminum baking pan with oil or shortening then line it with wax paper.</li>
                        <li>Cream the butter in a bowl until soft. Blend in the eggs and water. Add the cake mix and beat with a wooden spoon until smooth. Pour mixture into the prepared pan and spread evenly. Cover loosely with aluminum foil and lightly seal at the edges. Remove oven toaster tray. Place the baking pan directly on the oven rack.</li>
                        <li>Bake in the oven toaster for 10 minutes. Turn the pan sideways and bake for 6 minutes more until done. Cool.</li>
                        <li>Spread cream on top of cake. Arrange mango slices. Set aside.</li>
                        <li>Prepare gelatin according to package direction. Slightly cool, and then pour on top of mango cream layer. Chill.</li>
                    </ol>
                    <!-- <h6>Yield</h6>
                    <p class="articleContent">Makes 2 trays</p> -->
                </article>
            </div>

        </div>

    <?php require '../includes/footer.php' ?>