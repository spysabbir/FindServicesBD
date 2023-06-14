@extends('backend.layouts.auth_master')

@section('title', 'Confirm Password')

@section('content')
<div class="authentication-header"></div>
<div class="authentication-forgot d-flex align-items-center justify-content-center">
    <div class="card forgot-box">
        <div class="card-body">
            <div class="p-4 rounded">
                <div class="text-center">
                    <img src="{{ asset('backend') }}/images/icons/lock.png" width="120" alt="" />
                </div>
                <h4 class="mt-5 font-weight-bold">Confirm Password</h4>
                <p class="text-muted">This is a secure area of the application. Please confirm your password before continuing.</p>
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <div class="my-4">
                        <label for="password" class="form-label">Enter Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control border-end-0" name="password" id="password" placeholder="Enter Password">
                            <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
