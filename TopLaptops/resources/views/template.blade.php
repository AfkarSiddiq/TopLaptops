<!DOCTYPE html>
<html lang="en">
<head>
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
      </div>
    </nav>


@yield('content')
<br><hr><br>
</body>
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <br><br>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  
</footer>
</html> 
