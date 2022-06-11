@extends('theme.layouts.site')

@section('hero')
<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out"> <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.svg') }}" class="img-fluid animated">
        <h2>Welcome to <span>HeroBiz</span></h2>
        <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
        <div class="d-flex"> <a href="#about" class="btn-get-started scrollto">Get Started</a> <a
                href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                class="glightbox btn-watch-video d-flex align-items-center"><i
                    class="bi bi-play-circle"></i><span>Watch Video</span></a></div>
    </div>
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
