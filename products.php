<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/d648ce330a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Products</title>
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

        .container a{
            text-decoration: none;
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
            .container{
                margin-top: 100px;
            }
        }

    </style>
</head>
<body>
<div>
    <div class="nav" data-aos-duration="1000">
        <div class="logo">
            <h4 style="text-align: center">PT BANDA JAYA UTAMA</h4>
        </div>
        <div class="links">
            <a href="index">Home</a>
            <a href="tentang_kami">About Us</a>
            <a href="gallery">Gallery</a>
            <a href="article">Article</a>
            <a href="certifications">Certifications</a>
            <a href="products" class="mainlink">Products</a>
            <a href="kontak">Contact</a>
        </div>
    </div>
    <div class="container">
        <br><br><br><br><br>
        <h1>Jasa Tenaga Ahli scaffolding & Insulation</h1>
        <br>
        <a href="products.php" class="btn btn-primary" role="button" >Jasa Tenaga Ahli</a>
        <a href="material.php" class="btn btn-secondary" role="button" >Scaffolding</a>
        <a href="isolasi.php" class="btn btn-secondary"  role="button" >Isolasi (Insulation)</a>

        <br><br>
        <div class="photo" style="margin: 20px; padding: 8px">
            <a href="sertv/COVER%20DEPAN.jpg"><img src="sertv/COVER%20DEPAN.jpg" alt="img-fluid" width="400px" style="18rem"></a>
            <a href="sertv/KEAHLIAN%20BJU.jpg"><img src="sertv/KEAHLIAN%20BJU.jpg" alt="img-fluid" width="400px" style="18rem"></a>
            <a href="sertv/PHOTO%20MPS.jpg"><img src="sertv/PHOTO%20MPS.jpg" alt="img-fluid" width="400px" style="18rem"></a>
            <a href="sertv/PHOTO%20PAINTING.jpg"><img src="sertv/PHOTO%20PAINTING.jpg" alt="img-fluid" width="400px" style="18rem"></a>
        </div>
        <p>Kami menawarkan jasa Rental Material scaffolding dengan skala Besar dan siap untuk kirim ke seuruh indonesia.
            dengan tenaga - tenaga ahli yang bersertifikat dan profesional ,
            scaffolding berstandar migas / brithis BS1139
            dengan Ketebaan , 3,2mm dan 4mm
            kami mendesign,merancang,menghitung dan memasang serta menjamin kwalitas pekerjaan sesuai standart yang telah ditentukan....</p>
        <br><br><br>

        <h5>Untuk Pemesanan dan Penyewaan Bisa Menghubungi Kami Dengan Cara : </h5>
        <p>Whatsapp/Telepon : <a href="wa.me/6281282878910"><i class="fas fa-phone"></i>    +6281282878910</a></p>
        <p>Email            : <a href="mailto:bandajayautama.pt@gmail.com?subject = Feedback&body = Message"><i class="fas fa-envelope"></i>   bandajayautama.pt@gmail.com</a></p>
        <h5>Atau datang ke kantor kami yang beralamat di : </h5>
        <p>Alamat : <a href="https://goo.gl/maps/FF9A7M659sZS4unb6"><i class="fas fa-map-marker-alt"></i>   Jl.Raya Balongan Blok kesambi No.02 Rt/Rw 01/01 Indramayu</a></p>

        <br><br><br><br><br>

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
