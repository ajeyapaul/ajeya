@extends('layouts.site')

@section('hero')
<section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative aos-init aos-animate" data-aos="zoom-out">
      <h2>Welcome to <span>HeroBiz</span></h2>
      <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section>
@endsection


@section('content')

@include('site.partials.featured-services')

@include('site.partials.about')

@include('site.partials.clients')

@include('site.partials.cta')

@include('site.partials.onfocus')

@include('site.partials.features')

@include('site.partials.services')

@include('site.partials.testimonials')

@include('site.partials.pricing')

@include('site.partials.faq')

@include('site.partials.portfolio')

@include('site.partials.team')

@include('site.partials.blog')

@include('site.partials.contact')

@endsection
