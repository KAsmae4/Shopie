@extends('layouts.frontend')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="mb-5">
  <div class="container">
    <div class="hero__item">
    <div class="hero__text">
        <span>DERNIERS GADGETS</span>
        <h2>Explorez les Dernières<br />Collections d'Électronique</h2>
        <p>Découvrez la technologie de pointe à portée de main.</p>
        <a href="#" class="primary-btn">SHOP NOW</a>
      </div>
      <video class="hero__video hero__item set-bg" autoplay muted loop>
        <source src="{{ asset('frontend/img/hero/banner.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      

    </div>
  </div>
</section>

<!-- Breadcrumb Section End -->

<!-- Categories Section Begin -->
<section class="categories">
  <div class="container">
    <div class="row">
      <div class="categories__slider owl-carousel">
        @foreach($menu_categories as $menu_category)
        <div class="col-lg-3">
          <div class="categories__item set-bg" data-setbg="{{ $menu_category->photo->getUrl() }}">
            <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></h5>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Produit Vedette</h2>
        </div>
      </div>
    </div>
    <div class="row featured__filter" id="product-list">
    </div>
  </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
          <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="" />
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
          <img src="{{ asset('frontend/img/banner/banner-2.jpg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner End -->
@endsection