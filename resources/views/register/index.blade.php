@extends('layouts.main')

@section('content')
<main>
<div class="login" style="background-image: url(img/login.jpg);background-size:cover;width:100%">
  <div class="container">
    <div class="register-page d-flex">
      <div class="bg-light rounded shadow register-container">
        <main class="form-signin w-100 m-auto "> 
          <h1 class="h3 mb-3 fw-bold text-center pt-3">Register</h1>
          <form action="/register" method="POST">
            @csrf
            <div class="form-floating">
              <input type="text" class="form-control" @error('password') is-invalid @enderror id="floatingInput" placeholder="Name">
              <label for="floatingInput">Name</label>
              @error('name')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror
            </div>
          <div class="form-floating">
            <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxxxxxxx">
            <label for="floatingInput">Telp</label>
          </div>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Retype-Password</label>
          </div>
            <button class="w-100 btn btn-lg btn-primary btnReg" type="submit"><a href="/register">Register</a></button>
            <div class="mt-4 text-center pb-3">
              Already Registered? <a href="/login">Login</a>
            </div>
          </div>
        </form>
        </main>
      </div>
    </div>
  </div>
</div>
</main>


{{-- <main>
  <div class="container">
    <div class="register-page d-flex">
      <div class="bg-light rounded shadow">
      <main class="form-signin m-auto"> 
      <h1 class="h3 mb-3 fw-bold text-center">Register</h1>
      <form action="/register" method="POST">
      @csrf
      <div class="form-floating">
        <input type="text" class="form-control" @error('password') is-invalid @enderror id="floatingInput" placeholder="Name">
        <label for="floatingInput">Name</label>
        @error('name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxxxxxxx">
        <label for="floatingInput">Telp</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="password">
        <label for="floatingInput">Password</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Retype-Password</label>
      </div>
        <button class="w-100 btn btn-lg btn-primary btnReg" type="submit"><a href="/register">Register</a></button>
        <div class="mt-4 text-center pb-3">
          Already Registered? <a href="/login">Login</a>
        </div>
      </div>
      </div>
    </form>
  </main> --}}

@endsection