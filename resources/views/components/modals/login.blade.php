  <!-- Modal Login -->
  <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="bg-warning rounded-top p-2">
          <h3 class="text-white font-weight-bold mb-0 ml-2">Login</h3>
        </div>

        <div class="border rounded-bottom-md border-top-0">
          <div class="p-3">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control border @error('email') is-invalid @enderror" placeholder="User Name" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                <div class="form-group">
                    <input type="password"  class="form-control border @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger text-uppercase w-100">
                        Log In
                    </button>

                    @if (Route::has('password.request'))
                        <div class="form-group text-center text-secondary mt-2 mb-0">
                            <a class="text-danger" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@section('js')
    
  <script>
      console.log('hey')
  </script>

@endsection