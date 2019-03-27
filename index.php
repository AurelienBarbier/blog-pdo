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
            <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                <?php require('templates/_card.php'); ?>
            </div>
            <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                <?php require('templates/_card.php'); ?>
            </div>
            <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                <?php require('templates/_card.php'); ?>
            </div>
            <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                <?php require('templates/_card.php'); ?>
            </div>
            <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                <?php require('templates/_card.php'); ?>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <?php //require_once 'includes/pagination.php'; ?>
    </div>
</section>
<?php require_once 'templates/_foot.php'; ?>
