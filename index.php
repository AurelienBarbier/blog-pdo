<?php require_once 'templates/_head.php'; ?>
<section class="section">
    <div class="container">
        <h1 class="title">
            Hello Wilders
        </h1>
        <p class="subtitle">
            My first blog with <strong>PDO</strong>!
        </p>
    </div>
</section>
<section class="section">
    <div class="container  is-fluid">
        <div class="columns is-multiline">
            <?php
            // I need to get ALL my articles from DB, so I write my SQL request as in CLI.
            $sql = "SELECT * FROM article ORDER BY date DESC;";

            // I ask to PDO to execute the request.
            $result = $pdo->query($sql);

            // Then I ask to PDO to fetch/parse all data from the request result to store it in an array
            $articles = $result->fetchAll();

            // At least, for each $article (which is an array) stored in a bigger array $articleS
            // How work foreach and array ? Look at the quest about this topic you did on week #2.
            foreach ($articles as $article) { ?>
                <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                    <?php require('templates/_card.php'); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <?php //require_once 'includes/pagination.php'; ?>
    </div>
</section>
<?php require_once 'templates/_foot.php'; ?>
