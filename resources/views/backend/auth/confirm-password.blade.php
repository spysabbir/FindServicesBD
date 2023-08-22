@extends('backend.layouts.auth_master')

@section('title', 'Confirm Password')

@section('content')

@endsection
<!--begin::Wrapper-->
<div class="pt-lg-10">
    <!--begin::Logo-->
    <h1 class="fw-bolder fs-2qx text-dark mb-7">Password is changed</h1>
    <!--end::Logo-->
    <!--begin::Message-->
    <div class="fw-bold fs-3 text-gray-400 mb-15">Your password is successfully changed. Please Sign
    <br />in to your account and start a new project.</div>
    <!--end::Message-->
    <!--begin::Form-->
    <form class="form w-100" method="POST" action="{{ route('password.confirm') }}">
        @csrf
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
        <!--begin::Actions-->
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg fw-bolder">
                <span class="indicator-label">Sign In</span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Wrapper-->
