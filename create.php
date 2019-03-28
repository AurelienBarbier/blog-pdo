<?php
require_once 'templates/_head.php';

// Im testing if I have data submited by post method.
if (!empty($_POST)) {

    // If yes, I can try to insert my new article
    // Write the pattern of an SQL request wich insert data in a table with placeholders prefixed with ':'.
    $sql = 'INSERT INTO article (`title`, `content`, `author`, `date`)
        VALUES (:title, :content, :author, :date);';

    // Tell to PDO to prepare the request. Why preparing a request ? look at the slides on your drive.
    $prepared = $pdo->prepare($sql);

    // Link the placeholders of your request with dynamic values from the $_POST superglobals. How POST work ? look at your quest on forms.
    $prepared->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
    $prepared->bindValue(':content', $_POST['content'], PDO::PARAM_STR);
    $prepared->bindValue(':author', $_POST['author'], PDO::PARAM_STR);
    $prepared->bindValue(':date', $_POST['date'], PDO::PARAM_STR);

    // Tell to PDO to execute your request on your server.
    $prepared->execute();

    // We can get the last id inserted in DB from PDO in order to redirect user to the details of the article.
    $newId = $pdo->lastInsertId();
    header('Location:/article.php?id=' . $newId);
}

?>
    <section class="section">
        <div class="container">
            <h1 class="title">
                Write an article
            </h1>
            <p class="subtitle">
                You can write a new article here !
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <form method="post">
                <div class="field">
                    <label class="label">Title</label>
                    <div class="control has-icons-left">
                        <input class="input" type="text"
                               placeholder="Type the title of your awesome article here !"
                               value=""
                               name="title">
                        <span class="icon is-small is-left">
                        <i class="fas fa-heading"></i>
                    </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Content</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Your awesome article !" name="content"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Author</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" type="text"
                               placeholder="Type the author of this awesome article here !" value="" name="author">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Date</label>
                    <div class="control has-icons-left">
                        <input class="input" type="date"
                               placeholder="Type the date of publication of this awesome article here !" value=""
                               name="date">
                        <span class="icon is-small is-left">
                        <i class="fas fa-calendar"></i>
                    </span>
                    </div>
                </div>

                <div class="field">
                    <div class="control has-text-right">
                        <button class="button is-primary" type="submit">
                            Enregister&nbsp;
                            <i class="fas fa-check"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php require_once 'templates/_foot.php'; ?>