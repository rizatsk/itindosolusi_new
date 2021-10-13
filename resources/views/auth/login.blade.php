@extends('../.template.loginAndSignup')
@section('content')

    <section id="hero-form" class="d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 hero-left"></div>
                {{-- <x-jet-authentication-card> --}}
                <div class="col-md-4 form-right ">

                    @if ($errors->any())
                        <div class="mt-2">
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                  Login Gagal ! 
                                  Email/Password anda salah.
                                </div>
                            </div>
                        </div>
                    @endif
                    
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <img  class="mt-2" src="{{asset('img/logo.png')}}" alt="itindosolution" width="60px">
                        <h3 class="mt-2">Log in</h3>
                        <div class="mb-3 mt-4">
                            <label for="auth" class="form-label">Email/Username/Phone Number</label>
                            <input id="auth" class="form-control" type="text" name="auth" :value="old('auth')" required autofocus />
                        </div>
            
                        <div class="mt-4">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                        </div>
            
                        <div class="d-block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
            
                        <div class="d-grid gap-2">
                            <x-jet-button class="btn btn-primary mt-4 mb-4 text-center">{{ __('Log in') }}</x-jet-button>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    Lupa password ?
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
                {{-- </x-jet-authentication-card> --}}
            </div>
        </div>
    </section>

@endsection