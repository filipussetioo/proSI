@extends('layouts.main')

@section('content')
<div id="carouselExampleControls" class="carousel slide justify-content-center" data-bs-ride="carousel">
    <div class="carousel-inner">
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection