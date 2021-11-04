<!-- Bootstrap’s powerful, responsive navigation header, the navbar. -->
<div class="main_nav_bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="font-size:20px;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link navbar-font-size" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <?php
                                if (!isset($_SESSION['Status'])){
                                    echo '<a class="nav-link" href="./login.php">Sign In';
                                }elseif($_SESSION['Status'] == 'Logged in'){
                                    echo '<a class="nav-link" href="./preferences.php">Preferences</a>';
                                    echo '</li><li class="nav-item">';
                                    echo '<a class="nav-link" href="./logout.php">Sign Out';
                                }
                            ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>