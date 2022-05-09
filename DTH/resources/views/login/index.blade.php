@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-5">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="form-signin">
      <h2 class="text-center"><b>KOMINFO - Keuangan</b><br>
        <h4 class="mt-3 mb-5 text-center"> DTH</h4>
      <form action="/login" method="post">
        @csrf

        <div class="form-floating">
          <input type="username" name="username" class="mb-3 form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $massage }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" autofocus required>
          <label for="password">Password</label>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <p class="mt-5 mb-3 text-center">Politeknik Negeri Madiun 2022</p>
      </form>
        <a href="{{route('register')}}" class="w-100 btn btn-lg btn-outline-primary" type="submit">Register</a>
  </main>
  </div>
</div>

@endsection