@extends('backend.layouts.auth_master')

@section('title', 'Verification Email')

@section('content')
<!--begin::Wrapper-->
<div class="pt-lg-10">
    <!--begin::Logo-->
    <h1 class="fw-bolder fs-2qx text-dark mb-7">Verify Your Email</h1>
    <!--end::Logo-->
    <!--begin::Message-->
    @if (session('status') == 'verification-link-sent')
    <div class="fs-3 fw-bold text-gray-400 mb-10">We have sent an email to
    <a href="#" class="link-primary fw-bolder">max@keenthemes.com</a>
    <br />pelase follow a link to verify your email.</div>
    @endif
    <!--end::Message-->
    <!--begin::Action-->
    <div class="text-center mb-10">
        <form method="POST" action="{{ route('logout') }}">
        @csrf
            <button type="submit" class="btn btn-lg btn-primary fw-bolder">Log Out</button>
        </form>
    </div>
    <!--end::Action-->
    <!--begin::Action-->
    <div class="fs-5">
        <form method="POST" action="{{ route('verification.send') }}">
        @csrf
            <span class="fw-bold text-gray-700">Did’t receive an email?</span>
            <button type="submit" class="link-primary fw-bolder">Resend</button>
        </form>
    </div>
    <!--end::Action-->
</div>
<!--end::Wrapper-->

@endsection
