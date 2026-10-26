@extends('layouts.app1')

@section('title', 'Contact Us | Elegance Salon')

@section('content')

<div class="page-heading">
    <div class="container">
        <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WE WOULD LOVE TO HEAR FROM YOU
        </span>

    <h1>Let's start a <em>conversation.</em></h1>

    <p>
        Have a question about our services, need help choosing a treatment,
        or want to plan your next visit? Send us a message.
        Our team will be happy to help.
    </p>
</div>


</div>

<div class="contact-area">
    <div class="container contact-grid">

    <div class="contact-information">
        <span class="eyebrow">GET IN TOUCH</span>

        <h2>We're here to help.</h2>

        <p class="contact-intro">
            Every great experience begins with a conversation.
            Tell us what you need, and we'll help you find the
            right service for you.
        </p>

        <div class="contact-detail">
            <div class="contact-icon">
                <i class="bi bi-geo-alt"></i>
            </div>

            <div>
                <h3>Visit Our Salon</h3>
                <p>Karachi, Pakistan</p>
                <small>Replace with your salon's complete address.</small>
            </div>
        </div>

        <div class="contact-detail">
            <div class="contact-icon">
                <i class="bi bi-telephone"></i>
            </div>

            <div>
                <h3>Call Us</h3>
                <p>+92 XXX XXXXXXX</p>
                <small>Replace with your official contact number.</small>
            </div>
        </div>

        <div class="contact-detail">
            <div class="contact-icon">
                <i class="bi bi-envelope"></i>
            </div>

            <div>
                <h3>Email Us</h3>
                <p>hello@example.com</p>
                <small>Replace with your official email address.</small>
            </div>
        </div>

        <div class="contact-note">
            <i class="bi bi-chat-heart"></i>

            <p>
                Not sure which service is right for you?
                Leave us a message and we'll help you explore
                your options.
            </p>
        </div>
    </div>

    <div class="contact-form-card">

        <div class="form-heading">
            <span class="eyebrow">SEND US A MESSAGE</span>

            <h2>How can we assist you?</h2>

            <p>
                Complete the form below and tell us a little
                about how we can help.
            </p>
        </div>

        @if (session('success'))
            <div class="form-alert form-alert-success" role="status">
                <i class="bi bi-check-circle"></i>
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="form-alert form-alert-error" role="alert">
                Please check the form and correct the highlighted errors.
            </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST">
            @csrf

            <div class="form-row">

                <div class="form-group">
                    <label for="name">Full Name *</label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        maxlength="100"
                        autocomplete="name"
                        required
                    >

                    @error('name')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="you@example.com"
                        maxlength="255"
                        autocomplete="email"
                        required
                    >

                    @error('email')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            <div class="form-row">

                <div class="form-group">
                    <label for="phone">Phone Number</label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        value="{{ old('phone') }}"
                        placeholder="+92 XXX XXXXXXX"
                        maxlength="25"
                        autocomplete="tel"
                    >

                    @error('phone')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="subject">Subject *</label>

                    <select id="subject" name="subject" required>
                        <option value="">Select a subject</option>

                        <option value="General Inquiry"
                            @selected(old('subject') === 'General Inquiry')>
                            General Inquiry
                        </option>

                        <option value="Services and Prices"
                            @selected(old('subject') === 'Services and Prices')>
                            Services and Prices
                        </option>

                        <option value="Appointment Inquiry"
                            @selected(old('subject') === 'Appointment Inquiry')>
                            Appointment Inquiry
                        </option>

                        <option value="Other"
                            @selected(old('subject') === 'Other')>
                            Other
                        </option>
                    </select>

                    @error('subject')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            <div class="form-group">
                <label for="message">Your Message *</label>

                <textarea
                    id="message"
                    name="message"
                    rows="5"
                    maxlength="3000"
                    placeholder="Tell us how we can help you..."
                    required
                >{{ old('message') }}</textarea>

                @error('message')
                    <small class="field-error">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="button button-dark form-submit">
                Send Message
                <i class="bi bi-arrow-right"></i>
            </button>

            <p class="form-privacy">
                <i class="bi bi-shield-check"></i>
                Your information will be handled responsibly.
            </p>

        </form>
    </div>

</div>


</div>

<div class="contact-bottom">
    <div class="container contact-bottom-content">
        <div>
            <span class="eyebrow">A LITTLE TIME FOR YOURSELF</span>
            <h2>Your next feel-good moment awaits.</h2>
            <p>
                Explore our beauty services and discover an experience
                designed around your comfort and preferences.
            </p>
        </div>

    <a href="{{ route('services.index') }}" class="button button-light">
        Explore Services
        <i class="bi bi-arrow-up-right"></i>
    </a>
</div>


</div>

@endsection
