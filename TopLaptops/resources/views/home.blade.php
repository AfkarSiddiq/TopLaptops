@extends('template')
@section('title', 'TopLaptops | Home')
@section('content')
<div class="head-fluid">
    <div class="littlelogo">
        <div class="container">
            <img src="/image/TopLaptops2.png" alt="logo2">
        </div>
    </div>
    <div class="opening">
        <center>
            <br>
        <h2>Temukan pilihan Laptop terbaik berdasarkan tiap kategori</h2>
        <br><br><br>
        <p>TopLaptops memberikan rekomendasi laptop untuk orang-orang yang ingin mencari<br> laptop sesuai kebutuhannya tanpa bimbang.</p>
        <br><br><br>
        <p>Lihat Rekomendasi ---></p><br>
        <a href="/" class="btn btn-primary">Rekomendasi</a>
        <br><br><br><br><br>
    </center>
    </div>
</div>



<style>
    body{
        background-color: #1F233E;
    }
    .container{
        padding: 7px;
        top: auto;
        bottom: auto;
    }

    .opening{
        color: white;
        background-image: url("/image/background.png");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .opening p{
        font-size: 30px;
    }
    .opening h2{
        font-size: 48px;
    }
</style>
@endsection