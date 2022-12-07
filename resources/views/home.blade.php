
@extends('layouts.main')

@section('container')
<!--  event  terbaru-->
<body class="header home mt-3s" id="beranda">
      <div class="container mb-5">
        <h1 class="event text-center " >Event Terbaru</h1>
      </div>
         <div class="slider-event">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/pp.jpg" class="d-block w-100" alt="pp">
    </div>
    <div class="carousel-item">
      <img src="img/pp.jpg" class="d-block w-100" alt="pp">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
<!-- event terbaru end -->

<!-- daftar event -->
<section class="daftar-event m-5">
  <h1 class=" text-center">Daftar Event</h1>
   <div class="nav-list m-5">
    <nav class="mynav">
      <ul>
        <li><a href="">Bisnis </a></li>
        <li><a href="">Teknologi</a></li>
        <li><a href="">Marketing</a></li>
        <li><a href="">Pertanian</a></li>
      </ul>
    </nav>
    <span class="target"></span>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="img/pp.jpg" class="card-img"  alt="pp">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/pp.jpg" class="card-img" alt="pp">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/pp.jpg" class="card-img" alt="pp">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/pp.jpg" class="card-img" alt="pp">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/pp.jpg" class="card-img" alt="pp">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/pp.jpg" class="card-img" alt="pp">
        </div>
      </div>
    </div>
</section>
<!-- daftar event end -->

<!-- Galeri Event -->
<section class="daftar-event m-5">
  <h1 class=" text-center mb-5">Daftar Event</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="img/pp.jpg" class="card-img"  alt="pp">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/pp.jpg" class="card-img" alt="pp">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/pp.jpg" class="card-img" alt="pp">
        </div>
      </div>
    </div>
</section>
<!-- Galeri Event end -->

<!-- faq -->
<section id="section" class="text-center" >
<div class="section">
    <h2>APAKAH ADA YANG INGIN DITANYAKAN ?</h2>
    <div class="faq">
        <h1>Beberapa pertanyaan yang sering muncul</h1>
        <div class="faq-min">
            <h2>bagaimana cara mendaftar event</h2>
            <hr width=50%>
        </div>
    </div>
</div>
</section>



<!-- faq end -->

</body>



@endsection