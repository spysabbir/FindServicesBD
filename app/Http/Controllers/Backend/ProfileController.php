<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function profile(){
        $url = '';
        if (Auth::user()->role == 'Admin') {
            $url = 'backend.admin.profile';
        }
        if (Auth::user()->role == 'Employee') {
            $url = 'backend.employee.profile';
        }
        if (Auth::user()->role == 'User') {
            $url = 'backend.user.profile';
        }

        return view($url, [
            'user' => Auth::user(),
        ]);
    }

    public function profileUpdate(Request $request){
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255'],
            'phone_number' => 'nullable|min:11|max:14|regex:/^(?:\+?88)?01[35-9]\d{8}$/',
            'profile_photo' => 'nullable|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->update($request->except('_token', 'profile_photo'));

        if($request->hasFile('profile_photo')){
            if($request->user()->profile_photo != 'default_profile_photo.png'){
                unlink(base_path("public/uploads/profile_photo/").$request->user()->profile_photo);
            }
            $profile_photo_name = $request->user()->id."-Profile-Photo".".". $request->file('profile_photo')->getClientOriginalExtension();
            $upload_link = base_path("public/uploads/profile_photo/").$profile_photo_name;
            Image::make($request->file('profile_photo'))->resize(120, 120)->save($upload_link);
            $request->user()->update([
                'profile_photo' => $profile_photo_name
            ]);
        }

        $notification = array(
            'message' => 'Profile updated successfully.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function passwordUpdate(Request $request)
    {

        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
            'password_confirmation' => ['required', Password::defaults()],
        ]);

        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);

        $notification = array(
            'message' => 'Password updated successfully.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
