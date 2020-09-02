@extends('layouts.app')

@section('content')

    <div class="card">
    <div class="card-body login-card-body">

      <form action="{{ route('login') }}" method="post">
      @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="continue" value="{{ session()->get('continue') }}">
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email" id="email" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" id="password" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- O -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Ingresar con Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Ingresar con Google+
        </a>
      </div>
      <!-- /.social-auth-links -->
      @if (Route::has('password.request'))
      <p class="mb-1">
        <a href="forgot-password.html">Olvidaste tu contraseña?</a>
      </p>
      @endif
      <p class="mb-0">
        <a href="register.html" class="text-center">No tienes una cuenta?</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
@endsection
