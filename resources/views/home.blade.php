@extends('layouts.main')

@section('content')
<main>
  <div class="container">
    <div class="home-page d-flex">
      <div id="carouselExampleIndicators" class="carousel slide w-50" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner rounded">
        <div class="carousel-item active">
          <img src="img/adv-webinar-1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/adv-webinar-1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/adv-webinar-1.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
      </div>
    </div>
  </div>

  <div class="container">
    <h1>ABOUT US</h1>
  </div>
</main>
<script>
  $('.carousel').carousel({
  interval: 2000
})
</script>
@endsection