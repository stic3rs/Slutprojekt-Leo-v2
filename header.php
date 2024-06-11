<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/frontPage.css">
    <link rel="stylesheet" href="css/fragrance.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav>
    <div class="header-container">
        <div class="icon-container-left-side">

            <div class="nav-slide">
                <button class="slide-button" id="slideToggle" onclick="toggleSlide()">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="slide-content">
                    <button class="slide-button" id="slideToggle" onclick="toggleSlide()">

                         <i id="slide-content-close" class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <div class="parent">
                        <div class="color">
                            <a href="handBag.php">Handbag<span>></span></a>
                            <a href="fragrance.php">Fragrances <span>></span></a>
                            <a href="jewlery.php">Jewelery <span>></span></a>
                        </div>

                    <div class="slide-content-bottom">
                            <a href="login.php">My Account <span><i class="fa fa-user" aria-hidden="true"></i></span></a>
                        <div class="border">
                            <a href="frontPage.php">Home Page <span><i class="fa fa-home" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                    </div>

                </div>
            </div>

            <div class="search-icon">
                <a href="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            </div>

        </div>

        <div class="logo-container">
            <a href="frontPage.php">
                BOGGART
            </a>
        </div>

        <div class="icon-container-right-side">

            <div class="account-icon">
                <a href="login.php">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </a>
            </div>

            <div class="cart-icon">
                <a href="">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </div>
</nav>