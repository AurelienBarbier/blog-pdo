<?php require_once 'includes/head.php'; ?>
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
                        <textarea class="textarea" placeholder="Textarea" name="content"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Author</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" type="text"
                               placeholder="Type the title of your awesome article here !" value="" name="author">
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
<?php require_once 'includes/foot.php'; ?>