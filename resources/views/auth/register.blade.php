@extends('../.template.loginAndSignup')
@section('content')
    <section id="hero-form" class="d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 hero-left"></div>
                {{-- <x-jet-authentication-card> --}}
                <div class="col-md-6 form-right ">
                    
                    <form action="{{route('register')}}" method="post">
                        @csrf

                        <img  class="mt-2" src="{{asset('img/logo.png')}}" alt="itindosolution" width="60px">
                        <h3 class="mt-2">Daftar</h3>

                        <div class="mb-3 mt-4">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" class="form-control @error('name')is-invalid @enderror" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                            @error('name')
								<div class="invalid-feedback">
								{{ $message}}
								</div>
							@enderror
                        </div>

                        <div class="mb-3 mt-4">
                            <label for="username" class="form-label">Userame</label>
                            <input id="username" class="form-control @error('username')is-invalid @enderror" type="text" name="username" :value="old('username')" required autocomplete="username"/>
                            @error('username')
								<div class="invalid-feedback">
								{{ $message}}
								</div>
							@enderror
                        </div>

                        <div class="mt-4">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" class="form-control @error('email')is-invalid @enderror" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                            @error('email')
								<div class="invalid-feedback">
								{{ $message}}
								</div>
							@enderror
                        </div>

                        <div class="mt-4">
                            <label for="no_handphone" class="form-label">No.Handphone/Wa</label>
                            <input id="no_handphone" class="form-control @error('no_handphone')is-invalid @enderror" type="number" name="no_handphone" required autocomplete="no_handphone" />
                            @error('no_handphone')
								<div class="invalid-feedback">
								{{ $message}}
								</div>
							@enderror
                        </div>
                        
                        <div class="mt-4">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" class="form-control @error('password')is-invalid @enderror" type="password" name="password" required autocomplete="mew-password" />
                            @error('password')
								<div class="invalid-feedback">
								{{ $message}}
								</div>
							@enderror
                        </div>

                        <div class="mt-4">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="mew-password" />
                        </div>
            
                        <div class="d-grid gap-2">
                            <x-jet-button class="btn btn-primary mt-4 mb-4 text-center">{{ __('Daftar') }}</x-jet-button>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                                <a class="" href="{{ route('password.request') }}">
                                Login With Google
                                </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection 