@extends('layouts.main2')

@section('container')
        
<main class="form-signin w-100 m-auto">
    <form action="/registration" method="POST">
      @csrf
      {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
      <h1 class="h3 mb-3 fw-normal">Register form</h1>
      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror rounded-top" style="border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;margin-bottom: -1px;" id="floatingInput" placeholder="username" value="{{ old('name') }}">
        <label for="floatingInput">username</label>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control rounded-0 @error('email') is-invalid @enderror" id="floatingInput" placeholder="email" value="{{ old('email') }}">
        <label for="floatingInput">Email address</label>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="invalid-feedback mb-2">
            {{ $message }}
        </div>
        @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Regiter</button>
        <p class="mt-3 mb-3 text-muted">Back to <a href="/login">Login form !</a></p>
    </form>
  </main>
@endsection