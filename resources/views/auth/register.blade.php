@extends('layouts.app')
@section('navbar')
@endsection
@section('content')
<section class="hero is-fullheight">
  <!-- Hero header: will stick at the top -->
  <div class="hero-head">
    <header class="nav">
      <div class="container">
        <div class="nav-left">
          <a class="nav-item" href="/">
            <img src="/img/BL_logo.png" alt="Better Loads logo">
          </a>
        </div>
        <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
    </header>
  </div>

  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column is-offset-1 is-5">
          <figure class="image">
            <img src="/img/brand.svg" style="width: 500px">
          </figure>
        </div>
        <div class="column is-offset-1 is-4">
          <h1 class="title is-3">Sign up for Better Loads</h1>
          <form class="form-horizontal" id="signup-form" role="form" method="POST" action="{{ route('register') }}">

            {{ csrf_field() }}

            <div class="field">
              <p class="control has-icons-left">
                <input class="input is-medium {{ $errors->has('firstName') ? ' is-danger' : '' }}" value="{{ old('firstName') }}" name="firstName" type="text" placeholder="First Name" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </span>
              </p>
              @if ($errors->has('firstName'))
              <p class="help is-danger">{{ $errors->first('firstName') }}</p>
              @endif
            </div>

            <div class="field">
              <p class="control has-icons-left">
                <input class="input is-medium {{ $errors->has('lastName') ? ' is-danger' : '' }}" value="{{ old('lastName') }}" name="lastName" type="text" placeholder="Last Name" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </span>
              </p>
              @if ($errors->has('lastName'))
              <p class="help is-danger">{{ $errors->first('lastName') }}</p>
              @endif
            </div>

            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input is-medium {{ $errors->has('email') ? ' is-danger' : '' }}" value="{{ old('email') }}"  name="email" type="text" placeholder="Email" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
              </p>
              @if ($errors->has('email'))
              <p class="help is-danger">{{ $errors->first('email') }}</p>
              @endif
            </div>

            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input is-medium {{ $errors->has('phone') ? ' is-danger' : '' }}" value="{{ old('phone') }}"  name="phone" type="text" placeholder="Phone" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                </span>
              </p>
              @if ($errors->has('phone'))
              <p class="help is-danger">{{ $errors->first('phone') }}</p>
              @endif
            </div>

            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input is-medium {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Password" name="password" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
              </p>
              @if ($errors->has('password'))
              <p class="help is-danger">{{ $errors->first('password') }}</p>
              @endif
            </div>
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input is-medium {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
              </p>
            </div>
            <p class="control">
              <button class="button is-medium is-primary">Register</button>
            </p>
          </form>
          <p>Already have an account?</p>
          <a href="/login">Log in</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
