<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <head>
        <meta charset="utf-8" />
        
    </head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<style>
    .thesis-section {
      gap: 20px;
      display: flex;
    }
    .image-column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 50%;
      margin-left: 0;
    }
    .image-wrapper {
      display: flex;
      flex-direction: column;
      justify-content: start;
    }
    .thesis-image {
      aspect-ratio: 1.13;
      object-fit: contain;
      object-position: center;
      width: 100%;
    }
    .content-column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 50%;
      margin-left: 20px;
    }
    .content-wrapper {
      display: flex;
      margin-top: 15px;
      flex-grow: 1;
      flex-direction: column;
      font-family: Inter, sans-serif;
      justify-content: end;
    }
    .text-container {
      border-radius: 0;
      display: flex;
      max-width: 100%;
      width: 567px;
      flex-direction: column;
    }
    .heading {
      color: var(--Main-color, #0a2472);
      font-size: 48px;
      font-weight: 700;
      line-height: 72px;
      text-transform: capitalize;
    }
    .heading-highlight {
      color: rgba(10, 36, 114, 1);
    }
    .description {
      color: #000;
      text-align: justify;
      font-size: 22px;
      font-weight: 400;
      line-height: 24px;
      margin: 41px 26px 0 0;
    }
    .button-wrapper {
      border-radius: 8px;
      display: flex;
      margin-top: 43px;
      width: 214px;
      max-width: 100%;
      flex-direction: column;
      font-size: 22px;
      color: #fff;
      font-weight: 400;
      line-height: 1;
    }
    .order-button {
      justify-content: center;
      align-items: center;
      border-radius: 8px;
      border: 1px solid var(--Main-color, #0a2472);
      background: var(--Main-color, #0a2472);
      display: flex;
      gap: 8px;
      padding: 18px 24px;
      cursor: pointer;
    }
    .button-text {
      border-radius: 0;
      align-self: stretch;
      width: 134px;
      margin: auto 0;
    }
    .button-icon {
      aspect-ratio: 1;
      object-fit: contain;
      object-position: center;
      width: 24px;
      align-self: stretch;
      margin: auto 0;
    }
    @media (max-width: 991px) {
      .thesis-section {
        flex-direction: column;
        align-items: stretch;
        gap: 0;
      }
      .image-column {
        width: 100%;
      }
      .image-wrapper {
        max-width: 100%;
        margin-top: 40px;
      }
      .thesis-image {
        max-width: 100%;
      }
      .content-column {
        width: 100%;
      }
      .content-wrapper {
        max-width: 100%;
        margin-top: 40px;
      }
      .heading {
        max-width: 100%;
        font-size: 40px;
        line-height: 67px;
      }
      .description {
        max-width: 100%;
        margin: 40px 10px 0 0;
      }
      .button-wrapper {
        margin-top: 40px;
      }
      .order-button {
        padding: 0 20px;
      }
    }
    .visually-hidden {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0;
    }
  </style>
  
  <div class="thesis-section">
    <div class="image-column">
      <div class="image-wrapper">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e7fbcc8d4960574e4e581e47601122d8276b870758fa66ed2b0c3dd99fec8350?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" alt="Thesis printing process illustration" class="thesis-image" />
      </div>
    </div>
    <div class="content-column">
      <div class="content-wrapper">
        <div class="text-container">
          <h1 class="heading">
            Streamline your
            <span class="heading-highlight">Thesis Printing Process</span>
            and Enjoy top-quality results effortlessly
          </h1>
          <p class="description">
            Providing high-quality thesis printing services tailored to your needs, with options for customization and affordable pricing, ensuring your academic work is presented at its best. Experience hassle-free thesis printing with a user-friendly platform designed to deliver exceptional quality and convenience, leaving a lasting impression on your academic achievements.
          </p>
        </div>
        <div class="button-wrapper">
          <button class="order-button" tabindex="0">
            <span class="button-text">Order Thesis</span>
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e95ce6074de54ae5f1f245bd474569d9abdfca87b26832b5b1679a45db80265?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" alt="" class="button-icon" />
          </button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <style>
    .order-process {
      display: flex;
      flex-direction: column;
    }
  
    .section-header {
      align-self: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #000;
      text-transform: capitalize;
      justify-content: start;
      font: 600 40px/1.3 Inter, sans-serif;
    }
  
    .header-underline {
      background-color: #0a2472;
      min-height: 3px;
      margin-top: 10px;
      width: 152px;
      max-width: 100%;
      border: 3px solid rgba(10, 36, 114, 1);
    }
  
    .process-container {
      display: flex;
      margin-top: 100px;
      width: 100%;
      flex-direction: column;
      align-items: center;
      justify-content: start;
    }
  
    @media (max-width: 991px) {
      .process-container {
        max-width: 100%;
        margin-top: 40px;
      }
    }
  
    .steps-wrapper {
      display: flex;
      width: 100%;
      flex-direction: column;
    }
  
    @media (max-width: 991px) {
      .steps-wrapper {
        max-width: 100%;
      }
    }
  
    .steps-row {
      display: flex;
      gap: 16px;
      justify-content: start;
      flex-wrap: wrap;
    }
  
    @media (max-width: 991px) {
      .steps-row {
        max-width: 100%;
      }
    }
  
    .step-card-wrapper {
      border-radius: 8px;
      display: flex;
      min-width: 240px;
      flex-direction: column;
      width: 308px;
      flex: 1; /* This ensures cards grow equally */
    }
  
    .step-card {
      align-items: start;
      border-radius: 8px;
      border: 1px solid var(--Gray, #c6c6c6);
      display: flex;
      min-height: 480px;
      gap: 10px;
      justify-content: start;
      padding: 24px 24px 72px;
      height: 480px; /* Ensures all cards have equal height */
      box-sizing: border-box;
    }
  
    @media (max-width: 991px) {
      .step-card {
        padding: 0 20px;
      }
    }
  
    .card-content {
      display: flex;
      min-width: 240px;
      width: 100%;
      flex-direction: column;
      justify-content: start;
    }
  
    .icon-wrapper {
      align-self: center;
      display: flex;
      width: 100%;
      flex-direction: column;
    }
  
    .step-icon {
      aspect-ratio: 1;
      object-fit: contain;
      object-position: center;
      width: 100%;
    }
  
    .text-content {
      display: flex;
      margin-top: 24px;
      width: 100%;
      flex-direction: column;
      font-family: Inter, sans-serif;
      color: #000;
      justify-content: start;
    }
  
    .step-title {
      font-size: 32px;
      font-weight: 500;
      line-height: 1;
      text-transform: capitalize;
      align-self: center;
    }
  
    .step-description {
      text-align: center;
      font-size: 22px;
      font-weight: 400;
      line-height: 24px;
      margin-top: 12px;
    }
  
    .second-row {
      display: flex;
      margin-top: 127px;
      width: 956px;
      max-width: 100%;
      flex-direction: column;
    }
  
    @media (max-width: 991px) {
      .second-row {
        margin-top: 40px;
      }
    }
  
  </style>
  
  
  <div class="order-process">
    <div class="section-header">
      <div>How You Can order</div>
      <div class="header-underline"></div>
    </div>
    <div class="process-container">
      <div class="steps-wrapper">
        <div class="steps-row">
          <div class="step-card-wrapper">
            <div class="step-card">
              <div class="card-content">
                <div class="icon-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e0ad85ca2201d0e1286ae0f77a8e0f0ccd782d71542649b4087c006f364effce?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="step-icon" alt="Customization options icon"/>
                </div>
                <div class="text-content">
                  <div class="step-title">Customization</div>
                  <div class="step-description">Select paper size, color, quantity, pickup/delivery</div>
                </div>
              </div>
            </div>
          </div>
          <div class="step-card-wrapper">
            <div class="step-card">
              <div class="card-content">
                <div class="icon-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9ac1784726c1c1c9db8285c788f8c0ec1204d931e9b9d33c8f1eeaa1c32c9382?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="step-icon" alt="File upload icon"/>
                </div>
                <div class="text-content">
                  <div class="step-title">Upload</div>
                  <div class="step-description">Upload your thesis file(s) in the supported format (PDF / google drive link)</div>
                </div>
              </div>
            </div>
          </div>
          <div class="step-card-wrapper">
            <div class="step-card">
              <div class="card-content">
                <div class="icon-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/be829a6d191c6dc7bf950174a1371ef21b7fd73e332ff7605663f802cd87550e?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="step-icon" alt="Review details icon"/>
                </div>
                <div class="text-content">
                  <div class="step-title">Review Details</div>
                  <div class="step-description">Verify the uploaded file(s) and selected printing options and estimated cost</div>
                </div>
              </div>
            </div>
          </div>
          <div class="step-card-wrapper">
            <div class="step-card">
              <div class="card-content">
                <div class="icon-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b827c7974a059acd8af0fe4d55c0aaf2814a14207c3380d62fd8af35dc69a784?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="step-icon" alt="Payment method icon"/>
                </div>
                <div class="text-content">
                  <div class="step-title">Payment Method</div>
                  <div class="step-description">Choose preferred payment method which are QR Code payment or Cash payment</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="second-row">
        <div class="steps-row">
          <div class="step-card-wrapper">
            <div class="step-card">
              <div class="card-content">
                <div class="icon-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c83d68120cb685f43f32907ec034915bb3ff1771c547530111492df542f8d7ea?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="step-icon" alt="Submit order icon"/>
                </div>
                <div class="text-content">
                  <div class="step-title">Submit Order</div>
                  <div class="step-description">Confirm your order by clicking the Submit Order button. You will receive an order confirmation and a unique tracking ID</div>
                </div>
              </div>
            </div>
          </div>
          <div class="step-card-wrapper">
            <div class="step-card">
              <div class="card-content">
                <div class="icon-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/90394c6eef90c605fc45910f5ad94c809a2a8bd281d78b29740ccaa06886473d?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="step-icon" alt="Track order icon"/>
                </div>
                <div class="text-content">
                  <div class="step-title">Track Order</div>
                  <div class="step-description">Go to the Order Tracking section to view your order status</div>
                </div>
              </div>
            </div>
          </div>
          <div class="step-card-wrapper">
            <div class="step-card">
              <div class="card-content">
                <div class="icon-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2cfec6b4d46d73d8bd4595348ee2aee045dff9bce6f1c9f37200681fd9a63ce7?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="step-icon" alt="Delivery pickup icon"/>
                </div>
                <div class="text-content">
                  <div class="step-title">Delivery/Pickup</div>
                  <div class="step-description">Once the status changes to "Ready to pickup", visit the shop to collect the thesis or wait for the delivery to arrive</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <style>
    .visually-hidden {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0;
    }
    .reviews-container {
      display: flex;
      flex-direction: column;
    }
    .reviews-header {
      align-self: center;
      display: flex;
      width: 369px;
      max-width: 100%;
      flex-direction: column;
      color: #000;
      text-transform: capitalize;
      justify-content: start;
      font: 600 40px/1.3 Inter, sans-serif;
    }
    .header-wrapper {
      display: flex;
      width: 100%;
      flex-direction: column;
      justify-content: start;
    }
    .title-wrapper {
      border-radius: 0;
      display: flex;
      width: 100%;
      flex-direction: column;
    }
    .header-icon {
      object-fit: contain;
      object-position: center;
      width: 152px;
      border-radius: 0;
      align-self: center;
      margin-top: 10px;
      max-width: 100%;
    }
    .reviews-grid {
      display: flex;
      margin-top: 107px;
      width: 100%;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    @media (max-width: 991px) {
      .reviews-grid {
        max-width: 100%;
        margin-top: 40px;
      }
    }
    .reviews-wrapper {
      display: flex;
      width: 100%;
      flex-direction: column;
    }
    @media (max-width: 991px) {
      .reviews-wrapper {
        max-width: 100%;
      }
    }
    .reviews-row {
  display: flex;
  align-items: center;
  justify-content: center; /* Centers the review cards */
  gap: 40px 56px;
  flex-wrap: wrap;
}

    @media (max-width: 991px) {
      .reviews-row {
        max-width: 100%;
      }
    }
    .review-card {
      border-radius: 8px;
      display: flex;
      min-width: 240px;
      flex-direction: column;
      font-family: Inter, sans-serif;
      width: 565px;
    }
    @media (max-width: 991px) {
      .review-card {
        max-width: 100%;
      }
    }
    .review-content {
      border-radius: 8px;
      border: 1px solid var(--Gray, #c6c6c6);
      display: flex;
      flex-direction: column;
      justify-content: start;
      padding: 24px;
    }
    @media (max-width: 991px) {
      .review-content {
        max-width: 100%;
        padding: 0 20px;
      }
    }
    .content-wrapper {
      display: flex;
      width: 100%;
      flex-direction: column;
    }
    @media (max-width: 991px) {
      .content-wrapper {
        max-width: 100%;
      }
    }
    .user-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    @media (max-width: 991px) {
      .user-info {
        max-width: 100%;
      }
    }
    .user-header {
      display: flex;
      width: 230px;
      max-width: 100%;
      flex-direction: column;
      font-size: 24px;
      color: rgba(0, 0, 0, 1);
      font-weight: 500;
      line-height: 2;
    }
    .user-profile {
      display: flex;
      align-items: center;
      gap: 26px;
      justify-content: start;
    }
    .profile-image {
      aspect-ratio: 1;
      object-fit: contain;
      object-position: center;
      width: 60px;
      align-self: stretch;
      margin: auto 0;
    }
    .username {
      border-radius: 0;
      align-self: stretch;
      width: 144px;
      margin: auto 0;
    }
    .review-text {
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 6;
      text-overflow: ellipsis;
      border-radius: 0;
      margin-top: 27px;
      width: 100%;
      font-size: 22px;
      color: #000;
      font-weight: 400;
      line-height: 24px;
    }
    @media (max-width: 991px) {
      .review-text {
        max-width: 100%;
      }
    }
    .rating-container {
      display: flex;
      margin-top: 18px;
      width: 220px;
      max-width: 100%;
      flex-direction: column;
      font-size: 22px;
      color: #000;
      font-weight: 400;
      line-height: 1;
    }
    .rating-wrapper {
      display: flex;
      align-items: start;
      gap: 8px;
      justify-content: start;
    }
    .rating-stars {
      aspect-ratio: 5.85;
      object-fit: contain;
      object-position: center;
      width: 140px;
    }
    .add-review {
  display: flex;
  margin-top: 38px;
  width: 227px;
  max-width: 100%;
  flex-direction: column;
  color: #000;
  letter-spacing: var(--Headline-Small-Tracking, 0px);
  justify-content: center; /* Centers the "Add Review" section */
  font: 400 var(--Headline-Medium-Size, 28px) / var(--Headline-Medium-Line-Height, 36px) var(--Headline-Medium-Font, Roboto);
  align-items: center; /* Centers the text and icon */
}
    .add-review-wrapper {
      display: flex;
      width: 100%;
      flex-direction: column;
    }
    .add-review-content {
      display: flex;
      align-items: start;
      gap: 26px;
      justify-content: start;
    }
    .add-review-icon {
      aspect-ratio: 1.06;
      object-fit: contain;
      object-position: center;
      width: 38px;
    }
  </style>
  
  <div class="reviews-container">
    <div class="reviews-header">
      <div class="header-wrapper">
        <div class="title-wrapper">
          <div>Customer's Review</div>
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/58ced184e42a2fb1aa5d107bd1ec74f922910c7e359d6a29a470a08679fd6b85?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="header-icon" alt="Customer Reviews Header Icon" />
        </div>
      </div>
    </div>
    
    <div class="reviews-grid">
      <div class="reviews-wrapper">
        <div class="reviews-row">
          <!-- Review Card 1 -->
          <div class="review-card">
            <div class="review-content">
              <div class="content-wrapper">
                <div class="user-info">
                  <div class="user-header">
                    <div class="user-profile">
                      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/77a5b8d7c0f8f5e49bca3e1c1291d08174164d90ca291f93dd5040b7421e7274?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="profile-image" alt="Andia Jorida's Profile Picture" />
                      <div class="username">Andia jorida</div>
                    </div>
                  </div>
                  <div class="review-text">
                    My experience at your restaurant was truly excellent. The food was absolutely delicious - every dish was perfectly cooked and bursting with flavor. But what really impressed me was the service. Your staff was attentive, friendly which make me feel want to be there again.
                  </div>
                </div>
              </div>
              <div class="rating-container">
                <div class="rating-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e71fe67891bc34f267846e32a5fc2000e3cb0f328bdf428f4c22574df53d8bcd?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="rating-stars" alt="5 Star Rating" />
                  <div>5 stars</div>
                </div>
              </div>
            </div>
          </div>
  
         <!-- Review Card 1 -->
         <div class="review-card">
            <div class="review-content">
              <div class="content-wrapper">
                <div class="user-info">
                  <div class="user-header">
                    <div class="user-profile">
                      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/77a5b8d7c0f8f5e49bca3e1c1291d08174164d90ca291f93dd5040b7421e7274?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="profile-image" alt="Andia Jorida's Profile Picture" />
                      <div class="username">Andia jorida</div>
                    </div>
                  </div>
                  <div class="review-text">
                    My experience at your restaurant was truly excellent. The food was absolutely delicious - every dish was perfectly cooked and bursting with flavor. But what really impressed me was the service. Your staff was attentive, friendly which make me feel want to be there again.
                  </div>
                </div>
              </div>
              <div class="rating-container">
                <div class="rating-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e71fe67891bc34f267846e32a5fc2000e3cb0f328bdf428f4c22574df53d8bcd?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="rating-stars" alt="5 Star Rating" />
                  <div>5 stars</div>
                </div>
              </div>
            </div>
          </div>
           <!-- Review Card 1 -->
           <div class="review-card">
            <div class="review-content">
              <div class="content-wrapper">
                <div class="user-info">
                  <div class="user-header">
                    <div class="user-profile">
                      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/77a5b8d7c0f8f5e49bca3e1c1291d08174164d90ca291f93dd5040b7421e7274?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="profile-image" alt="Andia Jorida's Profile Picture" />
                      <div class="username">Andia jorida</div>
                    </div>
                  </div>
                  <div class="review-text">
                    My experience at your restaurant was truly excellent. The food was absolutely delicious - every dish was perfectly cooked and bursting with flavor. But what really impressed me was the service. Your staff was attentive, friendly which make me feel want to be there again.
                  </div>
                </div>
              </div>
              <div class="rating-container">
                <div class="rating-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e71fe67891bc34f267846e32a5fc2000e3cb0f328bdf428f4c22574df53d8bcd?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="rating-stars" alt="5 Star Rating" />
                  <div>5 stars</div>
                </div>
              </div>
            </div>
          </div>
           <!-- Review Card 1 -->
           <div class="review-card">
            <div class="review-content">
              <div class="content-wrapper">
                <div class="user-info">
                  <div class="user-header">
                    <div class="user-profile">
                      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/77a5b8d7c0f8f5e49bca3e1c1291d08174164d90ca291f93dd5040b7421e7274?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="profile-image" alt="Andia Jorida's Profile Picture" />
                      <div class="username">Andia jorida</div>
                    </div>
                  </div>
                  <div class="review-text">
                    My experience at your restaurant was truly excellent. The food was absolutely delicious - every dish was perfectly cooked and bursting with flavor. But what really impressed me was the service. Your staff was attentive, friendly which make me feel want to be there again.
                  </div>
                </div>
              </div>
              <div class="rating-container">
                <div class="rating-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e71fe67891bc34f267846e32a5fc2000e3cb0f328bdf428f4c22574df53d8bcd?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="rating-stars" alt="5 Star Rating" />
                  <div>5 stars</div>
                </div>
              </div>
            </div>
          </div>
  
    <div class="add-review">
      <div class="add-review-wrapper">
        <div class="add-review-content">
          <div>Add A review</div>
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8511df958a2acbdef26de0c94ee9c9333ab121d3c3752c6d11ab2a07126fe299?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b" class="add-review-icon" alt="Add Review Icon" />
        </div>
      </div>
    </div>
  </div>
  <style>
    .visually-hidden {
      clip: rect(0 0 0 0);
      clip-path: inset(50%);
      height: 1px;
      overflow: hidden;
      position: absolute;
      white-space: nowrap;
      width: 1px;
    }
    .main-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .header-container {
      display: flex;
      width: 471px;
      max-width: 100%;
      flex-direction: column;
      color: #000;
      text-transform: capitalize;
      justify-content: start;
      font: 600 40px/1.3 Inter, sans-serif;
    }
    .header-wrapper {
      display: flex;
      width: 100%;
      flex-direction: column;
      align-items: center;
      justify-content: start;
    }
    @media (max-width: 991px) {
      .header-wrapper {
        max-width: 100%;
      }
    }
    .company-title {
      color: #000;
      text-transform: capitalize;
      font: 600 40px/1.3 Inter, sans-serif;
    }
    @media (max-width: 991px) {
      .company-title {
        max-width: 100%;
      }
    }
    .header-underline {
      background-color: #0a2472;
      min-height: 3px;
      margin-top: 10px;
      width: 152px;
      max-width: 100%;
      border: 3px solid rgba(10, 36, 114, 1);
    }
    .content-section {
      margin-top: 100px;
      width: 100%;
      max-width: 1016px;
    }
    @media (max-width: 991px) {
      .content-section {
        max-width: 100%;
        margin-top: 40px;
      }
    }
    .content-wrapper {
      gap: 20px;
      display: flex;
    }
    @media (max-width: 991px) {
      .content-wrapper {
        flex-direction: column;
        align-items: stretch;
        gap: 0;
      }
    }
    .text-column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 61%;
      margin-left: 0;
    }
    @media (max-width: 991px) {
      .text-column {
        width: 100%;
      }
    }
    .text-content {
      display: flex;
      flex-direction: column;
      align-self: stretch;
      font-family: Inter, sans-serif;
      color: #000;
      justify-content: start;
      margin: auto 0;
    }
    @media (max-width: 991px) {
      .text-content {
        max-width: 100%;
        margin-top: 40px;
      }
    }
    .main-heading {
      border-radius: 0;
      width: 387px;
      max-width: 100%;
      font: 600 40px/1.3 Inter, sans-serif;
      text-transform: capitalize;
    }
    .description-text {
      border-radius: 0;
      margin-top: 25px;
      max-width: 100%;
      width: 481px;
      font: 400 22px/24px Inter, sans-serif;
    }
    @media (max-width: 991px) {
      .description-text {
        max-width: 100%;
      }
    }
    .image-column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 39%;
      margin-left: 20px;
    }
    @media (max-width: 991px) {
      .image-column {
        width: 100%;
      }
    }
    .feature-image {
      aspect-ratio: 0.9;
      object-fit: contain;
      object-position: center;
      width: 100%;
      flex-grow: 1;
    }
    @media (max-width: 991px) {
      .feature-image {
        margin-top: 40px;
      }
    }
   .brand-title {
  transform: rotate(0deg);
  align-self: center;
  margin-top: 264px;
  gap: 10px;
  color: rgba(5, 22, 80, 1);
  white-space: nowrap;
  font: 800 60px/1 Sofia Sans, sans-serif; /* Adjusted font size */
  text-align: center; /* Center the text */
}
    @media (max-width: 991px) {
      .brand-title {
        max-width: 100%;
        font-size: 40px;
        margin-top: 40px;
        white-space: initial;
      }
    }
    .footer-section {
      background-color: rgba(174, 203, 214, 0.25);
      border-color: rgba(0, 0, 0, 1);
      border-top-width: 1px;
      align-self: stretch;
      display: flex;
      margin-top: 79px;
      width: 100%;
      flex-direction: column;
      padding: 139px 80px 24px;
    }
    @media (max-width: 991px) {
      .footer-section {
        max-width: 100%;
        margin-top: 40px;
        padding: 100px 20px 0;
      }
    }
    .footer-container {
      width: 100%;
      max-width: 1242px;
    }
    @media (max-width: 991px) {
      .footer-container {
        max-width: 100%;
      }
    }
    .footer-content {
      gap: 20px;
      display: flex;
    }
    @media (max-width: 991px) {
      .footer-content {
        flex-direction: column;
        align-items: stretch;
        gap: 0;
      }
    }
    .brand-column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 30%;
      margin-left: 0;
    }
    @media (max-width: 991px) {
      .brand-column {
        width: 100%;
      }
    }
    .brand-content {
      display: flex;
      flex-grow: 1;
      flex-direction: column;
    }
    @media (max-width: 991px) {
      .brand-content {
        margin-top: 40px;
      }
    }
    .footer-brand {
      color: rgba(5, 22, 80, 1);
      font: 800 32px Sofia Sans, sans-serif;
      align-items: center;
    }

    .payment-section {
      display: flex;
      margin-top: 51px;
      width: 100%;
      flex-direction: column;
      justify-content: start;
    }
    @media (max-width: 991px) {
      .payment-section {
        margin-top: 40px;
      }
    }
    .payment-title {
      color: rgba(0, 0, 0, 1);
      font: 500 20px/40px Inter, sans-serif;
    }
    .payment-icons {
      display: flex;
      margin-top: 16px;
      min-height: 49px;
      max-width: 100%;
      width: 182px;
      align-items: start;
      gap: 24px;
      justify-content: start;
    }
    .payment-icon {
      aspect-ratio: 1.33;
      object-fit: contain;
      object-position: center;
      width: 65px;
    }
    .payment-icon-2 {
      aspect-ratio: 1.9;
      object-fit: contain;
      object-position: center;
      width: 93px;
    }
    .contact-column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 20%;
      margin-left: 20px;
    }
    @media (max-width: 991px) {
      .contact-column {
        width: 100%;
      }
    }
    .contact-content {
      display: flex;
      flex-direction: column;
      justify-content: start;
    }
    @media (max-width: 991px) {
      .contact-content {
        margin-top: 40px;
      }
    }
    .contact-title {
      color: #000;
      text-transform: capitalize;
      font: 500 32px/1 Inter, sans-serif;
    }
    .contact-icons {
      display: flex;
      margin-top: 16px;
      align-items: start;
      gap: 26px;
      justify-content: start;
    }
    .contact-icon {
      aspect-ratio: 1.13;
      object-fit: contain;
      object-position: center;
      width: 70px;
    }
    .contact-icon-2 {
      display: flex;
      width: 36px;
      height: 36px;
    }
    .support-column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 18%;
      margin-left: 20px;
    }
    @media (max-width: 991px) {
      .support-column {
        width: 100%;
      }
    }
    .support-content {
      display: flex;
      flex-direction: column;
      color: #000;
      white-space: nowrap;
      justify-content: start;
      font: 400 22px/1 Inter, sans-serif;
    }
    @media (max-width: 991px) {
      .support-content {
        margin-top: 40px;
        white-space: initial;
      }
    }
    .support-title {
      font: 500 32px/1 Inter, sans-serif;
      text-transform: capitalize;
    }
    .support-link {
      margin-top: 16px;
      color: inherit;
      text-decoration: none;
    }
    .location-column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 32%;
      margin-left: 20px;
    }
    @media (max-width: 991px) {
      .location-column {
        width: 100%;
      }
    }
    .location-content {
      display: flex;
      flex-direction: column;
      font-family: Inter, sans-serif;
      color: #000;
      justify-content: start;
    }
    @media (max-width: 991px) {
      .location-content {
        margin-top: 40px;
      }
    }
    .location-title {
      font: 500 32px/1 Inter, sans-serif;
      text-transform: capitalize;
    }
    .location-address {
      font: 400 22px/24px Inter, sans-serif;
      margin-top: 16px;
    }
    .footer-divider {
      object-fit: contain;
      object-position: center;
      width: 100%;
      border-radius: 0;
      margin-top: 27px;
    }
    @media (max-width: 991px) {
      .footer-divider {
        max-width: 100%;
      }
    }
    .footer-copyright {
      color: #000;
      text-align: center;
      align-self: center;
      margin-top: 84px;
      font: 400 22px/1 Inter, sans-serif;
    }
    @media (max-width: 991px) {
      .footer-copyright {
        margin-top: 40px;
      }
    }
  </style>
  
  <br>
  <br>
  <br>
  <br>
  <div class="main-container">
    <div class="header-container">
      <div class="header-wrapper">
        <h1 class="company-title">Diamond Ace Resources</h1>
        <div class="header-underline"></div>
      </div>
    </div>
    <div class="content-section">
      <div class="content-wrapper">
        <div class="text-column">
          <div class="text-content">
            <h2 class="main-heading">Fast and Affordable</h2>
            <p class="description-text">
              We provide the best service and quality printing services with
              affordable price for our lovely customers.
            </p>
          </div>
        </div>
        <div class="image-column">
          <img
            loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/7ad8fd7966a331c40c362081191ebfda37acc70d72bb45548a00a716db83c285?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b"
            class="feature-image"
            alt="Printing service illustration"
          />
        </div>
      </div>
    </div>
    <h2 class="brand-title">AceThesis@U</h2>
    <footer class="footer-section">
      <div class="footer-container">
        <div class="footer-content">
          <div class="brand-column">
            <div class="brand-content">
              <h3 class="footer-brand">AceThesis@U</h3>
              <div class="payment-section">
                <h4 class="payment-title">Accepted payment</h4>
                <div class="payment-icons">
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/f560c75be039cfb92bbcf1ba89f209d0f33cb6cba5f7803b37121d2ddb10bc8c?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b"
                    class="payment-icon"
                    alt="Payment method 1"
                  />
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/4a8fa7e4164a9c9f7d1fac9147445dc1d1a0bd5604ddda3bbc9cc947f4c47ed2?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b"
                    class="payment-icon-2"
                    alt="Payment method 2"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="contact-column">
            <div class="contact-content">
              <h4 class="contact-title">Contact</h4>
              <div class="contact-icons">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/21a9fd6f801ffed0388a56673a07b899780ff05f472336ed71a99b7313b5756a?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b"
                  class="contact-icon"
                  alt="Contact icon"
                />
                <div class="contact-icon-2" role="img" aria-label="Additional contact method"></div>
              </div>
            </div>
          </div>
          <nav class="support-column">
            <div class="support-content">
              <h4 class="support-title">Support</h4>
              <a href="#faq" class="support-link">FAQ</a>
              <a href="#contact" class="support-link">Contact</a>
            </div>
          </nav>
          <div class="location-column">
            <div class="location-content">
              <h4 class="location-title">Location</h4>
              <address class="location-address">
                No. 26 Jalan U1/1 Taman Universiti 35900 Tg Malim Perak
              </address>
            </div>
          </div>
        </div>
      </div>
      <img
        loading="lazy"
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/5ec332a523a659aff1b089d22d35ea1914e52ffccc754509890248a83f298b8b?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b"
        class="footer-divider"
        alt=""
      />
      <p class="footer-copyright">@Powered by Diamond Ace Resources</p>
    </footer>
  </div>