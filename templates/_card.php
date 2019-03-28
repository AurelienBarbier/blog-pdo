<div class="card">
    <div class="card-image">
        <figure class="image is-4by3">
            <img src="https://img.buzzfeed.com/buzzfeed-static/static/2016-08/23/9/enhanced/buzzfeed-prod-fastlane01/enhanced-4557-1471959549-4.png"
                 alt="Placeholder image">
        </figure>
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-content">
                <p class="title is-4"><?= $article['title'];?></p>
                <p class="subtitle is-6"><a href="author.php?name=<?= $article['author']; ?>">@<?= $article['author'];?></a></p>
            </div>
        </div>

        <div class="content">
            <?php echo substr($article['content'], 0, 80);?>...
            <a href="article.php?id=<?= $article['id'];?>">Lire plus</a>
            <br>
            <time datetime="2016-1-1"><?= date('d\/m\/Y', strtotime($article['date']));?></time>
        </div>
    </div>
</div>