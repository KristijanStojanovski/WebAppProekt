<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tooplate's Little Fashion - Products</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="<?=ASSETS?>a/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>a/css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="<?=ASSETS?>a/css/slick.css"/>

        <link href="<?=ASSETS?>a/css/tooplate-little-fashion.css" rel="stylesheet">
<!--

Tooplate 2127 Little Fashion

https://www.tooplate.com/view/2127-little-fashion

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="<?= ROOT ?>home">
            <strong><span>Little</span> Fashion</strong>
        </a>

        <div class="navbar-text ms-auto me-3 ms-4">
            <?php if (isset($_SESSION['user_name'])): ?>
                Hello, <strong><?= $_SESSION['user_name'] ?></strong>
            <?php endif; ?>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= ROOT ?>home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>about">Story</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>products">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>faq">FAQs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>contact">Contact</a>
                </li>

                <?php if (!isset($_SESSION['user_name'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT ?>signin">Sign-In</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT ?>signout">Sign-Out</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


               <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="mb-5"><?= htmlspecialchars($data['posts']->title) ?></h2>
        </div>

        <div class="col-lg-8 offset-lg-2 col-12" style="margin-bottom: 30px;">
            <div class="product-thumb" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; background-color: #f9f9f9;">
                <!-- Image -->
                <img src="<?= htmlspecialchars(ROOT . $data['posts']->image) ?>" class="img-fluid product-image" alt="<?= htmlspecialchars($data['posts']->title) ?>" style="width: 100%; border-radius: 5px; margin-bottom: 10px;">

                <!-- Description -->
                <p style="text-align: center; font-size: 16px; color: #777;">
                    <?= htmlspecialchars($data['posts']->description) ?>
                </p>
            </div>
        </div>
    </div>
</div>


        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="<?=ASSETS?>a/js/jquery.min.js"></script>
        <script src="<?=ASSETS?>a/js/bootstrap.bundle.min.js"></script>
        <script src="<?=ASSETS?>a/js/Headroom.js"></script>
        <script src="<?=ASSETS?>a/js/jQuery.headroom.js"></script>
        <script src="<?=ASSETS?>a/js/slick.min.js"></script>
        <script src="<?=ASSETS?>a/js/custom.js"></script>

    </body>
</html>
