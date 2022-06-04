@extends('layouts.main')

@section('content')
<main class="form-signin w-100 m-auto">
    <form>
      <h1 class="h3 mb-3 fw-normal">Login</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <div class="container">
      <div class="row">
          <div class="col">
            <button class="w-50 btn btn-lg btn-primary" type="button"><a href="/register">Register</a></button>
            <div class="col">
            <button class="w-50 btn btn-lg btn-primary" type="submit">Sign in</button>
            </div>
          </div>
      </div>
      </div>
    </form>
  </main>
@endsection