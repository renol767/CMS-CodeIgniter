<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/tentang_kami.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <style>

        html, body{
            background-color: #ffffff;
            font-family: 'Source Sans Pro', sans-serif;
            overflow-x: hidden !important;
            margin 0px !important;
            padding: 0px !important;
        }

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
        <a href="tentang_kami" class="mainlink">About Us</a>
        <a href="gallery">Gallery</a>
        <a href="article">Article</a>
        <a href="certifications">Certifications</a>
        <a href="products">Products</a>
        <a href="kontak">Contact</a>
    </div>
</div>
<section style="margin-top: 100px">
    <div class = "image">
        <!-- image here -->
    </div>

    <div class = "content">
        <h2 style="margin-top: 20px">About Us</h2>
        <span></span>
        <p>PT BANDA JAYA UTAMA adalah perusahaan swasta murni berskala menengah yang bergerak dibidang spesialis
            jasa scaffolding, insulation, supply material dan tenaga ahli yang berpengalaman dibidangnya.
        </p>

        <h3>VISI</h3>
        <p>Kami memiliki visi menjadi perusahaan yang handal dengan standar internasional.</p>
        <h3>MISI</h3>
        <p>Melakukan Pekerjaan secara sistem dan prosedural untuk memberikan layanan jasa terbaik dan berkualitas serta mendukung program pemerintah dalam percepatan pembangunan disegala lini dan menciptakan adanya lapangan pekerjaan</p>

        <ul class = "links">
            <li><a href = "gallery.php">Gallery</a></li>

            <div class = "vertical-line"></div>

            <li><a href = "article">Article</a></li>

            <div class = "vertical-line"></div>

            <li><a href = "kontak">Contact</a></li>
        </ul>

        <ul class = "icons">
            <li><a class="facebook" href="https://www.facebook.com/kangudi08/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="dribbble" href="https://www.instagram.com/jasascaffolding76/"><i class="fa fa-instagram"></i></a></li>
            <li><a class="linkedin" href="https://wa.me/6281282878910"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>
</section>
</body>
</html>