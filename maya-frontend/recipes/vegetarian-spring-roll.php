<?php $thisPage="recipes" ?>

    <?php require '../includes/header.php' ?>

        <div class="main" id="home">
            <nav class="breadcrumb">
                <a href="">The Maya Kitchen</a>
                <span class="icon iconarrowright" aria-hidden="true"></span><a href="recipes.php"> Recipes</a>
                <span class="icon iconarrowright" aria-hidden="true"></span><a href="#" class="active" onclick="return false"> Fresh Vegetarian Spring Roll by Chef Tum</a>
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
                <h1>Fresh Vegetarian Spring Roll by Chef Tum</h1>
                <img src="images/recipeImages/20131113-5.jpg">
                <h6>Ingredients</h6>
                <ul>
                    <li>Rice Wrapper, sprayed with water</li>
                    <li>Lettuce</li>
                    <li>Ubod,shredded, blanched</li>
                    <li>Angel&rsquo;s hair pasta, cooked</li>
                    <li>Thai Basil</li>
                    <li>Carrots (shredded)</li>
                    <li>Cabbage (shredded</li>
                    <li>Radish (shredded)</li>
                    <li>Coriander</li>
                 </ul>
                Sauce: 
                <ul><li>Sweet Chili, prepared</li></ul>
                Garnish:
                <ul>
                    <li>Fried Shallot</li>
                    <li>Crushed Peanuts</li>
                </ul>
                <h6>Procedure</h6>
                <ol>
                    <li>Spray rice wrapper with water to soften.</li>
                    <li>Place the wrapper on middle of plate.</li>
                    <li>Arrange in alternate layers the vegetables and pasta according to the listing.</li>
                    <li>Roll wrapper to form cylinder.</li>
                    <li>Garnish with fried shallot and crushed peanuts.</li>
                    <li>Serve with sweet chili.</li>
                </ol>
            </div>

        </div>

    <?php require '../includes/footer.php' ?>