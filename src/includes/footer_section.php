<div class="container-fluid footer-section">
    <div class="footer-section__main-div">
        <div class="row">
            <?php
            if(!isset($_COOKIE['disclaimer']))
                echo('<div id=disclaimer><h1>This page is not officially affiliated with Bethel University<br>All official scheduling changes must be made with the Registrar.</h1></div>');
            ?>
        </div>
        <div class="row">
            <div class="col footer-section__left-div">

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                </ul>

            </div>
            <!-- empty section -->
            <div class="col">
                &nbsp;
            </div>
            <div class="col footer-section__right-div">
                <p>Bethel University &copy; <?php echo date('Y'); ?></p>
            </div>

        </div>
    </div>
</div>