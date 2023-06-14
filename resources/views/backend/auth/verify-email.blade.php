@extends('backend.layouts.auth_master')

@section('title', 'Verification Email')

@section('content')
<div class="authentication-header"></div>
<div class="authentication-forgot d-flex align-items-center justify-content-center">
    <div class="card forgot-box">
        <div class="card-body">
            <div class="p-4 rounded">
                <div class="text-center">
                    <img src="{{ asset('backend') }}/images/icons/lock.png" width="120" alt="" />
                </div>
                <h4 class="mt-5 font-weight-bold">Thanks for signing up!</h4>
                <p class="text-muted">Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
                @if (session('status') == 'verification-link-sent')
                    <span class="text-success">A new verification link has been sent to the email address you provided during registration.</span>
                @endif
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Resend Verification Email</button>
                    </div>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger btn-lg">Log Out</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
