<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Shopping site</title>
    <link rel="stylesheet" href="./css/bootstrap.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">

    <style>
        <?php ob_start();?>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }


    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .card {
        height: 550px;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .card {
        transition: border-color 1s, box-shadow 0.2s;
    }

    .card:hover {
        border-color: rgba(26, 32, 41, 0.7);
        box-shadow: 0px 0px 10px 2px rgba(26, 32, 41, 0.7);
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }

    .body {
        padding-top: 0rem;
        padding-bottom: 0rem;
        background-color: beige;
    }

    .card1 {
        height: 400px;
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/modals/">
    <link href="features.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
</head>

<body class="body">
    <main>




        <?php require("navbar.php"); ?>

        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" style="margin-top: 0%;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/carousal3.jpeg" width="100%" height="100%" />
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p class="opacity-75">Some representative
                                placeholder content for the first slide of
                                the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign
                                    up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/carousal4.avif" width="100%" height="100%" />
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for
                                the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn
                                    more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/carousal2.jpeg" width="100%" height="100%" />
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for
                                the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse
                                    gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
<!-- ..............................products.............................. -->


        <div class="container" ID="products">
            <h1 class="text-primary"><strong style="color:#5a23c8;">
                <center>ALL PRODUCTS</center>
            </strong></h2>
            <br><br>
            <br><br>
            <?php require("db_connectionform.php");

        ?>


            <?php

        $select="select * from products ";

        $selectquery=$connect->query($select);
        ?>
       
            <div class="row mt-3">
                <?php while($data=$selectquery->fetch_assoc() ) {?>
                <div class="col-lg-3">
                    
               <?php 
                
                ?>
                <a href="viewproduct.php?id=<?php echo $data['id']; ?>" style="text-decoration: none;color: black;">
                 
                
                        <div class="card mt-3" height="500px" width="400px">

                            <img class="card-img-top" height="300px" width="400px"
                                src="./upload/<?php echo $data['image'] ?>" alt="Card image cap">

                            <div class="card-body">

                                <?php  $string =$data['productname'];
               $string = (strlen($string) > 18) ? substr($string,0,15).'...' : $string;
               ?>

                                <h5 class="card-title"><?php echo $string ?></h5>

                                <?php  $string =$data['description'];
               $string = (strlen($string) > 80) ? substr($string,0,77).'...' : $string;
               ?>

                                <p class="card-text"><?php echo $string ?></p>
                                <div class="mb-2">
                                    <span class="font-bold"><strong><?php echo "$".$data['price']
                      ?></strong></span>
                                </div>
                                <center>
                                    <a href="#" class="btn btn-secondary">View Product</a>
                                </center>
                            </div>
                        </div>
                </a>
               
                </div>
                <br><br>
                <?php }?>

            </div>
       

            <!-- ....................categories........................ -->

            <div class="container" style="margin-top: 5px;" id="category">
                <h1 class="text-primary"><strong style="color:#5a23c8;">
                        <center>ALL CATEGORIES</center>
                    </strong></h2>
                    <br><br>

                    <?php require("db_connectionform.php");

        ?>


                    <?php

        $select="select * from category ";

        $selectquery=$connect->query($select);
        ?>
                    <div class="row mt-4">
                        <?php while($data=$selectquery->fetch_assoc() ) {?>
                        <div class="col-lg-4">
                            <a href="viewcategory.php?id=<?php echo $data['id']; ?>" style="text-decoration: none;">
                                <div class="card card1 mt-3">
                                    <img class="card-img-top" height="300px" width="300px"
                                        src="./upload/<?php echo $data['image'] ?>" alt="Card image cap">
                                    <div class="card-body" style="background-color:lightblue">
                                        <?php  
                            $string =$data['name'];
                            $string = (strlen($string) > 18) ? substr($string,0,15).'...' : $string;
                            ?>
                                        <h5 class="card-title"><strong style="color: rgb(5, 1, 19);">
                                                <center><?php echo $string ?></center>
                                            </strong></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                    <br><br>
            </div>

        </div>

        </div>

        <?php require("footer.php"); ?>
    </main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="./js/bootstrap.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
        integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>