@extends('layouts.app1')

@section('title', 'Our Services | Elegance Salon')

@section('content')

<div class="services-preview">
    <div class="container">


    <div class="section-heading">
        <div>
            <span class="eyebrow">
                <span class="eyebrow-line"></span>
                OUR SERVICES
            </span>

            <h2>Care designed around you.</h2>

            <p>
                Explore our range of beauty services.
                Prices shown are starting prices and can be
                adjusted to suit your project.
            </p>
        </div>
    </div>

    <div class="service-grid">

        @foreach ($services as $service)
            <article class="service-card">

                <div class="service-icon">
                    <i class="bi bi-stars"></i>
                </div>

                <span class="service-label">
                    {{ $service['category'] }}
                </span>

                <h3>{{ $service['name'] }}</h3>

                <p>{{ $service['description'] }}</p>

                <div class="service-card-bottom">
                    <span class="service-price">
                        From Rs. {{ number_format($service['price']) }}
                    </span>

                    <a
                        href="{{ route('contact') }}"
                        aria-label="Enquire about {{ $service['name'] }}"
                    >
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>

            </article>
        @endforeach

    </div>

</div>
```

</div>

<div class="booking-banner">
    <div class="container booking-content">
        <div>
            <span class="eyebrow">HAVE A QUESTION?</span>
            <h2>Let us help you choose.</h2>
            <p>Our team can help you learn more about our services.</p>
        </div>


    <a href="{{ route('contact') }}" class="button button-light">
        Contact Us
        <i class="bi bi-arrow-up-right"></i>
    </a>
</div>


</div>

@endsection
