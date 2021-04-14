<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <style>
        .nav{
            position: fixed;
            z-index: 1000;
            top: 0;
            right: 0;
            left: 0;
            height: 80px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 0 25px 0 25px;
            background-color: #fff;
            box-shadow: 0 19px 38px rgba(0,0,0,0.10);
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .nav .links a{
            margin-right: 25px;
            font-size: 16px;
            font-weight: 600;
            color: #000;
            text-decoration: none;
        }
        .nav .links .mainlink{
            color: #0099ff;
        }
        .nav h4{
            font-size: 22px;
            font-weight: bold;
            margin-left: 25px;
        }
        /* Responsive */
        @media only screen and (max-width: 600px) {

            .nav {
                flex-direction: column;
                justify-content: space-around;
                padding: 20px;
                height: auto;
                overflow-y: hidden;
            }

            .nav h4 {
                font-size: 6vw;
                margin-top: 10px;
                margin-bottom: 14px;
            }

            .nav .links a {
                margin-right: 25px;
                margin-left: 50px;
                font-size: 12px;
                font-weight: 600;
            }
        }
    </style>
</head>
<body>
<div class="nav">
    <div class="logo">
        <h4 style="text-align: center">PT BANDA JAYA UTAMA</h4>
    </div>
    <div class="links">
        <a href="index">Home</a>
        <a href="tentang_kami">About Us</a>
        <a href="gallery">Gallery</a>
        <a href="article">Article</a>
        <a href="certifications">Certifications</a>
        <a href="products">Products</a>
        <a href="kontak" class="mainlink">Contact</a>
    </div>
</div>
<div class="container">
    <div class="contact-box">
        <div class="left"></div>
        <form action="kirim_kontak.php" method="post">
        <div class="right">
            <h2>Contact Us</h2>
            <input type="hidden" class="field" placeholder="id" name="id">
            <input type="text" class="field" placeholder="Your Name" name="nama">
            <input type="text" class="field" placeholder="Your Email" name="email">
            <input type="text" class="field" placeholder="Phone" name="nohp">
            <textarea placeholder="Message" class="field" name="pesan"></textarea>
            <button class="btn" type="submit">Send</button>
        </div>
        </form>
    </div>
    <div class="sosial">
        <a href="https://www.facebook.com/kangudi08/"><i class="fab fa-facebook"></i> </a>
        <a href="https://www.instagram.com/jasascaffolding76/"><i class="fab fa-instagram"></i> </a>
        <a href="mailto:bandajayautama.pt@gmail.com?subject = Feedback&body = Message"><i class="fas fa-envelope"></i> </a>
        <a href="https://wa.me/6281282878910"><i class="fab fa-whatsapp"></i> </a>
        <a href="https://goo.gl/maps/FF9A7M659sZS4unb6"><i class="fas fa-map-marker-alt"></i> </a>
    </div>
</div>



</body>
</html>