\<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Romyk Ice Cream</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* CSS RINGKAS */
        body { 
            font-family: 'Poppins', sans-serif; 
            color: #373736; 
            overflow-x: hidden; 
        }

        /* Header / Navbar */
        .header_section { 
            border-bottom: 1px solid #fc95c4; 
            padding: 15px 0; 
        }
        .nav-link { 
            font-size: 18px; 
            color: #222 !important; 
            margin: 0 10px; 
        }
        .nav-link.active { color: #fc95c4 !important; }

        /* About Section */
        .layout_padding { padding: 90px 0; }
        
        .about_taital { 
            font-size: 45px; 
            font-weight: bold; 
            position: relative; 
            padding-bottom: 15px;
            display: inline-block;
        }
        /* Garis pink di samping judul */
        .about_taital::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 6px;
            background: #ffd6e1;
            top: 50%;
            right: -100px;
            border-radius: 4px;
        }

        .about_text { 
            font-size: 16px; 
            line-height: 1.8; 
            margin: 30px 0; 
            color: #373736; 
        }

        .about_img img { 
            max-width: 100%; 
            height: auto; 
        }

        /* Tombol Read More */
        .read_bt a { 
            display: inline-block;
            background: #fc95c4;
            color: #fff;
            padding: 12px 45px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .read_bt a:hover { 
            background: #252525; 
            color: #fff; 
        }

        /* Footer Copyright */
        .copyright_section { 
            background: #262526; 
            padding: 30px 0; 
            text-align: center; 
            margin-top: 50px;
        }
        .copyright_text { color: #fff; margin: 0; }
        .copyright_text a { color: #fc95c4; text-decoration: none; }
    </style>
</head>
<body>

    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><strong>ROMYK</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Icecream</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section class="layout_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <div class="about_img">
                        <img src="https://themewagon.github.io/Romyk/images/about-img.png" alt="Ice Cream">
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="about_taital">About Icecream</h1>
                    <p class="about_text">
                        Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore euconsectetur adipiscing esequat.
                    </p>
                    <div class="read_bt"><a href="#">Read More</a></div>
                </div>
            </div>
        </div>
    </section>

    <footer class="copyright_section">
        <div class="container">
            <p class="copyright_text">2026 All Rights Reserved. Design by <a href="#">Free Html Templates</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>