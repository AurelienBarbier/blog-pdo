<?php require_once 'templates/_head.php';
// Write you request to find the article which match with id in the url.
$sql = "SELECT * FROM article WHERE id = " . $_GET['id'];

// Execute the request
$result = $pdo->query($sql);

// Get the result of your request in a way php can handle it.
// We use fetch here, because we know we have only one result, not a list of results
// If we dump the $article var, you'll see an array with all the date of the request article.
$article = $result->fetch();
?>
    <section class="section">
        <div class="container">
            <h1 class="title">
                <?= $article['title']; ?>
            </h1>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <p>
                <?= $article['content']; ?>
            </p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <!-- Use of date php function to format date as french can understand -->
            <em>Publié le <?= date('d\/m\/Y', strtotime($article['date']));?> par <?= $article['author']; ?></em>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <a href="/" class="button is-primary">
                <i class="fas fa-chevron-left"></i>
                &nbsp;Retour
            </a>
        </div>
    </section>
<?php require_once 'templates/_foot.php'; ?>