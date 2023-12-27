
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <title>Document</title>
    <style>
        .cart-icon {
            color: white;
            
        }
        .cart-icon:hover{
            color:#ff00ff;
        }
     /* Add hover effect style for navbar items */
.nav-item a.nav-link:hover {
    color: #ff00ff !important; /* Change the text color on hover */
}




    </style>
</head>
<body>
    
</body>
</html>


<?php
    
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    
} // Start the session
$loggedIn = isset($_SESSION['user']); // Check if user is logged in


    
   
?>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="background-color:rgb(129, 71, 192);">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4"><strong style="color:aliceblue;">SHOPPING SITE</strong></span>
    </a>

    <ul class="nav nav-pills">
        
    
        
            <!-- Display different options for logged-in users -->
            <li class="nav-item"><a href="home.php" class="nav-link active" aria-current="page"  style="color:aliceblue">HOME</a></li>
            <li class="nav-item"><a href="#products" class="nav-link" style="color:aliceblue">PRODUCTS</a></li>
            <li class="nav-item"><a href="#category" class="nav-link" style="color:aliceblue">CATEGORIES</a></li>
            <?php if($loggedIn):?>
                <li style="margin: auto;"class="nav-item" ><a href="cart.php" ><i class="fas fa-shopping-cart cart-icon"></i> <!-- This is the cart icon --> </a></li>
                <li style="margin: 10px;"class="nav-item" ><a href="oders.php" ><i class="fa fa fa-shopping-bag icon icon icon-shopping-bag cart-icon"></i> <!-- This is the cart icon --> </a></li>

            <li class="nav-item"><a href="logout.php" class="nav-link" style="color:aliceblue">LOGOUT</a></li>
            <?php else:?>
            <li class="nav-item"><a href="login.php" class="nav-link" style="color:aliceblue">LOGIN</a></li>
        
            <!-- Display different options for not logged-in users -->
            <!-- <li class="nav-item"><a href="home.php" class="nav-link active" aria-current="page"  style="color:aliceblue">HOME</a></li> -->
            <li class="nav-item"><a href="register.php" class="nav-link " style="color:aliceblue">REGISTER</a></li> 
            <?php endif;?>

        
    </ul>
</header>


