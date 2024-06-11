<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/handBag.css">
</head>
<body>

<?php
require_once("header.php");
?>

<div class="container">

    <div class="video-container">
        <video id="myVideo" controls muted autoplay>
            <source src="video/brad.mp4" type="video/mp4">
        </video>
    </div>

    <div class="text-container">
    <p>1982 Collection</p>
        <div class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quibusdam enim, repudiandae quas ad recusandae fugit alias, beatae ducimus blanditiis hic temporibus debitis voluptatum ipsam, tempore libero? Nobis earum cumque voluptatibus modi odit magni nisi id dolorem laboriosam, vitae eum aut repudiandae, reprehenderit eos eligendi animi, quibusdam eaque. Dolore, libero!
        </div>
    </div>

    <div class="handbag">
        <img src="bilder/black_bag.jpg" alt="">
    </div>
    
    <div class="order-container">
        <img src="bilder/black_bag2.webp" alt="">

        <div class="information">
            <p id="pung">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quibusdam enim, repudiandae quas ad recusandae fugit alias, beatae ducimus blanditiis hic temporibus debitis voluptatum ipsam, tempore libero? Nobis earum cumque voluptatibus modi odit magni nisi id dolorem laboriosam.
            </p>
            <div class="pop-button">

                <button class="pop-button" id="pop-toggle" onclick="togglePop()">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <div class="pop-content">
                    <button class="pop-button" id="pop-toggle" onclick="togglePop()">
                         <i id="pop-content-close" class="fa fa-times" aria-hidden="true"></i>
                    </button>
                   
                </div>
            </div>







            </div>
        </div>
    </div>


<?php
require_once("footer.php");
?>

</body>
<script src="handbag.js"></script>
</html>