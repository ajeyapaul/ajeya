@extends('theme.layouts.site')

@section('hero')
<section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.svg') }}" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>Welcome to HeroBiz</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.svg') }}" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>At vero eos et accusamus</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
            <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item active">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.svg') }}" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>Temporibus autem quibusdam</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
            <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"><li data-bs-target="#hero" data-bs-slide-to="0" class=""></li><li data-bs-target="#hero" data-bs-slide-to="1" class=""></li><li data-bs-target="#hero" data-bs-slide-to="2" class="active" aria-current="true"></li></ol>

  </section>
@endsection


@section('content')

@include('theme.site.partials.featured-services')

@include('theme.site.partials.about')

@include('theme.site.partials.clients')

@include('theme.site.partials.cta')

@include('theme.site.partials.onfocus')

@include('theme.site.partials.features')

@include('theme.site.partials.services')

@include('theme.site.partials.testimonials')

@include('theme.site.partials.pricing')

@include('theme.site.partials.faq')

@include('theme.site.partials.portfolio')

@include('theme.site.partials.team')

@include('theme.site.partials.blog')

@include('theme.site.partials.contact')

@endsection
