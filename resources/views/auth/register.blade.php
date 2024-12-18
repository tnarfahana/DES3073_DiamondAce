@extends('layouts.app')

@section('content')
<style>
    .signup-container {
      background-color: rgba(226, 234, 252, 1);
      display: flex;
      flex-direction: column;
      overflow: hidden;
      align-items: center;
      font-family: Poppins, sans-serif;
      justify-content: center;
      padding: 88px 80px;
    }
    .signup-wrapper {
      display: flex;
      width: 715px;
      max-width: 100%;
      flex-direction: column;
      align-items: center;
    }
    .brand-title {
      color: rgba(1, 8, 45, 1);
      font: 800 40px Sofia Sans, sans-serif;
    }
    .header-content {
      display: flex;
      margin-top: 20px;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    .header-image {
      aspect-ratio: 0.84;
      object-fit: contain;
      object-position: center;
      width: 222px;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      max-width: 100%;
    }
    .page-title {
      color: rgba(51, 51, 51, 1);
      font-size: 32px;
      font-weight: 500;
      text-align: center;
    }
    .login-text {
      gap: 10px;
      font-size: 16px;
      color: rgba(102, 102, 102, 1);
      font-weight: 400;
      padding: 2px;
    }
    .login-link {
      color: rgba(17, 17, 17, 1);
    }
    .form-container {
      align-self: stretch;
      display: flex;
      margin-top: 76px;
      flex-direction: column;
      justify-content: start;
    }
    .form-group {
      display: flex;
      width: 100%;
      flex-direction: column;
      font-size: 16px;
      font-weight: 400;
      margin-top: 40px;
    }
    .form-group:first-child {
      margin-top: 0;
    }
    .input-wrapper {
      display: flex;
      flex-direction: column;
      justify-content: start;
    }
    .input-label {
      width: 100%;
      color: rgba(102, 102, 102, 1);
      padding: 2px 0;
    }
    .input-field {
      border-radius: 12px;
      display: flex;
      margin-top: 4px;
      width: 100%;
      flex-direction: column;
      overflow: hidden;
      align-items: start;
      color: rgba(102, 102, 102, 0.6);
      justify-content: center;
      padding: 16px 24px;
      border: 1px solid rgba(102, 102, 102, 0.35);
    }
    .password-header {
      display: flex;
      width: 100%;
      padding-right: 9px;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .password-toggle {
      display: flex;
      gap: 8px;
      font-size: 18px;
      color: rgba(102, 102, 102, 0.8);
      white-space: nowrap;
      text-align: right;
    }
    .toggle-icon {
      aspect-ratio: 1;
      object-fit: contain;
      object-position: center;
      width: 24px;
      align-self: start;
    }
    .password-hint {
      color: rgba(102, 102, 102, 1);
      font-size: 14px;
      margin-top: 4px;
    }
    .terms-section,
    .button-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .terms-section {
      margin-top: 40px;
    }
    .terms-text {
      width: 100%;
      gap: 10px;
      padding: 8px 8px 8px 0;
      color: rgba(51, 51, 51, 1);
    }
    .terms-link {
      text-decoration: underline;
      color: rgba(17, 17, 17, 1);
    }
    .submit-button {
      border-radius: 40px;
      background-color: rgba(5, 22, 80, 1);
      display: flex;
      margin-top: 20px;
      width: 100%;
      max-width: 715px;
      flex-direction: column;
      overflow: hidden;
      align-items: center;
      font-size: 22px;
      color: rgba(255, 255, 255, 1);
      font-weight: 500;
      justify-content: center;
      padding: 16px 70px;
      border: none;
      cursor: pointer;
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
    @media (max-width: 991px) {
      .signup-container {
        padding: 0 20px;
      }
      .form-container {
        max-width: 100%;
        margin-top: 40px;
      }
      .input-wrapper {
        max-width: 100%;
      }
      .input-label {
        max-width: 100%;
        padding-right: 20px;
      }
      .input-field {
        max-width: 100%;
        padding: 0 20px;
      }
      .password-toggle {
        white-space: initial;
      }
      .password-hint {
        max-width: 100%;
      }
      .terms-text {
        max-width: 100%;
      }
      .submit-button {
        max-width: 100%;
        padding: 0 20px;
      }
    }
  </style>
  
  <div class="signup-container">
    <div class="signup-wrapper">
      <h1 class="brand-title">AceThesis@U</h1>
      <div class="header-content">
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/ecce87cb7bcdbb91b0b073ae644dcba15ef7ab339b48e508ee81288bdd03dbdc?placeholderIfAbsent=true&apiKey=d74a886dda9b49c28f4f5cb3243aa07b"
          class="header-image"
          alt="AceThesis@U Logo"
        />
        <h2 class="page-title">Create an account</h2>
        <div class="login-text">
          Already have an account?
          <a href="#" class="login-link">Log in</a>
        </div>
      </div>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-container">
          <div class="form-group">
            <div class="input-wrapper">
              <label for="name" class="input-label">What should we call you?</label>
              <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your profile name">
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <div class="input-wrapper">
              <label for="email" class="input-label">What's your email?</label>
              <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email address">
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <div class="input-wrapper">
              <div class="password-header">
                <label for="password" class="input-label">Create a password</label>
              </div>
              <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
              <div class="password-hint" role="alert">
                Use 8 or more characters with a mix of letters, numbers & symbols
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-wrapper">
              <div class="password-header">
                <label for="password-confirm" class="input-label">Confirm password</label>
              </div>
              <input type="password" id="password-confirm" class="input-field" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
            </div>
          </div>
          <div class="terms-section">
            <div class="terms-text">
              By creating an account, you agree to the
              <a href="#" class="terms-link">Terms of use</a>
              and
              <a href="#" class="terms-link">Privacy Policy.</a>
            </div>
          </div>
          <div class="button-section">
            <button type="submit" class="submit-button">Create an account</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
