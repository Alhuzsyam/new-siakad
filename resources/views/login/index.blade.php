@extends('layouts.main2')

@section('container')
        
<main class="form-signin w-100 m-auto">
    <form action="/login" method="POST">
      @csrf
      {{-- <img class="mb-4" src="{{ asset('Assets/img/logo.jpg') }}" alt="" width="72" height="57"> --}}
      @if(session()->has('sucess'))
      <div class="alert alert-success" role="alert">
        {{ session('sucess') }}
      </div>
      @endif
      @if(session()->has('logError'))
      <div class="alert alert-danger" role="alert">
        {{ session('logError') }}
      </div>
      @endif
      <h1 class="h3 mb-3 fw-normal">Sign in form::</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="floatingInput">Email address</label>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-3 mb-3 text-muted">Not regitered ?  <a href="/registration">Register now !</a></p>
    </form>
  </main>
@endsection