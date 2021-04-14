<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/galerry.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <style>


        h2{
            text-align: center;
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
        @media screen and (max-width:960px) {
            .img-slider{
                display: none;
            }
        }
        }

        @media screen and (max-width:768px) {
            .img-slider{
                display: none;
            }
        }
        }

        @media screen and (max-width:480px) {
            .img-slider{
                display: none;
            }
        }


    </style>
</head>
<body>

<!-- NAVIGATION -->
<div class="nav">
    <div class="logo">
        <h4 style="text-align: center">PT BANDA JAYA UTAMA</h4>
    </div>
    <div class="links">
        <a href="index">Home</a>
        <a href="tentang_kami">About Us</a>
        <a href="gallery" class="mainlink">Gallery</a>
        <a href="article">Article</a>
        <a href="certifications">Certifications</a>
        <a href="products">Products</a>
        <a href="kontak">Contact</a>
    </div>
</div>

<br>
<div class="gallery-section">
    <div class="img-slider" style="width: 80%; padding: 40px 0; margin-left: 150px; align-items: center">
        <div class="slide active">
            <img src="img/9.jpg" alt="">
            <div class="info">
                <h2>PT BANDA JAYA UTAMA</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="slide">
            <img src="img/10.jpg" alt="">
            <div class="info">
                <h2>Slide 02</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="slide">
            <img src="img/15.jpg" alt="">
            <div class="info">
                <h2>Slide 03</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="slide">
            <img src="img/8.jpg" alt="">
            <div class="info">
                <h2>Slide 04</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="slide">
            <img src="img/6.jpg" alt="">
            <div class="info">
                <h2>Slide 05</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="navigation">
            <div class="btn active"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            <div class="btn"></div>
        </div>
    </div>

    <script type="text/javascript">
        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;

        // Javascript for image slider manual navigation
        var manualNav = function(manual){
            slides.forEach((slide) => {
                slide.classList.remove('active');

                btns.forEach((btn) => {
                    btn.classList.remove('active');
                });
            });

            slides[manual].classList.add('active');
            btns[manual].classList.add('active');
        }

        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                manualNav(i);
                currentSlide = i;
            });
        });

        // Javascript for image slider autoplay navigation
        var repeat = function(activeClass){
            let active = document.getElementsByClassName('active');
            let i = 1;

            var repeater = () => {
                setTimeout(function(){
                    [...active].forEach((activeSlide) => {
                        activeSlide.classList.remove('active');
                    });

                    slides[i].classList.add('active');
                    btns[i].classList.add('active');
                    i++;

                    if(slides.length == i){
                        i = 0;
                    }
                    if(i >= slides.length){
                        return;
                    }
                    repeater();
                }, 10000);
            }
            repeater();
        }
        repeat();
    </script>
    <div class="inner-width" style="  margin-right: auto;
    margin-left: auto;
    display: block;">
        <div class="border"></div>
        <h2>Specialist Scaffolding And Insulation</h2>
        <br>
        <h4>Menggunakan Teknologi AUTOCAD 2D & 3D Sehingga team desain inhouse kami bisa memperhitungkan dan menampilkan metode pemasangan yang terbaikdan efisien untuk memenuhi kebutuhan spesifik proyek anda. Dari segi tenaga ahli lapangan kami juga menyediakan tenaga kerja bersertifikat MIGAS, KEMMENAKER, BNSP.</h4>
        <br>
        <br>
        <div class="gallery and vidio">
            <a href="img/1.png" class="image">
                <img src="img/1.jpg" alt="">
            </a>

            <a href="img/2.jpg" class="image">
                <img src="img/2.jpg" alt="">
            </a>

            <a href="img/3.jpg" class="image">
                <img src="img/3.jpg" alt="">
            </a>

            <a href="img/4.jpg" class="image">
                <img src="img/4.jpg" alt="">
            </a>

            <a href="img/5.jpg" class="image">
                <img src="img/5.jpg" alt="">
            </a>

            <a href="img/6.jpg" class="image">
                <img src="img/6.jpg" alt="">
            </a>

            <a href="img/7.jpg" class="image">
                <img src="img/7.jpg" alt="">
            </a>

            <a href="img/8.jpg" class="image">
                <img src="img/8.jpg" alt="">
            </a>
            <a href="img/9.jpg" class="image">
                <img src="img/9.jpg" alt="">
            </a>
            <a href="img/10.jpg" class="image">
                <img src="img/10.jpg" alt="">
            </a>
            <a href="img/15.jpg" class="image">
                <img src="img/15.jpg" alt="">
        </div>
        <div class="border"></div>
        <div class="gallery and vidio">
            <div class="border"></div>
            <div class="gallery and vidio">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bcaPRJ7XQaE" frameborder="3000" allow="accelerometer; autoplay; https://www.youtube.com/watch?v=bcaPRJ7XQaEclipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/NX9iryfd6Hw" frameborder="3000" allow="accelerometer; autoplay; https://www.youtube.com/watch?v=bcaPRJ7XQaEclipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/tZEM1utrjDw"frameborder="3000" allow="accelerometer; autoplay; https://www.youtube.com/watch?v=bcaPRJ7XQaEclipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2W7lcVgcaW0" frameborder="3000" allow="accelerometer; autoplay; https://www.youtube.com/watch?v=bcaPRJ7XQaEclipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jIWgVFmhmgE" frameborder="3000" allow="accelerometer; autoplay; https://www.youtube.com/watch?v=bcaPRJ7XQaEclipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/DrDlrDnde7o" frameborder="3000" allow="accelerometer; autoplay; https://www.youtube.com/watch?v=bcaPRJ7XQaEclipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/kAgl1i_dMvQ" frameborder="3000" allow="accelerometer; autoplay; https://www.youtube.com/watch?v=bcaPRJ7XQaEclipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/iMu8KO1X9pQ" frameborder="3000" allow="accelerometer; autoplay; https://www.youtube.com/watch?v=bcaPRJ7XQaEclipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bXMfxH2ulsA" frameborder="3000" allow="accelerometer; autoplay; https://www.youtube.com/watch?v=bcaPRJ7XQaEclipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QM2GHF9vRTA" frameborder="3000" allow="accelerometer; autoplay; https://www.youtube.com/watch?v=bcaPRJ7XQaEclipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<script>
    $(".gallery and vidio").magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{
            enabled: true
        }
    });
</script>

</body>
</html>
