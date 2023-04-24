<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .super-container{
            height: 100vh !important;
            background-image: linear-gradient(to bottom, #DD1515 20%, #6E0007 100%);
        }

        .judul1{
            font-size: 70px;
            color: white;
        }
        .judul2{
            font-size: 75px;
            color: white;

        }
        .btn-daftar{
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 25px;
            padding-right: 25px;
            color: white;
            background-image: linear-gradient( #820411, #160003);
            border-radius: 100px;
            border : none;
        }
        .costumer-card {
            background-image: linear-gradient( #820411, #160003);
            border-radius: 20px;
            padding-top: 20px;
            padding-bottom: 10px;
            padding-left: 30px;
            padding-right: 30px;

        }
        .img-music{
            filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(288deg) brightness(102%) contrast(102%);
        }
    
    </style>
    
</head>
<body>
    <div class="super-container d-flex flex-column">
        {{-- awal nav --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Platform</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Upload</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Release</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    
          {{-- end nav --}}
    
          {{-- landing page --}}
          <section id="home" class="flex-fill">
              <div class="container ">
                <div class="row">
                    <div class="col-md-8">
                        <div class="content p-4">
                            <h2 class="judul1">Jual Musik kalian</h2>
                            <h1 class="judul2">Ke Seluruh Dunia</h1>
                            <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, nihil voluptatum. Nostrum doloribus dolores obcaecati corrupti excepturi quas autem, cupiditate consequuntur, magni soluta dignissimos unde quo, maiores reprehenderit beatae modi.</p>
                            <div class="d-flex gap-4">
                                <button class="btn-daftar">Daftar Sekarang <i class="fas fa-arrow-right"></i></button>
                                <a href="" class="d-flex gap-1 align-items-center bd-highlight ml-3 text-decoration-none text-white">Lihat Selengkapnya <i class="fas fa-arrow-right"></i> </a>

                            </div>
                            <div class="d-flex mt-3 gap-3">
                                <div class="costumer-card text-center">
                                    <div class="content-card text-white ">
                                        <h4>320K</h4>
                                        <p>Costumer</p>
                                    </div>
                                </div>
                                <div class="costumer-card text-center">
                                    <div class="content-card text-white ">
                                        <h4>45K</h4>
                                        <p>Track</p>
                                    </div>
                                </div>
                                <div class="costumer-card text-center">
                                    <div class="content-card text-white ">
                                        <h4>10K</h4>
                                        <p>Musician</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                   
                </div>
            </div>
          </section>
          {{-- landing page --}}

          {{-- footer start --}}
          <footer class="mx-3">
            <div class="d-flex justify-content-evenly">
                <img src="images/sporify.png" class="img-music" alt="" width="200" height="80">
                <img src="images/appmusic.png" class="img-music" alt="" width="150">
                <img src="images/Amazon-music.svg" class="img-music" alt="" width="150">
                <img src="images/youtube-music.svg" class="img-music" alt="" width="150">
                <img src="images/dezzer.png" class="img-music" alt="" width="200" height="80">


            </div>
          </footer>
          {{-- footer end --}}
</div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>