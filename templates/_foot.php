<footer class="container-fluid">
    <div class="columns is-centered">
        <div class="column is-full-mobile is-one-quarter-desktop">
            <strong>POST debug</strong>
            <pre>
            <?php var_dump($_POST); ?>
        </pre>
        </div>
        <div class="column is-full-mobile is-one-quarter-desktop">
            <strong>GET debug</strong>
            <pre>
            <?php var_dump($_GET); ?>
        </pre>
        </div>
        <div class="column is-full-mobile is-one-quarter-desktop">
            <strong>PDO debug </strong>
            <pre>
                <?php var_dump($pdo->errorInfo()); ?>
            </pre>
        </div>
    </div>
</footer>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
</body>
</html>