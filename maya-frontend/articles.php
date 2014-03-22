<?php $thisPage="articles" ?>

    <?php require 'includes/header.php' ?>

        <div class="main" id="articles">
            <h1>ARTICLES</h1>
            <nav class="breadcrumb">
                <a href="index.php">The Maya Kitchen</a>
                <span class="icon iconarrowright" aria-hidden="true"></span><a href="#" class="active" onclick="return false"> Articles</a>
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
                <?php require 'includes/rotm.php' ?>
                <?php require 'includes/newgen.php' ?>
                <?php require 'includes/newsletter.php' ?>
            </aside>

            <?php require 'includes/recentArticles.php' ?>

        </div>

    <?php require 'includes/footer.php' ?>