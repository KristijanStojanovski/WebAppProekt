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

                    <a class="navbar-brand" href="index.html">
                        <strong><span>Little</span> Fashion</strong>
                    </a>
                    <div class="navbar-text ms-auto me-3 ms-4">
                    <?php if(isset($_SESSION['user_name'])):?>
                    Hello, <strong><?=$_SESSION['user_name']?></strong>
                    <?php endif;?>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about">Story</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="products">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="faq">FAQs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact">Contact</a>
                            </li>
                            <?php if(!isset($_SESSION['user_name'])):?>
                            <li class="nav-item">
                                <a class="nav-link" href="signin">Sign-In</a>
                            </li>
                            <?php else:?>
                            <li class="nav-item">
                                <a class="nav-link" href="signout">Sign-Out</a>
                            </li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </nav>

     <header class="site-header section-padding d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12">
                    <h1>Upload Your Image</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
    <section class="image-upload section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="<?= ROOT ?>products/image" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="file" class="form-label">Select Image to Upload</label>
                        <input type="file" class="form-control" id="file" name="file" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Image Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title for the image..." required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Image Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter a description for the image..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload Image</button>
                </form>
            </div>
        </div>
    </div>
</section>

</main>

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
