<?php $thisPage="recipes" ?>

    <?php require '../includes/header.php' ?>

        <div class="main" id="home">
            <nav class="breadcrumb">
                <a href="">The Maya Kitchen</a>
                <span class="icon iconarrowright" aria-hidden="true"></span><a href="recipes.php"> Recipes</a>
                <span class="icon iconarrowright" aria-hidden="true"></span><a href="#" class="active" onclick="return false"> Power Booster Juice</a>
            </nav>

            <aside>
                <!-- <div>
                    <h6>Categories</h6>
                    <nav class="vertical">
                        <a href="">Category A</a>
                        <a href="">Category B</a>
                        <a href="">Category C</a>
                    </nav>
                </div> -->
                <?php require '../includes/rotm.php' ?>
            </aside>

            <div class="core recipe" id="singleArticle">
                <h1>Power Booster Juice</h1>
                <img src="images/recipeImages/20140115-1.jpg">
                <h6>Ingredients</h6>
                <ul>
                    <li>4 pieces medium-sized, green apples</li>
                    <li>4 pieces large  carrots</li>
                    <li>2 pieces medium-sized cucumber  </li>
                    <li>2 stalks celery</li>
                    <li>juice of 5 Dalandan fruit</li>
                    <li>juice of 2 lemons</li>
                    <li>honey (optional)</li>
                </ul>
                <h6>Procedure</h6>
                <p class="articleContent">Clean fruits and vegetables. Roughly cut first 4 ingredients. Process each cut fruits and vegetables in a juicer. Pour in a jar and stir in the dalandan and lemon juice. Best served over ice or refrigerated. You may add honey for a little sweetness.</p>
                <h6>Yield</h6>
                Approximately 1 liter
                <h6>Notes</h6>
                <ul>
                    <li>Pure honey or muscovado sugar is a healthier choice for sweetener compared to using synthetic or artificial sweeteners.</li>
                    <li>Clean, peel and chop fruits and vegetables first, if using blender. This will give you a high fiber content juice.</li>
                    <li>If juice is too acidic or citric for you, reduce the amount of your dalandan or lemon juice.</li>
                </ul>
            </div>

        </div>

    <?php require '../includes/footer.php' ?>