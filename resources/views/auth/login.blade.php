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
      <div class="column is-offset-7 is-4" >
        <h1 class="title is-3">Log in to Better Loads</h1>
        <p class="subtitle is-5">Or create a free account now <a href="/register">Sign up</a></p>
        <form role="form" id="login-form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="field">
            <!-- <label class="label">Email</label> -->
            <p class="control has-icons-left has-icons-right">
              <input class="input is-medium {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" type="text" placeholder="Email input" required>
              <span class="icon is-small is-left">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </p>
            @if ($errors->has('email'))
            <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
          </div>
          <div class="field">
            <!-- <label class="label">Password</label> -->
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
            <p class="control">
              <label class="checkbox is-medium">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                Remember Me
              </label>
            </p>
          </div>
          <p class="control">
            <button class="button is-medium is-primary">Submit</button>
          </p>
        </form>
        <a href="{{ route('password.request') }}" class=" is-medium is-link">Forgot Your Password?</a>
      </div>
    </div>
  </div>
</section>
<!-- <div class="form-group">
    <div class="col-md-8 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Login
        </button>

        <a class="btn btn-link" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
    </div>
  </div> -->


  @endsection
