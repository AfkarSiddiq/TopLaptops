@extends('template')
@section('title', 'TopLaptops | Bisnis')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Rekomendasi Laptop Bisnis</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="/image/Bisnis/dell latitude 3520.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">dell latitude 3520</h5>
                        <p class="card-text">Intel Celeron N4000 Processor 2.8 GHz (12M Cache, up to 4.7 GHz)</p>
                        <a href="#" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="/image/Bisnis/hp elitbook 840.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">hp elitbook 840</h5>
                        <p class="card-text">Intel Celeron N4000 Processor 2.8 GHz (12M Cache, up to 4.7 GHz)</p>
                        <a href="#" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="/image/Bisnis/lenovo slim 7 carbon.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">lenovo slim 7 carbon</h5>
                        <p class="card-text">Intel Celeron N4000 Processor 2.8 GHz (12M Cache, up to 4.7 GHz)</p>
                        <a href="#" class="btn btn-primary">Lihat</a>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="/image/Bisnis/lenovo thinkpad x1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">lenovo thinkpad x1</h5>
                        <p class="card-text">Intel Celeron N4000 Processor 2.8 GHz (12M Cache, up to 4.7 GHz)</p>
                        <a href="#" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><hr>
 
 
 <style>
      body{
          background-color: #921449;
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