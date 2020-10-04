@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </div>
              </div>


          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="estado" value="{{ old('estado') }}" required autocomplete="estado" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="pais" value="{{ old('pais') }}" required autocomplete="pais" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fandom') }}</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="fandom" value="{{ old('fandom') }}" required autocomplete="fandom" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Stan') }}</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="stan" value="{{ old('stan') }}" required autocomplete="stan" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ultimate') }}</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="ultimate" value="{{ old('ultimate') }}" required autocomplete="ultimate" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Bias') }}</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="bias" value="{{ old('bias') }}" required autocomplete="bias" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>



              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
