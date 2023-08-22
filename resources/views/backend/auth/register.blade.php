@extends('backend.layouts.auth_master')

@section('title', 'Sign Up')

@section('content')
<!--begin::Wrapper-->
<div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
    <!--begin::Form-->
    <form class="form w-100" method="POST" action="{{ route('register') }}">
        @csrf
        <!--begin::Heading-->
        <div class="mb-10 text-center">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Create an Account</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">Already have an account?
            <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a></div>
            <!--end::Link-->
        </div>
        <!--end::Heading-->
        <!--begin::Action-->
        <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
        <img alt="Logo" src="{{ asset('backend') }}/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Sign in with Google</button>
        <!--end::Action-->
        <!--begin::Separator-->
        <div class="d-flex align-items-center mb-10">
            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
            <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
        </div>
        <!--end::Separator-->
        <!--begin::Input group-->
        <div class="row fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Full Name</label>
            <input class="form-control form-control-lg form-control-solid" type="text" value="{{ old('name') }}" placeholder="Enter Full Name" name="name" autocomplete="off" />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Email</label>
            <input class="form-control form-control-lg form-control-solid" type="email" value="{{ old('email') }}" placeholder="Enter Email" name="email" autocomplete="off" />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-10 fv-row" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                <!--end::Label-->
                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Enter Password" name="password" autocomplete="off" />
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <!--end::Input wrapper-->
                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
                <!--end::Meter-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Hint-->
            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
            <!--end::Hint-->
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!--end::Input group=-->
        <!--begin::Input group-->
        <div class="fv-row mb-5">
            <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Enter Confirm Password" name="password_confirmation" autocomplete="off" />
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-check form-check-custom form-check-solid form-check-inline" for="terms_conditions">
                <input class="form-check-input" type="checkbox" name="terms_conditions" id="terms_conditions" value="Yes" />
                <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
            </label>
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <button type="submit" class="btn btn-lg btn-primary">
                <span class="indicator-label">Submit</span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Wrapper-->
@endsection
