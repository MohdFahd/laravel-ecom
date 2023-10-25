@extends("auth.layouts.app")

@section("content")
				<div class="container">
								<section class="h-100 gradient-form">
												<div class="h-100 container py-5">
																<div class="row d-flex justify-content-center align-items-center h-100">
																				<div class="col-xl-10">
																								<div class="card rounded-3 text-black">
																												<div class="row g-0">
																																<div class="col-lg-6">
																																				<div class="card-body p-md-5 mx-md-4">

												<div class="text-center">
																																												<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
																																																style="width: 185px;" alt="logo">
																																												<h4 class="mb-5 mt-1 pb-1">We are The Lotus Team</h4>
																																								</div>

																																								<form method="POST" action="{{ route("login") }}">
																																												@csrf
																																												<p>Please login to your account</p>

																																												<div class="form-outline mb-4">
																																																<input id="email" type="email"
																																																				class="form-control @error("email") is-invalid @enderror" name="email"
																																																				value="{{ old("email") }}" required autocomplete="email" autofocus>

																																																@error("email")
																																																				<span class="invalid-feedback" role="alert">
																																																								<strong>{{ $message }}</strong>
																																																				</span>
																																																@enderror

																																																<label class="form-label" for="form2Example11">Username</label>
																																												</div>

																																												<div class="form-outline mb-4">
																																																<input id="password" type="password"
																																																				class="form-control @error("password") is-invalid @enderror"
																																																				name="password" required autocomplete="current-password">

																																																@error("password")
																																																				<span class="invalid-feedback" role="alert">
																																																								<strong>{{ $message }}</strong>
																																																				</span>
																																																@enderror
																																																<label class="form-label" for="form2Example22">Password</label>
																																												</div>
																																												{{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}
																																												<div class="mb-5 pb-1 pt-1 text-center">
																																																<button type="submit" class="btn btn-primary">
																																																				{{ __("Login") }}
																																																</button>
																																																@if (Route::has("password.request"))
																																																				<a class="btn btn-link" href="{{ route("password.request") }}">
																																																								{{ __("Forgot Your Password?") }}
																																																				</a>
																																																@endif
																																												</div>

																																												<div class="d-flex align-items-center justify-content-center pb-4">
																																																<p class="mb-0 me-2">Don't have an account?</p>
																																																<button type="button" class="btn btn-outline-danger">Create new</button>
																																												</div>

																																								</form>

																																				</div>
																																</div>
																																<div class="col-lg-6 d-flex align-items-center gradient-custom-2 bg-warning">
																																				<div class="p-md-5 mx-md-4 px-3 py-4 text-white">
																																								<h4 class="mb-4">We are more than just a company</h4>
																																								<p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
																																												do eiusmod
																																												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
																																												quis nostrud
																																												exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</section>
				</div>
@endsection
