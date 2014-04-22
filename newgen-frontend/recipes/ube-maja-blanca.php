<?php $thisPage="recipes" ?>
<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>

    <?php require '../includes/header.php' ?>

        <div class="main topLevel" id="grid">

            <aside>
                <?php require '../includes/maya.php' ?>
            </aside>

            <div class="core" id="singleArticle">
                <div class="feature">
                    <h2>Maja Blanca</h2>
                    <img src="/images/recipeImages/20131127-3.jpg">
                    <p class="articleContent">Maja Blanca with an ube twist!</p>
                    <div class="social">
                        Share on:
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo $actual_link ?>" class="button small white"><span class="icon iconfacebook" aria-hidden="true"></span></a>
                        <a href="http://twitter.com/share?text=<?php echo $actual_link ?>" class="button small white"><span class="icon icontwitter" aria-hidden="true"></span></a>
                    </div>
                </div>
                <article>
                    <h6>Ingredients</h6>
                    <ul>
                        <li>1/2 cup MAYA Cornstarch</li>
                        <li>2 packs coconut powder 50g</li>
                        <li>40 grams ube powder</li>
                        <li>3 cups water</li>
                        <li>1/2 cup whole kernel corn</li>
                        <li>1/2 teaspoon ube flavoring</li>
                        <li>prepared macapuno (optional) </li> 
                    </ul>
                    <h6>Instructions</h6>
                    <ol>
                        <li>In a bowl, dissolve cornstarch, coconut powder and ube powder in water until well blended. Add in the rest of the ingredients, but leave some whole kernel corn for garnishing.</li>
                        <li>Cook over low heat, stirring constantly until thick.</li>
                        <li>Pour in a desired mold pan.</li>
                        <li>Cool and top with macapuno and whole kernel corn before serving.</li> 
                    </ol>
                    <!-- <h6>Yield</h6>
                    <p class="articleContent">Makes 2 trays</p> -->
                </article>
            </div>

        </div>

    <?php require '../includes/footer.php' ?>