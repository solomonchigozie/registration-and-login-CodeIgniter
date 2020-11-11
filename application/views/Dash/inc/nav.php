<nav class="navbar navbar-expand-md bg-primary navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Hi, <?php echo  $_SESSION['u_name']; ?></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url(); ?>home/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>