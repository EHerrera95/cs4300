<header>
    <nav>
        <a href="index.php" class="logo">
            <img src="assets/img/logo1.png" height="80">
        </a>
        <ul>
            <li <?php if (in_array($_SERVER['REQUEST_URI'], array("/", ""))) echo "class=\"active\""; ?>>
                <a href="/" class="nav-link">Home</a>
            </li>
            <li <?php if ($_SERVER['REQUEST_URI'] == "/contact") echo "class=\"active\""; ?>>
                <a href="/contact" class="nav-link">Contact Us</a>
            </li>
            <li <?php if ($_SERVER['REQUEST_URI'] == "/testimonials") echo "class=\"active\""; ?>>
                <a href="/testimonials" class="nav-link">Testimonials</a>
            </li>
        </ul>
    </nav>
</header>