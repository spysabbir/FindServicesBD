@extends('backend.layouts.backend_master')

@section('title', 'Profile')

@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card social theme-bg gradient">
            <div class="profile-header d-sm-flex justify-content-between justify-content-center">
                <div class="d-flex">
                    <div class="mr-3">
                        <img src="{{ asset('uploads/profile_photo') }}/{{ $user->profile_photo }}" id="profilePhotoPreview" class="rounded" alt="">
                    </div>
                    <div class="details">
                        <h5 class="mb-0">{{ $user->name }}</h5>
                        <span class="text-light">{{ $user->email }}</span>
                        <p class="mb-0">
                            <span>Created Account: <strong>{{ $user->created_at->format('D d-M,Y h:m:s A') }}</strong></span>
                            <br>
                            <span>Last Active: <strong>{{ date('d-M,Y h:m:s A', strtotime($user->last_active_at)) }}</strong></span>
                        </p>
                    </div>
                </div>
                <div>
                    <button class="btn btn-default">{{ $user->role }}</button>
                    <button class="btn btn-dark">{{ $user->status }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-5">
        <div class="card">
            <div class="header">
                <h2>Info</h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                </ul>
            </div>
            <div class="body">
                <small class="text-muted">Email address: </small>
                <p>{{ $user->email }}</p>
                <hr>
                <small class="text-muted">Mobile: </small>
                <p>{{ $user->phone_number }}</p>
                <hr>
                <small class="text-muted">Birth Date: </small>
                <p>{{ $user->date_of_birth }}</p>
                <hr>
                <small class="text-muted">Gender: </small>
                <p>{{ $user->gender }}</p>
                <hr>
                <small class="text-muted">Address: </small>
                <p class="m-b-0">{{ $user->address }}</p>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h2>Basic Information</h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                </ul>
            </div>
            <div class="body">
                <form method="post" action="{{ route('profile.update') }}" class="" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group c_form_group">
                                <label>Profile photo</label>
                                <input type="file" class="form-control" name="profile_photo" id="profilePhoto"/>
                                @error('profile_photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group c_form_group">
                                <label>Full name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" placeholder="Full Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group c_form_group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" placeholder="Phone Number">
                                @error('phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group c_form_group">
                                <label>Select Gander</label>
                                <select class="form-control" name="gender">
                                    <option value="">--Select Gander--</option>
                                    <option value="Male" @selected(old('gender', $user->gender) == 'Male')>Male</option>
                                    <option value="Female" @selected(old('gender', $user->gender) == 'Female')>Female</option>
                                    <option value="Other" @selected(old('gender', $user->gender) == 'Other')>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group c_form_group">
                                <label>Select Birthdate</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-calendar"></i></span>
                                    </div>
                                    <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth', $user->date_of_birth) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group c_form_group">
                                <label>Enter Address</label>
                                <textarea rows="4" type="text" class="form-control" name="address" placeholder="Address">{{ old('address', $user->address) }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary theme-bg gradient">Update</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Account Password</h2>
            </div>
            <div class="body">
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group c_form_group">
                                <label>Current Password</label>
                                <input type="password" class="form-control" name="current_password" placeholder="Enter Current Password">
                                @error('current_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group c_form_group">
                                <label>New Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter New Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group c_form_group">
                                <label>Confirm New Password</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary theme-bg gradient">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        // Profile Photo Preview
        $('#profilePhoto').change(function(){
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profilePhotoPreview').attr('src', e.target.result).show();
            }
            reader.readAsDataURL(this.files[0]);
        });
    })
</script>
@endsection
