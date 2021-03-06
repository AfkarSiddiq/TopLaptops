@extends('template')
@section('title', 'TopLaptops | Kuliah')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Rekomendasi Laptop kuliah</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="/image/Kuliah/asus chromebook c214.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Asus Chromebook C214</h5>
                        <p class="card-text">Intel Celeron N4000 Processor 2.8 GHz (12M Cache, up to 4.7 GHz)</p>
                        <center><a href="#" class="btn btn-primary">Lihat</a></center>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="/image/Kuliah/asus-vivobook-15-a516.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">asus-vivobook-15-a516</h5>
                        <p class="card-text">Intel Celeron N4000 Processor 2.8 GHz (12M Cache, up to 4.7 GHz)</p>
                        <center><a href="#" class="btn btn-primary">Lihat</a></center>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="/image/Kuliah/Samsung Chromebook 4.JPG" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Chromebook 4</h5>
                        <p class="card-text">Intel Celeron N4000 Processor 2.8 GHz (12M Cache, up to 4.7 GHz)</p>
                        <center><a href="#" class="btn btn-primary">Lihat</a></center>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="/image/Kuliah/Lenovo-V130-HEID.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Lenovo-V130-HEID</h5>
                        <p class="card-text">Intel Celeron N4000 Processor 2.8 GHz (12M Cache, up to 4.7 GHz)</p>
                        <center><a href="#" class="btn btn-primary">Lihat</a></center>
                    </div>
                </div>
            </div>
            <div class="komen">
                <p></p>
            </div>
        </div>
    </div>

 <style>
      body{
          background-color: #E9EACE;
      }
  </style>
@endsection
@section('comment')
<section class="comment-outer">
  <div class="comment-inner">
    <div class="head">
      <h1>Silahkan berkomentar disini</h1>
    </div>
    <div class="comment-form">
      <form action="">
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" class="form-control" placeholder="Masukkan nama.." id="">
        </div>
        <div class="form-group">
          <label for="">Komentar</label>
          <textarea name="" id="" cols="20" rows="10" class="form-control"></textarea>
        </div>
       <center> <button type="submit" class="btn btn-primary">Kirim</button> </center>
      </form>
  </div>
</section>
@endsection
