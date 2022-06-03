<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< Updated upstream
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="css/template.css">
    
    <title>@yield('title')</title>
  </head>
<body >
  <nav class="navbar navbar-expand-lg navbar-green bg-green" style="background:#1C658C">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="image/Logo.png" alt="Logo" style="width: 226px" height="61"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active" href="/"> <img src="image/Rekomendasi.png" alt="rekomendasi" width="140px" height="46px"> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/"><img src="image/Kritsar.png" alt="rekomendasi" width="140px" height="46px"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/"><img src="image/AboutUs.png" alt="rekomendasi" width="140px" height="46px"></a>
            </li>
          </ul>
        </div>

=======
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="css/template.css">

  <title>@yield('title')</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-green bg-green" style="background:#1C658C">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="image/Logo.png" alt="Logo" style="width: 226px" height="61"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <!-- <li class="nav-item">
            <a class="nav-link active" href="/"> <img src="image/Rekomendasi.png" alt="rekomendasi" width="140px" height="46px"> </a>
          </li> -->
          <li class = "Dropdown" style="padding:10px">
            <a href = "#" class = "Dropdown-toggle" data-toggle = "Dropdown"></a>
              <img src="image/Rekomendasi.png" alt="rekomendasi" width="140px" height="46px">
              <div class="Dropdown-content">
                <a href="/kuliah">Laptop Kuliah</a>
                <a href="/bisnis">Laptop Bisnis</a>
                <a href="#">Laptop Gaming</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/"><img src="image/Kritsar.png" alt="rekomendasi" width="140px" height="46px"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/Contact"><img src="image/AboutUs.png" alt="rekomendasi" width="140px" height="46px"></a>
          </li>
        </ul>
>>>>>>> Stashed changes
      </div>
    </div>
  </nav>

  <style>
    .Dropdown {
      position: relative;
      display: inline-block;
    }

    .Dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .Dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .Dropdown-content a:hover {
      background-color: #f1f1f1
    }

    .Dropdown:hover .Dropdown-content {
      display: block;
    }
  </style>


  @yield('content')
  @yield('comment')
  <br>
  <hr><br>
</body>
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="mailto: bongafk@gmail.com" role="button"><img src="image/icon/email.png" style=" width: 30px; height: 30px; "><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/bongs.set" role="button"><img src="image/icon/instagram.png" style=" width: 30px; height: 30px; "><i class="fab fa-instagram"></i></a>

      <!-- whatsApp -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://wa.me/+6282169019974" role="button"><img src="image/icon/whatsapp.png" style=" width: 30px; height: 30px; "><i class="fab fa-whatsApp-in"></i></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/AfkarSiddiq/TopLaptops.git" role="button"><img src="image/icon/Github-Symbol.png" style=" width: 40px; height: 30px; "><i class="fab fa-github"></i></a>
    </section>
    <br>
    <p class="text-center">Copyright &copy; </p>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
</footer>

</html>