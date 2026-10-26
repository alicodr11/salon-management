@extends('layouts.app1')

@section('title', 'Share Your Feedback | Elegance Salon')

@section('content')

<div class="page-heading">
    <div class="container">
        <span class="eyebrow">
            <span class="eyebrow-line"></span>
            YOUR EXPERIENCE MATTERS
        </span>


    <h1>Your thoughts help us <em>grow.</em></h1>

    <p>
        At Elegance Salon, we believe that listening is an
        important part of providing exceptional care.
        Tell us about your experience and help us make
        every visit more meaningful.
    </p>
</div>


</div>

<div class="feedback-area">
    <div class="container feedback-grid">


    <div class="feedback-introduction">
        <div class="feedback-symbol">
            <i class="bi bi-chat-square-heart"></i>
        </div>

        <span class="eyebrow">A NOTE FROM OUR TEAM</span>

        <h2>We value your voice.</h2>

        <p>
            Whether you enjoyed your visit or feel there is
            something we could do better, we welcome your
            honest feedback.
        </p>

        <p>
            Your suggestions help us understand what matters
            most to our clients, improve our services, and
            create a more welcoming salon experience.
        </p>

        <div class="feedback-promise">
            <i class="bi bi-heart"></i>

            <div>
                <h3>Every opinion counts</h3>

                <p>
                    We appreciate the time you take to help
                    us improve.
                </p>
            </div>
        </div>

        <div class="feedback-promise">
            <i class="bi bi-stars"></i>

            <div>
                <h3>Always learning</h3>

                <p>
                    Your suggestions help us identify
                    opportunities to do better.
                </p>
            </div>
        </div>
    </div>

    <div class="feedback-form-card">

        <div class="form-heading">
            <span class="eyebrow">CUSTOMER FEEDBACK</span>

            <h2>Tell us about your experience.</h2>

            <p>
                A few moments of your time can make a
                meaningful difference.
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

        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf

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

            <div class="form-row">

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

                <div class="form-group">
                    <label for="service">Service Received</label>

                    <select id="service" name="service">
                        <option value="">Select a service</option>

                        <option value="Hair Styling"
                            @selected(old('service') === 'Hair Styling')>
                            Hair Styling
                        </option>

                        <option value="Manicure"
                            @selected(old('service') === 'Manicure')>
                            Manicure
                        </option>

                        <option value="Pedicure"
                            @selected(old('service') === 'Pedicure')>
                            Pedicure
                        </option>

                        <option value="Facial Treatment"
                            @selected(old('service') === 'Facial Treatment')>
                            Facial Treatment
                        </option>

                        <option value="Hair Treatment"
                            @selected(old('service') === 'Hair Treatment')>
                            Hair Treatment
                        </option>

                        <option value="Bridal Styling"
                            @selected(old('service') === 'Bridal Styling')>
                            Bridal Styling
                        </option>

                        <option value="Other"
                            @selected(old('service') === 'Other')>
                            Other
                        </option>
                    </select>

                    @error('service')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            <div class="form-group">
                <label>How would you rate your experience? *</label>

                <div class="rating-options">

                    @foreach ([5 => 'Excellent', 4 => 'Very Good', 3 => 'Good', 2 => 'Fair', 1 => 'Poor'] as $value => $label)

                        <label class="rating-option">
                            <input
                                type="radio"
                                name="rating"
                                value="{{ $value }}"
                                @checked((string) old('rating') === (string) $value)
                                required
                            >

                            <span class="rating-choice">
                                <span class="rating-number">{{ $value }}</span>
                                <span class="rating-label">{{ $label }}</span>
                            </span>
                        </label>

                    @endforeach

                </div>

                @error('rating')
                    <small class="field-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Your Feedback *</label>

                <textarea
                    id="message"
                    name="message"
                    rows="5"
                    maxlength="3000"
                    placeholder="What did you enjoy? What could we improve?"
                    required
                >{{ old('message') }}</textarea>

                @error('message')
                    <small class="field-error">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="button button-dark form-submit">
                Submit Feedback
                <i class="bi bi-arrow-right"></i>
            </button>

            <p class="form-privacy">
                <i class="bi bi-shield-check"></i>
                Thank you for helping us improve our services.
            </p>

        </form>

    </div>

</div>


</div>

@endsection
