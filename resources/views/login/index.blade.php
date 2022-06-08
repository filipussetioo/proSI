@extends('layouts.main')

@section('content')
<main style="background-image: url(img/login2.jpg);background-size:cover;width:100%">
  <div class="container">
    <div class="login-page d-flex">
      <div class="bg-white rounded shadow-lg login-container">
        <main class="form-signin w-100 m-auto "> 
          <h1 class="h3 mb-3 fw-bold text-center pt-3">LOGIN</h1>
        <form method="get">
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-group m-0">
            <button class="w-100 btn btn-lg btn-primary btnReg" type="submit">Login</button>
          </div>
          <div class="mt-4 text-center pb-3">
            Don't have an account? <a href="/register">Create One</a>
          </div>
        </form>
        </main>
      </div>
    </div>
  </div>
</main>
@endsection