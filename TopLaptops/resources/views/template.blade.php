<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield ('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-green bg-green" style="background:#1C658C">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="image/Logo.png" alt="Logo" style="width: 226px" height="61"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" href="/test"> <img src="image/Rekomendasi.png" alt="rekomendasi" width="140px" height="46px"> </a>
              <ul class = "dropdown">
                <li><a href="">Kuliah</a></li>
                <li><a href="">Coding</a></li>
                <li><a href="">Bisnis</a></li>
                <li><a href="">Premium</a></li>
                <li><a href="">Gaming</a></li>
              </ul>
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
<style>
    .container {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
    }
</style>

@yield('content')

<div class="footer">
    <div class="container" style="background: #A2AEDA; padding:8px 12px;border-radius:3px;-webkit-border-radius:54px;text-decoration:none;">
    <p>Contact us</p>
    <hr  />
    </div>
</div>



<style>

    .footer .container p {
        font-family: Cambria,"Times New Roman",serif;
        font-style: bold;
        font-size: 20px;
    }
</style>

</body>
</html> 
