@extends('layouts.main')

@section('container')
<div class="card bg-dark text-white border-0 hero-section-img">
  {{-- <img src="/img/foto-bareng.jpg" class="card-img" alt="foto"> --}}
  <div class="card-img-overlay img-over d-flex align-items-center justify-content-center" style="flex-direction: column">
    <h1 class="card-title" style="font-size: 4em">MEMBERITAKAN INJIL SAMPAI KE GARIS AKHIR</h1>
    <p class="card-text fw-lighter fs-3" style="">Kisah Para Rasul 20:24</p>
  </div>
</div>

<section class="opening py-5" style="background-color: gainsboro">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-3">
        <img src="/img/tentang-kami.jpg" alt="opening-img" class="img-fluid">
      </div>
      <div class="col-6">
        <h4>Kata Pembukaan</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, fugiat?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi delectus iste debitis accusantium. Quae aut autem eius, animi assumenda aperiam, unde id incidunt omnis modi vel magni repudiandae veniam blanditiis ad, nostrum eos laborum minima maiores. Odit illum reiciendis a vero sequi voluptatibus non, delectus quibusdam, nobis minima obcaecati magnam?</p>
      </div>
    </div>
  </div>
</section>

<section class="activities py-5">
  <div class="container text-center">
    <h1 class="pb-4">What We Do</h1>
    <div class="row justify-content-center">
      @foreach ($activities as $activity)
      <div class="col-3">
        <div class="card">
          <img src="https://source.unsplash.com/500x400?{{ $activity->name }}" class="card-img-top" alt="{{ $activity->name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $activity->name }}</h5>
            <p class="card-text">{{ $activity->excerpt }}</p>
            <a href="/about/activities/{{ $activity->slug }}" class="btn btn-primary">read more..</a>
          </div>
        </div>
      </div>  
          
      @endforeach
      </div>
    </div>
  </div>
</section>
@endsection