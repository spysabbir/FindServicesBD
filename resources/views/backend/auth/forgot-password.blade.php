@extends('backend.layouts.auth_master')

@section('title', 'Forgot Password')

@section('content')
<div class="authentication-header"></div>
<div class="authentication-forgot d-flex align-items-center justify-content-center">
    <div class="card forgot-box">
        <div class="card-body">
            <div class="p-4 rounded">
                <div class="text-center">
                    <img src="{{ asset('backend') }}/images/icons/lock.png" width="120" alt="" />
                </div>
                <h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
                <p class="text-muted">Enter your registered email ID to reset the password</p>
                @if (session('status'))
                <div class="alert alert-info">
                    <strong>{{ session('status') }}</strong>
                </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="my-4">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Enter Email Address">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Forgot Password</button>
                        <a href="{{ route('login') }}" class="btn btn-white btn-lg"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
