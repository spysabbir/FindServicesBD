@extends('backend.layouts.auth_master')

@section('title', 'Sign in')

@section('content')
{{-- <div class="col-md-6">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
        <label class="form-check-label" for="remember_me">Remember Me</label>
    </div>
</div> --}}
<!--begin::Wrapper-->
<div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
    @if (session('status'))
    <div class="alert alert-info">
        <strong>{{ session('status') }}</strong>
    </div>
    @endif
    <!--begin::Form-->
    <form class="form w-100" method="POST" action="{{ route('login') }}">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Sign In to Metronic</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">New Here?
            <a href="{{ route('register') }}" class="link-primary fw-bolder">Create an Account</a></div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" value="{{ old('email') }}" placeholder="Enter Email Address"/>
            <!--end::Input-->
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
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
                <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                <!--end::Link-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" placeholder="Enter Password"/>
            <!--end::Input-->
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-check form-check-custom form-check-solid form-check-inline" for="remember_me">
                <input class="form-check-input" type="checkbox" id="remember_me" name="remember" />
                <span class="form-check-label fw-bold text-gray-700 fs-6">Remember Me</span>
            </label>
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Continue</span>
            </button>
            <!--end::Submit button-->
            <!--begin::Separator-->
            <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
            <!--end::Separator-->
            <!--begin::Google link-->
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="{{ asset('backend') }}/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google
            </a>
            <!--end::Google link-->
            <!--begin::Facebook link-->
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="{{ asset('backend') }}/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook
            </a>
            <!--end::Facebook link-->
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Wrapper-->
@endsection
