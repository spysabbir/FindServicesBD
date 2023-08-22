@extends('backend.layouts.auth_master')

@section('title', 'Forgot Password')

@section('content')
<!--begin::Wrapper-->
<div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
    @if (session('status'))
    <div class="alert alert-info">
        <strong>{{ session('status') }}</strong>
    </div>
    @endif
    <!--begin::Form-->
    <form class="form w-100" method="POST" action="{{ route('password.email') }}">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Forgot Password ?</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
            <input class="form-control form-control-solid" type="email" value="{{ old('email') }}" placeholder="Enter Email Address" name="email" autocomplete="off" />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="submit" class="btn btn-lg btn-primary fw-bolder me-4">
                <span class="indicator-label">Submit</span>
            </button>
            <a href="{{ route('login') }}" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
    </div>
    <!--end::Wrapper-->
@endsection
