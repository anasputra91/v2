@extends('auth.auth-template')
@section('content')
    <div class="d-flex flex-row-fluid bg-body flex-center">
        <div class="d-flex flex-column flex-row-fluid h-100 w-75 bg-body rounded shadow-sm p-10 p-lg-15 mx-auto flex-center">
            <div class="d-flex flex-column-fluid h-100 w-350px">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST"
                    action="{{ route('login') }}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-5">
                        <img alt="Logo" src="{{ asset('img/logo kanan.png') }}" class="mb-80"  width="300" />
                        <!--begin::Title-->
                        <h4 class="text-dark mb-3">Sign In to AHPharma App</h4>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-4">New Here?
                            <a href="{{ route('register') }}" class="link-primary fw-bolder">Create an Account</a>
                        </div>
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label fs-6 fw-bolder text-dark">{{ __('Email Address') }}</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input id="email" type="email" name="email"
                            class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack mb-2">
                            <!--begin::Label-->
                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                            <!--end::Label-->
                            <!--begin::Link-->
                            @if (Route::has('password.request'))
                                <a class="link-primary fs-7 fw-bolder" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password ?') }}
                                </a>
                            @endif
                            <!--end::Link-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Input-->
                        <input id="password" type="password" name="password"
                            class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                            required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <!--begin::Submit button-->
                        <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                            {{ __('Masuk') }}
                        </button>
                        <!--end::Submit button-->
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <div class="d-flex flex-column-auto flex-center w-100 h-50px">
                <ul class="menu menu-gray-400 menu-hover-primary fw-bold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
